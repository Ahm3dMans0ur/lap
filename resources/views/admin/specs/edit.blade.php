@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Specs
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($specs, ['route' => ['admin.specs.update', $specs->id], 'method' => 'patch']) !!}

                        @include('admin.specs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection