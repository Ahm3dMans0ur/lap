@extends('layouts.frontend')

@section('title')
    @lang('app.All Categories')
@endsection

@section('content')

<section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
    <div class="container">
        {!! Breadcrumbs::render('categories') !!}
        <h1 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> @lang('app.All Categories') </h1>
    </div>
</section>

<section class="container position-relative z-index-high">
	<div class="pull-up-40">
		@foreach($parentCategories as $key => $category)
		@if(($key % 2) == 0)
		<div class="row xxs-mb-40 xs-text-center md-text-right">
			<div class="col-xs-12">
				<div class="position-relative row xxs-p-40 sm-pl-0 grad-bg-dark-primary border-radius-sm">
					<div class="position-relative z-index-high">
						@include('categories._info')
						<div class="carousel col-xs-12 col-md-6 xxs-p-0 hidden-xs">
							<h3 class="text-light xxs-mb-0"><span class="text-lg"> ابرز البائعين </span></h3>
							<div class="carousel-auto-width carousel-loop-left carousel-top-users carousel-container position-relative xxs-mt-40 xxs-pl-100">
								<div class="carousel-arrows position-absolute z-index-high x-left y-top xxs-mt-40 xxs-ml-40 xxs-pt-5"></div>
									@include('categories._carousel')
							</div>
						</div>
					</div>
					<div class="position-absolute z-index-low full-width full-height x-left y-top">
						<div class="position-absolute z-index-high col-xs-6 full-height x-left y-top border-radius-sm grad-bg-dark-transparent-ltr"></div>
						<div class="position-absolute z-index-low full-width full-height x-left y-top card-bg-cat-{{$category->getClassName()}}"></div>
					</div>
				</div>
			</div>
		</div>
		@else
		<div class="row xxs-mb-40 xs-text-center md-text-left">
			<div class="col-xs-12">
				<div class="position-relative row xxs-p-40 sm-pr-0 grad-bg-dark-primary border-radius-sm">
					<div class="position-relative z-index-high">
						<div class="carousel col-xs-12 col-md-6 xxs-p-0 hidden-xs">
							<h3 class="text-light xxs-mb-0"><span class="text-lg"> ابرز البائعين </span></h3>
							<div class="carousel-auto-width carousel-loop-left carousel-alt-arrow carousel-top-users carousel-container position-relative xxs-mt-40 xxs-pr-100">
								<div class="carousel-arrows position-absolute z-index-high x-right y-top xxs-mt-40 xxs-mr-40 xxs-pt-5"></div>
									@include('categories._carousel')
							</div>
						</div>
						@include('categories._info')
					</div>
					<div class="position-absolute z-index-low full-width full-height x-left y-top">
						<div class="position-absolute z-index-high col-xs-6 full-height x-right y-top border-radius-sm grad-bg-dark-transparent-rtl"></div>
						<div class="position-absolute z-index-low full-width full-height x-left y-top card-bg-cat-{{$category->getClassName()}}"></div>
					</div>
				</div>
			</div>
		</div>
		@endif
		{{-- @include('categories._category-chileds') --}}
	@endforeach
	</div>
</section>
@endsection