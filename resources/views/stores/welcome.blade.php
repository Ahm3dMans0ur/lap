@extends('layouts.landing')
@section('content')
<section class="container-fluid container-expanded bg-light border-radius-md card-dp-2 pull-up-200 xxs-pt-40 xxs-pb-40 xxs-pt-50 xxs-pb-50 xxs-ml-10 xxs-mr-10 md-ml-15 md-mr-15 xl-ml-auto xl-mr-auto">

    @include('flash::message')
    @include('landing._start-selling')
    <div class="clearfix xxs-mt-40 hidden-lg hidden-md">
      <hr class="xxs-m-0"/>
    </div> <!-- END SEPARATOR -->
    @include('landing._join-success')



</section>
@endsection