@extends('layouts.frontend')
@section('title')
    @lang('app.Home page')
@endsection
@section('content')
    {!! \App\Models\Advert::getHTML() !!}
    @include('blocks._stores-carousel-cards')
    @include('blocks._featured-golden')
    @include('blocks._ticker')
    {!! \App\Models\Advert::getHTML() !!}
    @include('blocks._featured-silver')
    @include('blocks._featured-auctions')
    @include('blocks._liked-users')
    @include('blocks._featured-individual')
    @include('blocks._highligthed_stores')
    @include('blocks._topSales')
    @include('blocks._featured-slide')
@endsection
@if(isset($tickers) && count($tickers) > 0)
@endif
