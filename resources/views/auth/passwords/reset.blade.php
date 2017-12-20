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
            <form class="md-form" method="post" action="{{ url('/password/reset') }}">
                {!! csrf_field() !!}

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="@lang('app.Email')">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password" placeholder="@lang('app.Password')">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="@lang('app.Confirm password')">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary pull-right">
                            <i class="fa fa-btn fa-refresh"></i>@lang('app.Reset Password')
                        </button>
                    </div>
                </div>
            </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection