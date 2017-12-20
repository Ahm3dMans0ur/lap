@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Products
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($products, ['route' => ['admin.products.update', $products->id], 'method' => 'put']) !!}

                        @include('admin.products.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection