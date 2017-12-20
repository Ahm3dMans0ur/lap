@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Pages</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
               href="{!! route('admin.pages.create') !!}">Add New</a>
        </h1>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="custom-search-input">
                    <form action="{!! route('admin.pages.search') !!}" method="get">
                        <div class="input-group col-md-12">
                            <input type="text" name="q" class="form-control input-lg"
                                   placeholder="search for pages ... " @if(isset($query))value="{{$query}}"@endif/>
                            <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                                 </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('admin.pages.table')
                @if(method_exists($pages,'links'))
                    <footer class="md-pagination row">
                        <div class="col-xs-12">
                        {{ $pages->links() }}
                        </div>
                    </footer>
                @endif
            </div>
        </div>
    </div>
@endsection

