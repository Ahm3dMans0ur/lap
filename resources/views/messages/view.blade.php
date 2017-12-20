@extends('layouts.frontend')

@section('title')

    @lang('messages.messages')

@endsection

@section('content')

    <section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container">
          <ol class="breadcrumb pull-left bg-transparent xxs-pt-40 xxs-mt-2">
            <li><a href="{!! route('user.edit') !!}" class="font-jfflat"> @lang('app.Dashboard') </a></li>
            <li><a href="{!! route('messages.inbox') !!}" class="font-jfflat"> @lang('messages.messages') </a></li>
                                {{-- MAKE SURE TO IMPLEMENT PROPER LOCALIZATION FOR THIS (REPLY-TO) STRING --}}
            <li class="active"> {{ str_replace('reply to: ', 'رد: ', str_limit($message->title,10) ) }} </li>
          </ol>
          <h1 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> @lang('messages.messages') &mdash; {{ str_replace('reply to: ', 'رد: ', str_limit($message->title,20) ) }} </h1>
        </div>
    </section>

    <div class="container pull-up-40 position-relative z-index-medium">
        <div class="row">
          <div class="pull-left offers col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
            <div class="bg-light card-dp-3 border-radius-md md-form user-panel-left-pane">
              <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                <span class="pull-left xxs-ml-10 text-sm xxs-p-5 xxs-mt-20 xxs-pt-15 text-darkgray line-height-xs"> {{ $message->created_at }} </span>
                <span class="pull-left xxs-ml-10 text-sm xxs-p-5 xxs-mt-20 xxs-pt-8 text-darkgray line-height-xs"> بواسطة: <a href="{!! route('user.profile', $message->sender()->first()->username) !!}" class="btn btn-sm btn-gray btn-link full-underline xxs-m-0 xxs-p-0" target="_blank">{{ $message->sender()->first()->username.'@' }}</a> </span>
                <div class="pull-right xxs-p-20">
                  <span class="display-inline-block va-top xxs-mt-2 text-gray font-droidkufi text-bold xxs-p-10"> {{ str_replace('reply to: ', 'رد: ', $message->title) }} </span>
                </div>
              </div>
              <div class="xxs-p-20 clearfix">
                <div class="line-height-xl xxs-pr-20 xxs-pl-20 white-space-pre-line"> {{ trim($message->content) }} </div>
              </div>
              <div class="clearfix xxs-p-20 border-top-solid-lightgray-1">
                <section class="col-xs-12 comments xxs-mb-40 clearfix">
                    <div class="clearfix">
                        <a href="#" class="btn btn-block btn-ghost btn-gray border-radius-xs btn-lg text-md" data-action="toggleComments">
                            <span class="display-inline-block va-top icon-bubbles text-lg xxs-mt-2 xxs-ml-5"></span>
                            <span class="display-inline-block va-top"> الردود </span>
                        </a>
                    </div>
                    <div class="xxs-mt-20 clearfix replies">
                        @foreach($message->replies as $reply)
                        <section class="xxs-pt-20 xxs-mt-20 border-top-solid-lightgray-1 clearfix">
                            <div class="pull-right text-right square-lg">
                                <a href="{{route('user.profile',$reply->sender()->first()->username)}}" class="display-inline-block va-top border-radius-xs overflow-hidden xxs-mt-10">
                                    <img src="{{ $reply->sender()->first()->getImage() }}" alt="User Avatar" class="img-responsive display-block margin-auto full-width">
                                </a>
                            </div>
                            <div class="xxs-pr-60">
                                <a href="{{route('user.profile', $reply->sender()->first()->username)}}" class="btn btn-link btn-sm btn-gray text-bold no-underline">
                                    <span class="display-inline-block va-top text-lg xxs-pt-5"> {{ $reply->sender()->first()->name }} </span></a>
                                <div class="line-height-xl xxs-pr-10">
                                    {{ $reply->content }}
                                </div>
                            </div>
                            <div class="pull-left line-height-xl text-sm xxs-pr-10">{{ $reply->created_at }}</div>
                        </section>
                        @endforeach
                    </div>
                </section>
                <form id="replyForm" class="md-form clearfix xxs-pr-80 xxs-mt-40 xxs-mb-40 col-xs-12" data-route="{!! route('messages.reply',$message->id) !!}">
                    <div class="form-group border-top-dotted-lightgray-1 xxs-pt-5">
                        <div class="display-block">
                            <label class="display-inline-block va-top text-sm text-gray bg-light xxs-p-8 xxs-pl-20 xxs-pr-0 pull-up-20" for="reply_message"> رسالتك </label>
                        </div>
                        <div class="display-block xxs-mt-20">
                            <textarea class="form-control xxs-pr-0" placeholder="اكتب رسالتك هنا.." rows="3" id="reply_message"></textarea>
                        </div>
                    </div>
                    <div class="form-group form-submit xxs-mt-20">
                        <button class="btn btn-sm btn-primary xxs-p-8 xxs-pr-15 xxs-pl-15 reply-submit"> ارسال </button>
                    </div>
                </form>
              </div>
            </div>
          </div>
          @include('blocks._user-nav-sidebar', ['selected' => ''])

        </div>
    </div>

