<section class="main-profile-nav bg-light position-absolute full-width z-index-low">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-9 col-sm-pull-4 col-md-pull-3">
                <div class="product-tabs pull-right">
                    <ul class="nav nav-tabs profile-tabs bg-transparent bgt-important xxs-pr-0 xxs-pl-0" role="tablist">
                        <li class="" role="presentation" class="active">
                            <a href="#storeMain" aria-controls="storeMain" role="tab" data-toggle="tab"> الرئيسية </a>
                        </li>
                        <li class="" role="presentation">
                            <a href="#storeAbout" aria-controls="storeAbout" role="tab" data-toggle="tab">عنا</a>
                        </li>
                        <li class="" role="presentation">
                            <a href="#storeProducts" aria-controls="storeProducts" role="tab" data-toggle="tab">
                                @lang('app.Products')
                            </a>
                        </li>
                        <li class="" role="presentation">
                            <a href="#storeServices" aria-controls="storeServices" role="tab" data-toggle="tab">
                                @lang('services.Services')
                            </a>
                        </li>
                        @if(auth()->user() && $store->user()->first()->id == auth()->user()->id)
                            <li class="" role="presentation">
                                <a href="#storeReservations" aria-controls="storeReservations" role="tab" data-toggle="tab">
                                    @lang('reservations.Reservations requests')
                                </a>
                            </li>
                        @endif
                        <li class="" role="presentation">
                            <a href="#followersPage" aria-controls="followersPage" role="tab" data-toggle="tab">
                                @lang('messages.followers')
                            </a>
                        </li>
                        <li class="" role="presentation">
                            <a href="#followingsPage" aria-controls="followingsPage" role="tab" data-toggle="tab">
                                @lang('messages.storeFollowings')
                            </a>
                        </li>
                    </ul>
                </div>
                {{--  @if(auth()->user() && $store->user()->first()->id == auth()->user()->id) --}}
                @if(auth()->user() && $store->user()->first()->id == auth()->user()->id)
                    <a href="{{route('stores.manage')}}"
                       class="pull-left btn btn-lg btn-link btn-gray xxs-pt-10 xxs-pb-8 no-underline">
                        <span class="icon icon-settings text-md"></span>
                    </a>
                @endif
                @if(auth()->user() && $store->user()->first()->id != auth()->user()->id)
                    <div class="clearfix visible-xs"></div>
                    <div class="clearfix visible-xs">
                        <hr class="xxs-m-0">
                    </div>
                {{--send message to store owner--}}
                    <div class="pull-left xxs-mt-8 xxs-mr-5 xxs-mb-10">
                        <a href="{!! route('messages.send_view', $store->user->id) !!}" class="btn btn-dark btn-sm border-radius-sm xxs-mt-5 xxs-pr-15 xxs-pl-15"> <i class="display-inline-block va-top xxs-mt-2 xxs-pt-1 xxs-pl-5 icon-envelope"></i> ارسل رسالة </a>
                    </div>
                    {{--<div class="pull-left xxs-mt-5 xxs-mb-8 xxs-pt-2">--}}
                    {{--{!! Form::open(['route'=>'user.add_follow']) !!}--}}
                    {{--{!! Form::hidden('following_id', $store->user()->first()->id) !!}--}}
                    {{--<button class="btn btn-sm btn-ghost border-radius-sm xxs-mt-5 xxs-pr-15 xxs-pl-15 @if(count(auth()->user()->follow($store->user()->first()->id)) > 0) btn-dark @else btn-primary @endif" type="submit">--}}
                    {{--@if(count(auth()->user()->follow($store->user()->first()->id)) > 0)--}}
                    {{--<i class="display-inline-block va-top xxs-mt-2 xxs-pt-1 xxs-pl-5 icon-close"></i> الغاء المتابعة--}}
                    {{--@else--}}
                    {{--<i class="display-inline-block va-top xxs-mt-2 xxs-pt-1 xxs-pl-5 icon-check"></i> متابعة--}}
                    {{--@endif--}}
                    {{--</button>--}}
                    {{--{!! Form::close() !!}--}}
                    {{--</div>--}}
                @endif
            </div>
        </div>
    </div>
</section>