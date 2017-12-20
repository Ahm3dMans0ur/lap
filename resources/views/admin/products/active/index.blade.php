@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Products Need Review</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>



        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @if(count($products) > 0)
                    @include('admin.products.active.table')
                    @if(method_exists($products,'links'))
                    <footer class="md-pagination row">
                        <div class="col-xs-12">
                        {{ $products->links() }}
                        </div>
                    </footer>
                    @endif
                @else
                    <h4 class="text-danger center-block">@lang('messages.no_products')</h4>
                @endif
            </div>
        </div>
    </div>
@endsection

