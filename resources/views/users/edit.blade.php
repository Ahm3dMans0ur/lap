@extends('layouts.frontend')

@section('title')
    @lang('messages.profile_edit')
@endsection

@section('content')
    <section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container">
            <ol class="breadcrumb pull-left bg-transparent xxs-pt-40 xxs-mt-2">
                <li><a href="{!! route('user.edit') !!}" class="font-jfflat"> @lang('app.Dashboard') </a></li>
                <li class="active"> @lang('messages.profile_edit') </li>
            </ol>
            <h1 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> @lang('messages.profile_edit') </h1>
        </div>
    </section>

    <div class="container pull-up-40 position-relative z-index-medium">
        <div class="row">
            <div class="pull-left offers col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
                <div class="bg-light card-dp-3 border-radius-md md-form user-panel-left-pane">
                    <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                        <h5 class="pull-right text-darkgray xxs-p-30 xxs-pl-0 xxs-pr-40 xxs-m-0 border-bottom-solid-midgray-1">
                            <i class="display-inline-block va-top icon icon-user xxs-ml-10"></i>
                            <span> @lang('messages.profile_edit') </span>
                        </h5>
                    </div>
                    @if (count($errors) > 0)
                    <div class="xxs-p-20 xxs-mb-20">
                        @include('common.errors')
                    </div>
                    @endif
                    {!! Form::model(auth()->user(),['route' => 'user.update','class' => '','files'=>true]) !!}
                    @include('users.fields')
                    {!! Form::close() !!}
                </div>
            </div>
            @include('blocks._user-nav-sidebar', ['selected' => 'user.edit'])
        </div>
    </div>
@endsection