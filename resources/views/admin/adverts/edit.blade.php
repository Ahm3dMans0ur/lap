@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Advert
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($advert, ['route' => ['admin.adverts.update', $advert->id], 'enctype' => 'multipart/form-data','method' => 'put']) !!}
                        @include('admin.adverts.fields')
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection