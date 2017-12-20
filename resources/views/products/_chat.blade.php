<div id="chat_body" class="col-xs-12 col-md-10 col-md-pull-1 bg-light card-dp-2 border-radius-md xxs-mt-40 xxs-p-0 xxs-pt-20 xxs-pb-20">

    <div class="col-xs-4 col-md-3 pre-scrollable z-users-list">
        <ul class="list-reset">
            <li v-model="users" v-for="user in users" class="z-user">
                <a href="{{url('user/profile/')}}/@{{ user.username }}" class="font-jfflat display-block clearfix xxs-mb-10">
                    <div class="display-inline-block va-top xxs-ml-5 z-user-img hidden-xs">
                        <img class="image-responsive border-radius-round xmini-avatar" src="@{{ user.avatar }}" alt="@{{ user.fullname }}">
                    </div>
                    <div class="display-inline-block va-top xxs-pt-8 z-user-name truncate-130"> @{{ user.fullname }} </div>
                    <i v-if="user.is_online && user.lastLocation != 'product.{{$product->id}}'" class="user-status idle pull-left xxs-mt-15 border-radius-round"></i>
                    <i v-if="user.is_online && user.lastLocation == 'product.{{$product->id}}'" class="user-status online pull-left xxs-mt-15 border-radius-round"></i>
                    <i v-if="!user.is_online && user.lastLocation == null" class="user-status pull-left xxs-mt-15 border-radius-round"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="col-xs-8 col-md-9">
        <div class="pre-scrollable">
        <div class="conversation clearfix" v-model="messages" v-for="message in messages">
            <div class="xxs-mb-20 clearfix"></div>
            <div class="message pull-right" v-if="message.user.id == {{ isset(Auth::user()->id) ? Auth::user()->id : null }}">
                <div class="clearfix">
                    <div class="pull-right xxs-ml-10">
                        <img class="image-responsive border-radius-round xmini-avatar" src="@{{ message.user.avatar }}" alt="@{{ user.fullname }}">
                    </div>
                    <div class="xxs-pr-50">
                        <div class="xxs-mb-2 xxs-p-5 text-light bg-gray border-radius-sm">
                            @{{ message.body }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="message pull-left" v-else>
                <div class="clearfix">
                    <div class="pull-left xxs-mr-10">
                        <img class="image-responsive border-radius-round xmini-avatar" src="@{{ message.user.avatar }}" alt="@{{ user.fullname }}">
                    </div>
                    <div class="xxs-pl-50">
                        <div class="xxs-mb-2 xxs-p-5 text-light bg-primary border-radius-sm">
                            @{{ message.body }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <form class="conversation-controls xxs-mt-40 md-form" id="form_chat"
              v-on:submit.prevent="sendMessage()"
              method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group col-xs-7 col-md-9 col-lg-10 z-send-tex">
                <input type="text" name="message" v-model="form_message"
                       class="form-control input-lg xxs-pr-0"
                       placeholder="رسالتك..">
            </div>
            <div class="col-xs-5 col-md-3 col-lg-2 xxs-pt-10 xxs-mt-2 z-send-btn">
                <button class="btn btn-block btn-primary btn-ghost"> ارسال</button>
            </div>
        </form>
    </div>
</div>
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.min.js"></script>
    <script src="https://unpkg.com/vue-resource@1.2.1/dist/vue-resource.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.5.0/socket.io.min.js"></script>
    <script>
        $(document).ready(function (e) {

        var socket = io.connect('{{config('app.chatServerPath')}}', {reconnect: true,query: 'chat_token={{ isset($chat_token) ? $chat_token : null }}'});
            // socket.join('product-{{$product->id}}');
            socket.emit("subscribe", { room: 'product.{{$product->id}}' });

            function parseChatMessage(message)
            {
                if (message.type == 'system')
                {
                    switch(message.body)
                    {
                        case 'userLeave':
                            message.body = "{{\Lang::get('chat.User UserName Leave the chat')}}".replace('UserName',message.user.fullname);
                        break;
                        case 'userJoin':
                            message.body = "{{\Lang::get('chat.User UserName Join the chat')}}".replace('UserName',message.user.fullname);
                        break;
                    }
                }
                return message;
            }
            new Vue({
                el: '#chat_body',
                data: {
                    form_message: "",
                    users: [],
                    messages: []
                },
                methods: {
                    sendMessage () {
                        @if(isset(Auth::user()->id))
                        var data = {
                            'message': this.form_message,
                            '_token': $('#form_chat').find("input[name='_token']").val()
                        }
                        this.$http.post('/chat/{{$product->id}}', data)
                            .then(response => {
                                this.form_message = ""
                            });
                        @else
                            swal({
                                title: "خطأ",
                                text: "رجاء تسجيل الدخول اولا",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonClass: "btn-danger",
                                cancelButtonText: "اغلاق",
                                confirmButtonText: "تسجيل الدخول",
                                closeOnConfirm: false
                            },
                            function () {
                                window.location='/login';
                            });
                        @endif
                    },
                },
                ready: function () {

                    socket.on('full-log', function (data)
                    {
                        if (data.users)
                        {
                            this.users = data.users;
                        }
                        if (data.messages)
                        {
                            data.messages.map(function(message)
                            {
                                return parseChatMessage(message);
                            });
                            this.messages = data.messages;
                        }
                    }.bind(this));
                    socket.on('message', function (data)
                    {

                        this.messages.push(parseChatMessage(data));
                    }.bind(this));


                    socket.on('userStatus', function (newUser)
                    {
                        var index = null;
                        // console.log('before',this.users);
                        this.users.forEach(function(userRef,userIndex)
                        {
                            if (userRef._id == newUser._id)
                            {
                                index = userIndex;
                            }
                        });
                        if (index === null)
                        {
                            this.users.push(newUser);
                        }
                        else
                        {
                            this.users[index].lastLocation = newUser.lastLocation;
                            this.users[index].is_online = newUser.is_online;
                        }
                    }.bind(this));
                }
            });
        });
    </script>
@append
