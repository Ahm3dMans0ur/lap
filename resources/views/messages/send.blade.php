@extends('layouts.frontend')

@section('title')

    @lang('messages.send_message')

@endsection

@section('content')

    <section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container">
          <ol class="breadcrumb pull-left bg-transparent xxs-pt-40 xxs-mt-2">
            <li><a href="{!! route('user.edit') !!}" class="font-jfflat"> @lang('app.Dashboard') </a></li>
            <li><a href="{!! route('messages.sent') !!}" class="font-jfflat"> @lang('messages.sent') </a></li>
            <li class="active"> @lang('messages.send') </li>
          </ol>
          <h1 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> @lang('messages.send_message') </h1>
        </div>
    </section>

    <div class="container pull-up-40 position-relative z-index-medium">
        <div class="row">
          <div class="pull-left offers col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
            <div class="bg-light card-dp-3 border-radius-md md-form user-panel-left-pane">
              <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                <div class="pull-right xxs-p-20">
                    <span class="display-inline-block va-top xxs-mt-2 text-gray font-droidkufi text-bold xxs-p-10"> @lang('messages.send_message') </span>
                </div>
              </div>
              <div class="clearfix xxs-pr-20 xxs-pl-20">
                <div class="xxs-p-20">
                    @include('common.errors')
                </div>

                {!! Form::open(['class'=>'form-horizontal','method'=>'post','url'=>route('messages.send_msg')]) !!}

                <div class="form-group xxs-pt-40 clearfix select2-md {{ $errors->has('to') ? 'has-error' : '' }}">
                    {!! Form::label('inputSendTo', Lang::get('messages.send_to'), ['class' => 'col-xs-3 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-10']) !!}
                    <div class="col-xs-9 col-sm-7">
                        {!! Form::select('to', $users, null, ['id'=>'inputSendTo','class' => 'form-control input-lg text-md lang-rtl select2-offscreen']) !!}
                        @if ($errors->has('to')) <p class="help-block">{{ $errors->first('to') }}</p> @endif
                    </div>
                    @if(old('to'))
                    <label for="inputSendTo" class="col-xs-3 col-sm-1 text-right">
                        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('to') ? 'icon-delete' : 'icon-check' }}"></i>
                    </label>
                    @endif
                </div>
                <div class="form-group xxs-pt-40 clearfix {{ $errors->has('title') ? 'has-error' : '' }}">
                    {!! Form::label('inputTitle', Lang::get('messages.subject'), ['class' => 'col-xs-3 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-10']) !!}
                    <div class="col-xs-9 col-sm-7">
                        {!! Form::text('title', null, ['id' => 'inputTitle', 'class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-10 xxs-pr-0','placeholder'=> Lang::get('messages.enter_subject')]) !!}
                        @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
                    </div>
                    <label for="inputTitle" class="col-xs-3 col-sm-1 text-right">
                        @if(old('title'))
                        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('title') ? 'icon-delete' : 'icon-check' }}"></i>
                        @endif
                    </label>
                </div>
                <div class="form-group xxs-pt-40 clearfix {{ $errors->has('content') ? 'has-error' : '' }}">
                    {!! Form::label('inputContent', Lang::get('messages.message_content'), ['class' => 'col-xs-3 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-10']) !!}
                    <div class="col-xs-9 col-sm-7">
                        {!! Form::textarea('content', null, ['id' => 'inputContent', 'rows' => 3, 'class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-20 xxs-pr-0','placeholder'=> Lang::get('messages.enter_message_content')]) !!}
                        @if ($errors->has('content')) <p class="help-block">{{ $errors->first('content') }}</p> @endif
                    </div>
                    <label for="inputContent" class="col-xs-3 col-sm-1 text-right">
                        @if(old('content'))
                        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('content') ? 'icon-delete' : 'icon-check' }}"></i>
                        @endif
                    </label>
                </div>

                <hr class="xxs-mt-80 xxs-mb-40" />

                <div class="form-group form-submit xxs-pl-40 xxs-pb-20 text-left">
                  {!! Form::submit( Lang::get('app.Send'), ['class' => 'btn btn-primary border-radius-xs xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10']) !!}
                  {!! Form::reset( Lang::get('messages.cancel'), ['class' => 'btn btn-gray btn-ghost border-radius-xs xxs-p-10 xxs-pr-30 xxs-pl-30']) !!}
                </div>

                {!! Form::close() !!}
              </div>
            </div>
          </div>
          @include('blocks._user-nav-sidebar', ['selected' => 'messages.send_view'])

        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/ar.js"></script>
    <script>
        $("#inputSendTo").select2({
            width : '100%',
            dir: 'rtl',
            language: 'ar',
            placeholder: "@lang('messages.send_to')",
            minimumInputLength: 2,
            ajax: {
                url: '{!! route('user.find') !!}',
                dataType: 'json',
                data: function (params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    </script>
@append