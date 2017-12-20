@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Comments
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($comments, ['route' => ['admin.comments.update', $comments->id], 'method' => 'patch']) !!}

                        @include('admin.comments.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection