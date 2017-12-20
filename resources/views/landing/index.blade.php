@extends('layouts.landing')
@section('content')
<section class="container-fluid container-expanded bg-light border-radius-md card-dp-5 pull-up-120 xxs-pt-40 xxs-pb-40 xxs-pt-50 xxs-pb-50 xxs-ml-10 xxs-mr-10 md-ml-15 md-mr-15 xl-ml-auto xl-mr-auto">
    @include('landing._about-shari')
    <div class="clearfix xxs-mt-40 hidden-lg hidden-md">
      <hr class="xxs-m-0"/>
    </div>
    @include('landing._register-now')

    <div class="clearfix xxs-mt-40 hidden-lg hidden-md">
      <hr class="xxs-m-0"/>
    </div>
    @include('landing._start-selling')
    <div class="clearfix xxs-mt-40 hidden-lg hidden-md">
      <hr class="xxs-m-0"/>
    </div>
    @include('landing._join-success')
</section>
@endsection