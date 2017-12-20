@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Subscriptions</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.subscriptions.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('admin.subscriptions.table')
                    @if(method_exists($subscriptions,'links'))
                    <footer class="md-pagination row">
                        <div class="col-xs-12">
                        {{ $subscriptions->links() }}
                        </div>
                    </footer>
                    @endif
            </div>
        </div>
    </div>
@endsection

