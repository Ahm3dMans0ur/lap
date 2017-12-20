@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Settings
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($settings, ['route' => ['admin.settings.update', $settings->id], 'method' => 'patch']) !!}

                        @include('admin.settings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection