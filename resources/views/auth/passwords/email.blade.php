@extends('layouts.landing')
@section('title')
 @lang('app.Password Reset')
@endsection
@section('landing.main_header_class')
 half-window-height
@endsection
@section('landing.nav_class')
 nav-compact nav-persist
@endsection

@section('landing.footer')
  @include('layouts._simple-footer')
@endsection

@section('landing.abovethefold.title_raw')
  <h1 class="xxs-mt-20"><strong class="text-sm"> @lang('app.Password Reset') </strong></h1>
@endsection

@section('content')
<div class="pull-up-100 position-relative z-index-medium">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-10 col-md-pull-1 bg-light card-dp-5 border-radius-sm">
        <div class="">
            <div class="xxs-mt-20 xxs-mb-20">
              @include('flash::message')
              <form class="md-form xxs-pt-40" method="post" action="{{ url('/password/email') }}">
                {!! csrf_field() !!}
                <div class="form-group xxs-pt-40 clearfix{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> البريد الالكترونى </label>
                  <div class="col-xs-12 col-sm-8 col-md-7">
                    @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                    <input type="email" id="email" class="form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr" placeholder="email@example.com" name="email" value="{{ old('email') }}">
                    <span class="help-block text-sm line-height-xl font-droidkufi">
                    </span>
                  </div>
                </div>
                <div class="row">
                  <hr class="xxs-mt-40 xxs-mb-40" />
                </div>
                <div class="form-group form-submit xxs-pl-40 xxs-pb-20 text-left">
                  <button class="btn btn-primary xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10" type="submit">
                    <i class="fa fa-btn fa-envelope"></i> @lang('app.Send Password Reset Link')
                  </button>
                  <button class="btn btn-gray xxs-p-10 xxs-pr-30 xxs-pl-30" type="reset"> الغاء </button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection