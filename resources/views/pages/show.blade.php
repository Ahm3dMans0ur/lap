@extends((isset($layouts) && $layouts == 'simple') ? 'layouts.simple' : 'layouts.frontend')
@section('title')
    {{ $page->title }}
@endsection
@section('content')
    @if(!isset($layouts) || $layouts != 'simple')
    @include('blocks._top-meta-section',['header' => $page->title,'breadcrumbs' => 'pages','breadcrumbs_value' => $page])
    @endif
    <div class="container position-static">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-pull-1 position-relative z-index-high">
                <div class="col-xs-12 bg-light card-dp-2 xxs-mt-40 boxed-offers offers border-radius-md clearfix">
                    <div class="offers-box clearfix xxs-mt-20 white-space-pre-line">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection