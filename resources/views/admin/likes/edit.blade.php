@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Likes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($likes, ['route' => ['admin.likes.update', $likes->id], 'method' => 'patch']) !!}

                        @include('admin.likes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection