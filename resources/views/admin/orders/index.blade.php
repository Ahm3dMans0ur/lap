@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Orders</h1>

    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('admin.orders.table')
            </div>
        </div>
    </div>
@endsection
