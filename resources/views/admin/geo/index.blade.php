@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">{{ trans('geo.'.$type) }}</h1>
        <h1 class="pull-right">
            @if($type == 'countries')
                <a href="{{ route('admin.geo.create.country') }}" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px">
                    @lang('geo.Add new')
                </a>
            @elseif($type == 'states')
                <a href="{{ route('admin.geo.create.state',$country) }}" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px">
                    @lang('geo.Add new')
                </a>
                <a href="{{ route('admin.geo.countries') }}" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px;margin-right: 10px">
                    @lang('geo.countries')
                </a>
            @elseif($type == 'cities')
                <a href="{{ route('admin.geo.create.city',[$country,$state]) }}" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px">
                    @lang('geo.Add new')
                </a>
                <a href="{{ route('admin.geo.states', $country) }}" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px;margin-right: 10px">
                    @lang('geo.states')
                </a>
                <a href="{{ route('admin.geo.countries') }}" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px;margin-right: 10px">
                    @lang('geo.countries')
                </a>
            @endif
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="geo-table">
                    <thead>
                        <th>{{ trans('geo.name') }}</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($countries as $country)
                            <tr>
                                @if($type == 'countries')
                                    <td><a href="{{ route('admin.geo.states',$country->id) }}">{{ $country->name }}</a>
                                    </td>

                                @elseif($type == 'states')
                                    <td><a href="{{ route('admin.geo.cities',$country->id) }}">{{ $country->name }}</a>
                                    </td>
                                @elseif($type == 'cities')
                                    <td><a href="#">{{ $country->name }}</a></td>
                                @endif
                                <td>
                                    <div class='btn-group'>
                                        @php
                                            if ($type == 'countries') {
                                                $value = 'country';
                                            } elseif ($type == 'states') {
                                                $value = 'state';
                                            } elseif ($type == 'cities') {
                                                $value = 'city';
                                            }
                                        @endphp
                                        <a href="{!! route('admin.geo.edit.'.$value, [$country->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="{!! route('admin.geo.delete.'.$value, [$country->id]) !!}" class='btn btn-danger btn-xs'><i class="glyphicon glyphicon-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop