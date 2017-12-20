<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-7 quick-nav clearfix">
                <ul class="xs-text-center md-text-right list-reset">
                    <li>
                        <a href="{{route('categories.index')}}"> @lang('app.All Categories') </a>
                    </li>
                    <li>
                        <a href="{{route('stores.all')}}"> @lang('app.Stores') </a>
                    </li>
                    <li>
                        <a href="{{route('stores.map')}}"> اﻻقرب اليك </a>
                    </li>
                    <li>
                        <a href="{{ route('services.all') }}"> @lang('app.Reservations') </a>
                    </li>
                    <li>
                        <a href="{{route('products.auctions')}}"> @lang('products.Auctions') </a>
                    </li>
{{--                     @foreach($list_categories as $k => $category)
                        <li class="dropdown position-relative">
                            <a href="{{route('categories.show', $category->slug)}}" id="quickNavDropdown{{$k}}"
                               data-toggle="{{ $category->childs? 'dropdown' : ''}}" aria-haspopup="true"
                               aria-expanded="true"> {!! $category->name !!}
                                @if($category->childs) <span class="caret"></span> @endif
                            </a>
                            @if($category->childs)
                                <ul class="dropdown-menu dd-maxheight" aria-labelledby="quickNavDropdown{{$k}}">
                                    @foreach($category->childs as $child)
                                        <li>
                                            <a href="{!! route('categories.show', $child->slug) !!}"> {!! $child->name !!} </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach --}}
                </ul>
            </div>
            <div class="col-xs-12 col-sm-5 user-area xs-text-center md-text-left">
                <hr class="xxs-m-0 visible-xs"/>
                @if (Auth::check())
                    <span class="display-inline-block va-top xxs-pt-10">
                        <span class="text-muted"> مرحباً </span>
                        <span class="text-primary"> {{Auth::user()->name}} </span>
                    </span>
                    <i class="v-separator"></i>
                    <div class="display-inline-block va-top dropdown">
                        <a class="btn btn-sm btn-link" href="#" id="quickNavDropdownUser" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="true"> حسابى <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="quickNavDropdownUser">
                            @if (Auth::user()->store)
                                <li><a href="{{ route('order.store.view') }}">
                                        <span class="display-inline-block va-top xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-list"></span>
                                        <span class="display-inline-block va-top"> @lang('messages.display orders') </span></a>
                                </li>
                                <li><a href="{{ route('services.index') }}">
                                        <span class="display-inline-block va-top xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-calendar"></span>
                                        <span class="display-inline-block va-top"> @lang('services.Services') </span></a>
                                </li>
                                <li><a href="{{ route('stores.show', Auth::user()->store->slug) }}">
                                        <span class="display-inline-block va-top xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-briefcase"></span>
                                        <span class="display-inline-block va-top"> متجري </span></a></li>
                                <li><a href="{{ route('stores.manage', Auth::user()->store->slug) }}">
                                        <span class="display-inline-block va-top xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-settings"></span>
                                        <span class="display-inline-block va-top"> معلومات متجري </span></a></li>
                                {{--                             <li><a href="{{ route('offers.create') }}">
                                                                <span class="display-inline-block va-top xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-present"></span>
                                                                <span class="display-inline-block va-top"> @lang('messages.create offer') </span></a></li> --}}
                            @else
                                <li><a href="{{ route('stores.welcome') }}" class="bg-danger">
                                        <span class="display-inline-block va-top text-dark xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-energy"></span>
                                        <span class="display-inline-block va-top text-dark"> إنشاء متجر </span></a></li>
                                <li><a href="{{route('user.profile',auth()->user()->username)}}">
                                        <span class="display-inline-block va-top xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-user"></span>
                                        <span class="display-inline-block va-top"> صفحتي الشخصية </span></a></li>
                            @endif

                            <li><a href="{{ route('products.create') }}">
                                    <span class="display-inline-block va-top xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-plus"></span>
                                    <span class="display-inline-block va-top"> @lang('app.Create Product') </span></a>
                            </li>

                            <li><a href="{{ url('/user/edit') }}">
                                    <span class="display-inline-block va-top xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-settings"></span>
                                    <span class="display-inline-block va-top"> @lang('messages.profile_edit') </span></a>
                            </li>
                                <li><a href="{!! route('user.favorites') !!}">
                                        <span class="display-inline-block va-top xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-star"></span>
                                        <span class="display-inline-block va-top"> @lang('messages.favorites') </span></a>
                                </li>
                            <li><a href="{{ route('order.user.view') }}">
                                    <span class="display-inline-block va-top xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-bag"></span>
                                    <span class="display-inline-block va-top"> @lang('orders.My orders') </span></a>
                            </li>
                            <li><a href="{{ route('reservations.index') }}">
                                    <span class="display-inline-block va-top xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-calendar"></span>
                                    <span class="display-inline-block va-top"> @lang('reservations.Reservations') </span></a>
                            </li>
                            <li><a href="{{ route('messages.inbox') }}">
                                    <span class="display-inline-block va-top xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-envelope-letter"></span>
                                    <span class="display-inline-block va-top"> الرسائل </span></a></li>

                            <li><a href="{!! url('/logout') !!}" class="logout">
                                    <span class="display-inline-block va-top text-danger xxs-pt-1 xxs-mt-2 xxs-ml-5 icon-logout"></span>
                                    <span class="display-inline-block va-top text-danger"> تسجيل الخروج </span></a></li>
                        </ul>
                    </div>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <a href="{{ url('/register') }}" class="btn btn-sm btn-link"> تسجيل حساب </a>
                    <i class="v-separator"></i>
                    <a href="{{ url('/login') }}" class="btn btn-sm btn-ghost"> تسجيل الدخول </a>
                @endif
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        $(document).on('click', '.logout', function (e) {
            e.preventDefault();
            swal({
                    title: "{{ trans('auth.are you sure') }}",
                    text: "{{ trans('auth.have a nice day') }}",
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonText: "{{ trans('auth.cancel') }}",
                    confirmButtonColor: "#dd6b55",
                    confirmButtonText: "{{ trans('auth.logout') }}"
                }).then(function(){
                    document.getElementById('logout-form').submit();
                });
        });
    </script>

@stop