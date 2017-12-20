<div id="storeServices" class="tab-pane col-xs-12 col-sm-8 col-md-9 position-relative z-index-high" role="tabpanel">
    <div class="col-xs-12 bg-light card-dp-2 xxs-mt-40 boxed-offers offers border-radius-md clearfix">
        <div class="offers-box clearfix xxs-mt-20 xxs-pt-20 flex-cols">
            @if(count($services) > 0)
                @foreach($services as $service)
                    @include('inc._service',['item' => $service])
                @endforeach
                <br>
                <div class="offer-card border-radius-sm col-xs-12 col-sm-12 col-md-12">
                    @if(method_exists($services,'links'))
                        <footer class="md-pagination row">
                            <div class="col-xs-12">
                                    {!! $services->fragment('storeServices')->links() !!}
                            </div>
                        </footer>
                    @endif
                </div>
            @else
                @include('flash::_message',[
                  'class' => '',
                  'message' => Lang::get('services.No Services uploaded')
                ])
            @endif
        </div>
    </div>
</div>