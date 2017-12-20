{{-- this page should be able to list any stores or products pages like services/store , stores/* and custom quires pages
    view mode are clean or default to 9,3 columns
 --}}
@extends('layouts.frontend')
@php
if (!isset($block_loop_empty)):
    $block_loop_empty = Lang::get('app.No results matched with this criteria');
endif;
if (!isset($block_item)):
    $block_item = 'inc._product';
endif;
@endphp
@section('title')
    {{$page_title}}
@endsection

@section('content')
    @include('blocks._top-meta-section',[
        'header'        => $page_title,
        'breadcrumbs'   => isset($breadcrumbs) ? $breadcrumbs : 'products',
        'enable_search' => isset($enable_search) ? $enable_search : false,
        'ribbon'        => isset($ribbon) ? $ribbon : null
    ])
    @include('blocks._top-section')
    <div class="container position-static products-list">
        <div class="row">
            @if(!isset($page_mode) || $page_mode != 'clean')
            <div class="col-xs-12 col-sm-4 col-md-3 hidden-xs hidden-sm position-relative z-index-medium">
                @include('blocks._adv-now')
                @include('blocks._categories-cards')
                @include('blocks._golden-membership')
            </div>
            @endif
            @if(isset($page_mode) && $page_mode == 'clean')
                @include('inc._clean-box',[
                    'block_loop' => $block_loop,
                    'block_loop_empty' => $block_loop_empty,
                    'block_item' => $block_item,
                ])
            @else
                {{-- // this mode are the default --}}
                <div class="col-xs-12 col-sm-12 col-md-9 position-relative z-index-high lg-mb-0">
                @include('inc._lighted-box',[
                    'block_title' => $page_title,
                    'block_loop' => $block_loop,
                    'block_loop_empty' => $block_loop_empty,
                    'block_item' => $block_item,
                ])
                </div>
            @endif
            @if(!isset($page_mode) || $page_mode != 'clean')
            <div class="col-xs-12 hidden-md hidden-lg position-relative z-index-medium">
                @include('blocks._golden-membership')
                @include('blocks._adv-now')
            </div>
            @endif
        </div>
    </div>
@endsection