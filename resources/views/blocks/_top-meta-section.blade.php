    <section class="@if(isset($ribbon)) bg-light @else grad-bg-light-primary @endif @if(isset($enable_search) && $enable_search == true) quarter-window-height @endif position-relative z-index-low overflow-hidden text-center xxs-pb-20 xs-text-center md-text-right top-meta-section @if(isset($noshadow) && $noshadow == true) no-shadow @endif">
    @if(isset($ribbon))
    <div class="ribbon-wrap position-absolute full-width full-height z-index-low">
        <div class="corner-ribbon top-right {{$ribbon}}"> &nbsp; </div>
    </div>
    @endif
    <div class="container position-relative z-index-high">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                @if(isset($ribbon))
                <h1 class="position-relative z-index-high btn btn-dark btn-lg btn-round-corner font-jfflat xxs-pt-10 xxs-pb-10 xxs-pl-20 xxs-pr-20 cursor-default">
                    <div class="text-{{$ribbon}}">
                        {{$header}}
                    </div>
                </h1>
                @else
                    <h2 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> {{$header}} </h2>
                @endif
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="clearfix pull-up-10">
                    {!! Breadcrumbs::render($breadcrumbs, (isset($breadcrumbs_value) ? $breadcrumbs_value : [])) !!}
                </div>
                @if(isset($enable_search) && $enable_search != false)
                {{-- // TODO old search should be deprecated --}}
                <div class="clearfix xxs-pl-15 stores_all_search_wrapper">

                    <form class="md-form" method="get" action="{{(isset($search_action) ? $search_action : '')}}">
                        <ul class="stores_all_search">
                            <li class="pull-left col-xs-12 col-sm-6 col-md-5 sm-pl-5 sm-pr-5 md-pl-5 md-pr-5">
                                <div class="search-btn xxs-mr-10">
                                    <button class="btn btn-primary btn-lg" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                                <div class="search-text">
                                    <input type="text" name="q" class="form-control input-lg xxs-pr-0 bg-transparent" placeholder="ابحث ...." @if(isset($query))value="{{$query}}"@endif/>
                                </div>
                            </li>
                            @if($enable_search === 'advanced')
                            <li class="col-xs-12 col-sm-3 col-md-3 sm-pl-5 sm-pr-5 md-pl-15 md-pr-15">
                                <div class="">
                                    {{-- TODO need to check which categories to display --}}
                                    {{ Form::select('cat', $nested_products_categories, null, ['class' => 'form-control input-lg xxs-pr-0'])}}
                                </div>
                            </li>
                            <li class="col-xs-12 col-sm-3 col-md-3 sm-pl-5 sm-pr-5 md-pl-15 md-pr-15">
                                <div class="">
                                    @include('blocks._search_cities')
                                </div>
                            </li>
                            @endif
                        </ul>
                    </form>

                </div>
                @endif
            </div>
        </div>
    </div>
</section>