@extends('admin.layouts.app')
@php if (isset($dataType->id)) {
        $route = ['admin.geo.update.'.$dataType->type, $dataType->id];
    } else {
        $route = 'admin.geo.store.'.$dataType->type;
    }
@endphp
@section('content')
    <section class="content-header">
        <h1>
            @if(isset($dataType->id)){{ Lang::get('geo.Edit') }}@else{{ Lang::get('geo.Add new') }}@endif {{ Lang::get('geo.'.$dataType->type) }}
        </h1>
        <h1 class="pull-right">
            <a href="{{ route('admin.geo.countries') }}" class="btn btn-primary pull-right" style="margin-top: -20px;margin-bottom: 5px;">
                @lang('geo.countries')
            </a>
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::open(['route' => $route, 'method' => 'POST']) !!}
                        @include('admin.geo.fields.'.$dataType->type)
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