@endsection

@section('scripts')
    <script>
        (function($)
        {
            var $form = $('#replyForm');
            var $msgInput = $('#reply_message', $form);
            var _route = $form.data('route');

            var _simpleValidation = function()
            {
                if ( $.trim($msgInput.val() + '').length > 0 )
                {
                    $msgInput.closest('.form-group').removeClass('has-error');
                    return true;
                }

                $msgInput.closest('.form-group').addClass('has-error');
                return false;
            };

            var _formHandler = function(event)
            {
                event.preventDefault();

                if ( _simpleValidation() )
                {
                    var reply_message = $.trim($msgInput.val() + '');

                    $.ajax({
                        url: _route,
                        type: 'post',
                        data: {reply_message: reply_message, _token: $("meta[name='csrf_token']").attr('content')},
                        success: function (data) {
                            var str = '';

                            str +='<section class="xxs-pt-20 xxs-mt-20 border-top-solid-lightgray-1 clearfix">';
                            str +='  <div class="pull-right text-right">';
                            str +=' <a href="#" class="display-inline-block va-top square-lg border-radius-round overflow-hidden">';
                            str +='<img src="'+data.avatar+'" alt="User Avatar" class="img-responsive display-block margin-auto full-width border-radius-round">';
                            str +='</a> </div> <div class="xxs-pr-60">';
                            str +='  <a href="#" class="btn btn-link btn-sm btn-gray text-bold no-underline">';
                            str +='  <span class="display-inline-block va-top text-lg xxs-pt-5"> '+data.from+' </span></a>';
                            str +='   <div class="line-height-xl text-sm xxs-pr-10">';
                            str +=data.content;
                            str +='</div> </div><div class="pull-left line-height-xl text-sm xxs-pr-10">'+data.created_at+'</div> </section>';
                            $msgInput.val('')
                            $(".replies").append(str);

                            swal({
                                title: 'تم الارسال بنجاح',
                                text: 'تم ارسال رسالتك بنجاح',
                                type: 'success',
                                timer: 1500,
                                showCancelButton: false,
                                showConfirmButton: false,
                                closeOnConfirm: false,
                                closeOnCancel: false
                            });
                        },
                        error: function()
                        {
                            swal({
                                title: 'خطأ',
                                text: 'لم يكتمل طلب الارسال يرجى اعادة المحاولة',
                                type: 'error',
                                timer: 1500,
                                showCancelButton: false,
                                showConfirmButton: false,
                                closeOnConfirm: false,
                                closeOnCancel: false
                            });
                        }
                    });
                }
            };

            $form.on('submit', _formHandler);
        })(jQuery);
    </script>

@append