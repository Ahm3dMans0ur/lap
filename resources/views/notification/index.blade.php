@extends('layouts.frontend')
@section('title')
    @lang('app.Notifications')
@endsection

@section('content')
  <section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
    <div class="container">
      <ol class="breadcrumb pull-left bg-transparent xxs-pt-40 xxs-mt-2">
        <li><a href="{!! route('user.edit') !!}" class="font-jfflat"> @lang('app.Dashboard') </a></li>
        <li class="active"> @lang('app.Notifications') </li>
      </ol>
      <h1 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> @lang('app.Notifications') </h1>
    </div>
  </section>

  <div class="container pull-up-40 position-relative z-index-medium">
    <div class="row">
      <div class="pull-left offers col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
        <div class="bg-light card-dp-3 border-radius-md md-form user-panel-left-pane">
          <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
            <div class="pull-left square-sm border-radius-round bg-darkgray text-light text-center line-height-lg xxs-mt-30 xxs-ml-20">
              <span> {{auth::user()->notifications->count()}} </span>
            </div>
            <span class="pull-left xxs-ml-10 text-sm xxs-p-5 xxs-mt-20 xxs-pt-15 text-darkgray line-height-xs"> عدد الاشعارات </span>
            <a href="{{route('user.profile',auth::user()->username)}}" class="pull-right xxs-p-20">
              <span class="btn btn-link btn-gray no-underline xxs-mt-2"> {{auth::user()->name}} </span>
            </a>
          </div>
          <div class="xxs-p-20">
            @if(count($notifications) > 0)
              @foreach($notifications as $notification)
              @include('notification.item')
              @endforeach
              @if(method_exists($notifications,'links'))
              <footer class="md-pagination row">
                <div class="col-xs-12">
                {!! $notifications->links() !!}
                </div>
              </footer>
              @endif
            @else
              @lang('messages.no_data')
            @endif
          </div>
        </div>
      </div>
      @include('blocks._user-nav-sidebar', ['selected' => 'notification.index'])

    </div>
  </div>
@endsection