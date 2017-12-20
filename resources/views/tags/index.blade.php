@extends('layouts.frontend')

@section('title')
    @lang('app.All Tags')
@endsection

@section('content')

    @include('blocks._top-meta-section',['header' => Lang::get('app.All Tags'), 'breadcrumbs' => 'tags', 'enable_search' => false])

    <div class="container position-static">
		<div class="row">
			<div class="col-xs-12 col-md-10 col-md-pull-1">
				@include('blocks._tags-cards', ['blocks' => true])
			</div>
		</div>
	</div>
@endsection