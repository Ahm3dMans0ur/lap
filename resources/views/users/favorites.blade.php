@extends('layouts.frontend')

@section('title')
    @lang('messages.favorites')
@endsection

@section('content')
  <section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
    <div class="container">
      {!! Breadcrumbs::render('user.favorites', (isset($breadcrumbs_value) ? $breadcrumbs_value : [])) !!}
      <h1 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> @lang('messages.favorites') </h1>
    </div>
  </section>

  <div class="container pull-up-40 position-relative z-index-medium">
    <div class="row">
      <div class="pull-left offers col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
        @include('products._lighted-box',[
          'block_title' => Lang::get('messages.fav_products'),
          'block_title_icon' => 'icon-star',
          'mt' => 0,
          'products' => $favorites
        ])
      </div>
      @include('blocks._user-nav-sidebar', ['selected' => 'user.favorites'])

    </div>
  </div>
@endsection

@section('top_errors')
<span></span>
@endsection