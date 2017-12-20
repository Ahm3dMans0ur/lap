@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Products Specs
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.productsSpecs.store']) !!}

                        @include('admin.products_specs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
