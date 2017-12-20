@extends('layouts.frontend')
@section('title')
    @if(auth()->guest()) @lang('app.Contact Us') @else @lang('contact.technical support') @endif
@endsection
<!-- <link rel="stylesheet" href="/backend/css/bootstrap.min.css"> -->

@section('content')

    <section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container">
            <ol class="breadcrumb pull-left bg-transparent xxs-pt-40 xxs-mt-2">
                @if(auth()->guest())
                    <li><a href="{!! route('defaultUserHome') !!}" class="font-jfflat"> @lang('app.Home') </a></li>
                @else
                    <li><a href="{!! route('user.edit') !!}" class="font-jfflat"> @lang('app.Dashboard') </a></li>
                @endif
                <li class="active"> @if(auth()->guest()) @lang('app.Contact Us') @else @lang('contact.technical support') @endif </li>
            </ol>
            <h1 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> @if(auth()->guest()) @lang('app.Contact Us') @else @lang('contact.technical support') @endif </h1>
        </div>
    </section>

    <div class="container pull-up-40 position-relative z-index-medium">
        <div class="row">

            <div class="col-xs-12 col-md-10 col-md-pull-1 xxs-mb-40">
                <div class="bg-light card-dp-2 border-radius-md clearfix">
                    <div class="col-xs-12 col-sm-7 col-md-6 xxs-pb-10 xxs-pt-10">
                        @if(\Setting::has('address'))
                        <div class="xxs-pb-10 xxs-pt-10 clearfix">
                            <div class="col-xs-6">
                                <i class="display-inline opacity-5 icon-pin"></i>&nbsp;&nbsp;
                                @lang('contact.address')
                            </div>
                            <div class="col-xs-6 lang-ltr text-right text-bold">
                                {{ \Setting::get('address') }}
                            </div>
                        </div>
                        @endif
                        @if(\Setting::has('phone'))
                        <div class="xxs-pb-10 xxs-pt-10 clearfix">
                            <div class="col-xs-6">
                                <i class="display-inline opacity-5 icon-phone"></i>&nbsp;&nbsp;
                                @lang('contact.phone')
                            </div>
                            <div class="col-xs-6 lang-ltr text-right text-bold">
                                {{ \Setting::get('phone') }}
                            </div>
                        </div>
                        @endif
                        @if(\Setting::has('email'))
                        <div class="xxs-pb-10 xxs-pt-10 clearfix">
                            <div class="col-xs-6">
                                <i class="display-inline opacity-5 icon-envelope"></i>&nbsp;&nbsp;
                                @lang('contact.email')
                            </div>
                            <div class="col-xs-6 lang-ltr text-right">
                                <a href="mailto:{{ \Setting::get('email') }}" class="btn btn-link btn-primary xxs-p-0 xxs-pb-5 full-underline"> {{ \Setting::get('email') }} </a>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-6 xxs-p-0">
                        @if(\Setting::has('latitude') && \Setting::has('longitude'))
                        <div id="us2" class="border-radius-md-left xxs-p-20" style="width: 100%; height: 340px;"></div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="xxs-mb-40 col-xs-12 @if(!auth()->guest()) col-md-8 col-lg-9 @else col-md-10 col-md-pull-1 @endif">
                <div class="bg-light card-dp-3 border-radius-md md-form user-panel-left-pane">
                    <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                        <h5 class="pull-right text-darkgray xxs-p-30 xxs-pl-0 xxs-pr-40 xxs-m-0 border-bottom-solid-midgray-1">
                            <i class="display-inline-block va-top icon @if(auth()->guest()) icon-paper-plane @else icon-support @endif xxs-ml-10"></i>
                            <span> @if(auth()->guest()) @lang('app.Contact Us') @else @lang('contact.technical support') @endif </span>
                        </h5>
                    </div>
                    @if (count($errors) > 0)
                    <div class="xxs-p-20 xxs-mb-20">
                        @include('common.errors')
                    </div>
                    @endif

                    {{-- @include('flash::message') --}}
                    <form method="post" action="{!! route('contact.send') !!}" class="xxs-pb-10" role="form">
                        {!! csrf_field() !!}

                        @if(auth()->guest())
                            <div class="form-group xxs-pt-40 clearfix{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::label('name', Lang::get('contact.name'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
                                <div class="col-xs-10 col-sm-7">
                                    {!! Form::text('name', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0','placeholder'=>Lang::get('contact.name')]) !!}
                                    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                                </div>
                                <label for="name" class="col-xs-2 col-sm-1 text-right">
                                    @if(old('name'))
                                    <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('name') ? 'icon-delete' : 'icon-check' }}"></i>
                                    @endif
                                </label>
                            </div>
                            <div class="form-group xxs-pt-40 clearfix{{ $errors->has('email') ? ' has-error' : '' }}">
                                {!! Form::label('email', Lang::get('contact.email'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
                                <div class="col-xs-10 col-sm-7">
                                    {!! Form::email('email', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('contact.email')]) !!}
                                    @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                                </div>
                                <label for="email" class="col-xs-2 col-sm-1 text-right">
                                    @if(old('email'))
                                    <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('email') ? 'icon-delete' : 'icon-check' }}"></i>
                                    @endif
                                </label>
                            </div>
                            <div class="form-group xxs-pt-40 clearfix{{ $errors->has('phone') ? ' has-error' : '' }}">
                                {!! Form::label('phone', Lang::get('contact.phone'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
                                <div class="col-xs-10 col-sm-7">
                                    {!! Form::text('phone', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('contact.phone')]) !!}
                                    @if ($errors->has('phone')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif
                                </div>
                                <label for="phone" class="col-xs-2 col-sm-1 text-right">
                                    @if(old('phone'))
                                    <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('phone') ? 'icon-delete' : 'icon-check' }}"></i>
                                    @endif
                                </label>
                            </div>
                            <hr class="xxs-mt-80 xxs-mb-40" />
                        @endif

                        <div class="form-group xxs-pt-40 clearfix{{ $errors->has('title') ? ' has-error' : '' }}">
                            {!! Form::label('title', Lang::get('contact.title'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
                            <div class="col-xs-10 col-sm-7">
                                {!! Form::text('title', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0','placeholder'=>Lang::get('contact.title')]) !!}
                                @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
                            </div>
                            <label for="title" class="col-xs-2 col-sm-1 text-right">
                                @if(old('title'))
                                <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('title') ? 'icon-delete' : 'icon-check' }}"></i>
                                @endif
                            </label>
                        </div>

                        <div class="form-group xxs-pt-40 clearfix{{ $errors->has('message') ? ' has-error' : '' }}">
                            {!! Form::label('message', Lang::get('contact.message'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
                            <div class="col-xs-10 col-sm-7">
                                {!! Form::textarea('message', null, ['rows' => 4, 'class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0','placeholder'=>Lang::get('contact.message')]) !!}
                                @if ($errors->has('message')) <p class="help-block">{{ $errors->first('message') }}</p> @endif
                            </div>
                            <label for="message" class="col-xs-2 col-sm-1 text-right">
                                @if(old('message'))
                                <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('message') ? 'icon-delete' : 'icon-check' }}"></i>
                                @endif
                            </label>
                        </div>

                        <hr class="xxs-mt-80 xxs-mb-40" />
                        <div class="form-group form-submit xxs-pl-40 xxs-pb-20 text-left">
                          {!! Form::submit( Lang::get('contact.send'), ['class' => 'btn btn-primary border-radius-sm xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10']) !!}
                          {!! Form::reset( Lang::get('messages.cancel'), ['class' => 'btn btn-gray btn-ghost border-radius-xs xxs-p-10 xxs-pr-30 xxs-pl-30']) !!}
                        </div>
                    </form>
                </div>
            </div>

            @if(!auth()->guest())
                @include('blocks._user-nav-sidebar', ['selected' => 'contact'])
            @endif
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $('#us2').locationpicker(
            {
                location: {
                    latitude: "{{ \Setting::get('latitude') }}",
                    longitude: "{{ \Setting::get('longitude') }}"
                }
            }
        );
    </script>

@endsection