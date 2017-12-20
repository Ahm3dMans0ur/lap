@extends('layouts.landing')
@section('title')
 @lang('app.Login')
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
  <h1 class="xxs-mt-0"><strong class="text-sm"> @lang('app.Login') </strong></h1>
@endsection

@section('content')

<div class="pull-up-150 position-relative z-index-medium">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-10 col-md-pull-1 bg-light card-dp-5 border-radius-sm">
        @include('flash::message')
        <form id="loginForm" class="md-form row xxs-pt-40 xxs-pr-20 xxs-pl-20 sm-pr-0 sm-pl-0" action="{{ url('/login') }}" method="post">
          {!! csrf_field() !!}

          <div class="form-group xxs-pt-40 clearfix{{ ($errors->has('email') || $errors->has('username')) ? ' has-error' : '' }}">
            <label for="email" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20">
              اسم المستخدم او البريد الالكترونى
            </label>
            <div class="col-xs-12 col-sm-8 col-md-7">
              @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
              @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
              <input type="text" id="login" class="form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr" placeholder="email@example.com or User Name" name="login" value="{{ old('email') ? old('email') : '' }}{{ old('username') ? old('username') : '' }}">
            </div>
          </div>

          <div class="form-group xxs-pt-40 clearfix{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> كلمة المرور </label>
            <div class="col-xs-12 col-sm-8 col-md-7">
              @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
              <input type="password" id="password" class="form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0" placeholder="كلمة المرور" name="password" value="{{ old('password') }}">
            </div>
            <label for="password" class="col-xs-3 col-sm-2 text-right">
              <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg"></i>
            </label>
          </div>
          <hr class="xxs-mt-40 xxs-mb-40" />
          <div class="form-group form-submit xxs-pl-10 xxs-pb-0 clearfix">
            <div class="pull-right col-xs-12 col-md-6 text-left">
              <button class="btn btn-primary xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10 xxs-mb-10 pull-right" type="submit"> دخول </button>
              <button class="btn btn-gray xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-mb-10 pull-right" type="reset"> الغاء </button>
            </div>
          </div>
          <div class="form-group xxs-pt-0 xxs-pb-20 clearfix">
          <hr class="" />
            <label class="hidden-xs col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"></label>
            <div class="col-xs-12 col-sm-8 col-md-7 text-left xxs-pl-0 xxs-pr-0 ">
              <div class="xxs-p-10 xxs-pl-10 xxs-pr-0 display-inline-block va-top pull-right">
                <a href="{{url('register')}}" class="btn btn-dark btn-ghost  xxs-pb-5">
                  <span class="display-inline-block va-top text-md xxs-mt-2 xxs-ml-5 icon-user-follow"></span>
                  <span class="display-inline-block va-top"> تسجيل  </span>
                </a>
              </div>
              <div class="xxs-p-10 xxs-pl-0 xxs-pr-0 xxs-pt-15 display-inline-block va-top pull-right">
                <a href="{{url('password/reset')}}" class="btn btn-dark btn-link full-underline xxs-p-0 xxs-pb-5">
                  <span class="display-inline-block va-top text-md xxs-mt-2 xxs-ml-5 icon-key"></span>
                  <span class="display-inline-block va-top"> نسيت كلمة المرور </span>
                </a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection