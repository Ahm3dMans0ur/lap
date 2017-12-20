@extends('voyager::master')

@section('page_title',trans('adminGeo::geo.edit').' '.$geo->name)

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-world"></i> {{ trans('adminGeo::geo.edit') }} {{ $geo->name }}

    </h1>
{{--    @include('voyager::multilingual.language-selector')--}}
@stop

@section('content')
    <div class="page-content container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body table-responsive">
                        <div class="col-xs-6 pull-right">
                            <form class="form-horizontal" method="post" action="{{ route('geo.update',$geo->id) }}">
                                {!! method_field('put') !!}
                                {!! csrf_field() !!}
                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name">{{ trans('adminGeo::geo.name') }}</label>
{{--                                    @include('voyager::multilingual.input-hidden-bread-edit-add')--}}
                                    {{--<input type="hidden" data-i18n="true" name="name_i18n" id="name_i18n" value="{'en':'suadi','ar':'السعودية'}">--}}
                                    <input type="text" id="name" class="form-control" name="name" value="{{ $geo->name }}">
                                    @if ($errors->has('name'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name_ar">{{ trans('adminGeo::geo.translate') }}</label>
                                    <input type="text" id="name_ar" class="form-control" name="name_ar" value="{!! $geo->getTranslatedAttribute('name', 'ar') !!}">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary">{{ trans('adminGeo::geo.save') }}</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('javascript')

    <script>
        $('document').ready(function () {
            @if ($isModelTranslatable)
                $('.side-body').multilingual({"editing": true});
            @endif
        });
    </script>

    @if($isModelTranslatable)
        <script src="{{ voyager_asset('js/multilingual.js') }}"></script>
    @endif

@append