@extends('layouts.frontend')
@section('title')
    {{ $store->name }}
@endsection
@section('content')
@include('stores._cover')
@include('stores._menu')

<div class="container position-static">
    <div class="row">
        @include('stores._left')
        <div class="tab-content position-relative z-index-high xxs-mt-60">
            <div id="storeOffers" class="tab-pane col-xs-12 col-sm-12 col-md-9 position-relative z-index-high xxs-mt-60">
                @include('inc._lighted-box',[
                    'block_title' => Lang::get('products.New Offers'),
                    'block_loop' => $productsHasOffers,
                ])
            </div>
            {{-- store home tab --}}
            @include('stores._products',['disable_search' => true,'products' => $new_products])
            {{-- products tab --}}
            @include('stores._products',['custom_id' => 'storeProducts','top_selling' => false,'new_services' => false])
            @include('stores._services',['services' => $store->activeServices])
            @if(auth()->user() && $store->user()->first()->id == auth()->user()->id)
                @include('stores._reservations')
            @endif
            @include('stores._info')
            @include('users._profile-follow-user',[
                'fragment'=>'followersPage',
                'relation'=>'follower',
                'resource' => $store->user->followers()])
            @include('users._profile-follow-user',[
                'fragment'=>'followingsPage',
                'relation'=>'user',
                'resource' => $store->user->followings()])

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
    });
});
</script>
@append