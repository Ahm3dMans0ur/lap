@extends('layouts.frontend')

@section('title')
    {{ $user->name }}
@endsection


@section('content')
<section class="position-relative z-index-low overflow-hidden text-center"></section>
<section class="main-profile-nav bg-light position-absolute full-width z-index-low">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9 col-md-pull-3">
                <div class="product-tabs pull-right">
                    <ul class="nav nav-tabs profile-tabs bg-transparent bgt-important xxs-pr-0" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#storeMain" aria-controls="storeMain" role="tab" data-toggle="tab"> الرئيسية </a>
                        </li>
                        <li role="presentation">
                            <a href="#profileAbout" aria-controls="profileAbout" role="tab" data-toggle="tab">     معلومات
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#followersPage" aria-controls="followersPage" role="tab" data-toggle="tab">
                                @lang('messages.followers')
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#followingsPage" aria-controls="followingsPage" role="tab" data-toggle="tab">
                                @lang('messages.followings')
                            </a>
                        </li>
                    </ul>
                </div>

                @if( auth()->user() && $user->id == auth()->user()->id)
                <a href="{{ route('user.edit') }}" class="pull-left btn btn-lg btn-link btn-gray xxs-mt-5 xxs-pt-10 xxs-pb-8 no-underline xxs-mb-0">
                    <span class="icon icon-settings text-md"></span>
                </a>
                @endif

                @if( auth()->user() && $user->id != auth()->user()->id)
                    <div class="clearfix visible-xs"></div>
                    <div class="clearfix visible-xs">
                        <hr class="xxs-m-0"> </div>
                    <div class="pull-left xxs-mt-8 xxs-mr-5 xxs-mb-5">
                        {!! Form::open(['route'=>'user.add_follow']) !!}
                        {!! Form::hidden('following_id', $user->id) !!}
                        <button class="btn btn-sm btn-ghost border-radius-sm xxs-mt-5 xxs-pr-15 xxs-pl-15 @if(count(auth()->user()->follow($user->id)) > 0) btn-dark @else btn-primary @endif" type="submit">
                        @if(count(auth()->user()->follow($user->id)) > 0)
                            <i class="display-inline-block va-top xxs-mt-2 xxs-pt-1 xxs-pl-5 icon-close"></i> الغاء المتابعة
                        @else
                            <i class="display-inline-block va-top xxs-mt-2 xxs-pt-1 xxs-pl-5 icon-check"></i> متابعة
                        @endif
                        </button>
                        {!! Form::close() !!}
                    </div>
                    <div class="pull-left xxs-mt-8 xxs-mr-5 xxs-mb-10">
                        <a href="{!! route('messages.send_view', $user->id) !!}" class="btn btn-dark btn-sm border-radius-sm xxs-mt-5 xxs-pr-15 xxs-pl-15"> <i class="display-inline-block va-top xxs-mt-2 xxs-pt-1 xxs-pl-5 icon-envelope"></i> ارسل رسالة </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<div class="container position-static">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3 xxs-mt-100 position-relative z-index-medium">
            <div class="clearfix">
                <a href="{{ $user->getImage() }}" data-lightbox="userpic" data-title="{{$user->name}}" class="col-xs-12 xxs-p-5 bg-light card-dp-1 border-radius-md profile-pic">
                    <img src="{{ $user->getImage() }}" alt="{{ $user->username }}"
                         class="full-width border-radius-sm img-responsive full-width display-block margin-auto">
                </a>
            </div>
            <h1 class="xxs-mt-20 xxs-p-0">
                <a href="#" class="text-xs text-primary text-bold font-jfflat">
                    {{$user->username.'@'}}
                </a>
            </h1>
            {{--<p class="xxs-mt-10 font-droidkufi text-sm">{{ $store->description }}</p>--}}
            @include('users._profile-manage')
            <div class="hidden-xs">
            @if ($top_liked)
            @include('products._lighted-list',['block_title' => Lang::get('products.Top Liked'),'products' => $top_liked])
            @endif
            {{-- @include('blocks._profile_categories-cards') --}}
            </div>
        </div>

        <div class="tab-content position-relative z-index-high xxs-mt-60">

            {{--products block--}}
            @include('stores._products')
            <div id="profileAbout" class="tab-pane col-xs-12 col-sm-8 col-md-9 position-relative z-index-high xxs-pt-2" role="tabpanel">
                <div class="col-xs-12 bg-light card-dp-2 xxs-mt-40 boxed-offers offers border-radius-md clearfix xxs-p-0">
                    <div class="col-xs-12 xxs-p-20 bg-primary border-radius-md-top">
                        <h2 class="xxs-p-0 text-light text-bold font-jfflat">
                            {{$user->name}}
                        </h2>
                        <p>مشترك {{\Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</p>
                    </div>
                    <div class="col-xs-12 xxs-mt-20 xxs-p-20">
                        <ul class="thumbnails list-unstyled text-center xxs-pr-0">
                            <li class="col-md-4">
                                <div class="thumbnail xxs-p-0">
                                    <div class="caption position-relative">
                                        <h3 class="text-xxxl xxs-mt-40 position-relative z-index-high">{{ $allLikes }}</h3>
                                        <h2 class="border-top-solid-midgray-1 text-xl xxs-mt-40 xxs-pt-20"><span>@lang('messages.all likes')</span></h2>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="thumbnail xxs-p-0">
                                    <div class="caption position-relative">
                                        <h3 class="text-xxxl xxs-mt-40 position-relative z-index-high">{{ $allViews }}</h3>
                                        <h2 class="border-top-solid-midgray-1 text-xl xxs-mt-40 xxs-pt-20"><span>@lang('messages.all views')</span></h2>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="thumbnail xxs-p-0">
                                    <div class="caption position-relative">
                                        <h3 class="text-xxxl xxs-mt-40 position-relative z-index-high">{{ $allFollowers }}</h3>
                                        <h2 class="border-top-solid-midgray-1 text-xl xxs-mt-40 xxs-pt-20"><span>@lang('messages.all followers')</span></h2>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            @include('users._profile-follow-user',[
                'fragment'=>'followersPage',
                'relation'=>'follower',
                'resource' => $user->followers()])
            @include('users._profile-follow-user',[
                'fragment'=>'followingsPage',
                'relation'=>'user',
                'resource' => $user->followings()])



        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
$(function(){
    $('ul.profile-tabs a[href="#storeMain"]').tab('show');
    var hash = window.location.hash;
    hash && $('ul.profile-tabs a[href="' + hash + '"]').tab('show');

    $('.profile-tabs a').click(function (e) {
        $(this).tab('show');
        var scrollmem = $('body').scrollTop() || $('html').scrollTop();
        window.location.hash = this.hash;
        $('html,body').scrollTop(scrollmem);
        e.preventDefault();
    });
});
</script>
@append