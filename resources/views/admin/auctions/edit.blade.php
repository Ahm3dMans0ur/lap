@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Auctions
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($auctions, ['route' => ['admin.auctions.update', $auctions->id], 'method' => 'patch']) !!}

                        @include('admin.auctions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection