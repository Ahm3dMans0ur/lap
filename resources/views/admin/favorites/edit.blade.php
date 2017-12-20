@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Favorites
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($favorites, ['route' => ['admin.favorites.update', $favorites->id], 'method' => 'patch']) !!}

                        @include('admin.favorites.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection