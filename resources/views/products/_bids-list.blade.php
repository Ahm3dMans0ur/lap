<div id="productBids" class="tab-pane active" role="tabpanel">
  <div class="sm-p-40 xxs-p-40 xs-pl-30 xs-pr-30 xxs-pl-5 xxs-pr-5 clearfix">
    <div class="xxs-p-0 col-xs-12">
      <div class="bids">
        <div class="clearfix">

          @if(count($product->bids) > 0)
          @foreach($product->bids->sortByDesc('price')->values()->all() as $key=>$bid)
            @if($key == 0)
            <div class="bid bid-main text-right xxs-mb-20">
              <div class="clearfix">
                <div class="pull-right xxs-ml-10">
                  <img class="image-responsive border-radius-round medium-avatar bidTopUserAvatar" src="{{$bid->user->getImage('small')}}" alt="{{$bid->user->name}}">
                </div>
                <div class="xxs-pr-100">
                  <div class="xxs-mb-2 xxs-pl-20 xxs-pr-20 xxs-p-15 bg-midgray border-radius-sm">
                    <span class="font-jfflat text-bold xxs-p-0 bidTopUserName">
                      {{$bid->user->name}}
                    </span>
                    <span class="pull-left text-darkgray xxs-pt-10">{{ $bid->created_at->format('d-m-Y g:i A') }}</span>
                    <h2 class="text-primary text-bold xxs-mb-10">
                      <span class="bidTopPrice"> {{$bid->price}} </span>
                      <small> {{config('app.currency')}} </small>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            @elseif(($key % 2) == 0)
              <div class="bid text-left xxs-mb-20">
                <div class="clearfix">
                  <div class="pull-left xxs-mr-10">
                    <img class="image-responsive border-radius-round mini-avatar" src="{{$bid->user->getImage('small')}}" alt="{{$bid->user->name}}">
                  </div>
                  <div class="xxs-pl-100">
                    <div class="xxs-mb-2 xxs-pl-20 xxs-pr-20 xxs-p-10 text-darkgray bg-lightgray border-radius-sm">
                      <a href="#" class="pull-left font-jfflat xxs-mt-5 xxs-pt-1 text-bold full-underline btn btn-dark btn-link xxs-p-0"> {{$bid->user->name}} </a>
                      <span class="pull-right text-sm xxs-pt-5">{{ $bid->created_at->format('d-m-Y g:i A') }}</span>
                      <h4 class="display-inline-block va-top text-primary xxs-pt-5 xxs-mt-2 xxs-ml-10 xxs-mr-10">
                        <span> {{$bid->price}} </span>
                        <small> {{config('app.currency')}} </small>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>


            @else
              <div class="bid xxs-mb-20">
                <div class="clearfix">
                  <div class="pull-right xxs-ml-10">
                    <img class="image-responsive border-radius-round mini-avatar" src="{{$bid->user->getImage('small')}}" alt="{{$bid->user->name}}">
                  </div>
                  <div class="xxs-pr-100">
                    <div class="xxs-mb-2 xxs-pl-20 xxs-pr-20 xxs-p-10 text-darkgray bg-lightgray border-radius-sm">
                      <a href="#" class="pull-right font-jfflat xxs-mt-5 xxs-pt-1 text-bold full-underline btn btn-dark btn-link xxs-p-0"> {{$bid->user->name}} </a>
                      <span class="pull-left text-sm xxs-pt-5">{{ $bid->created_at->format('d-m-Y g:i A') }}</span>
                      <h4 class="display-inline-block va-top text-primary xxs-pt-5 xxs-mt-2 xxs-ml-10 xxs-mr-10">
                        <span> {{$bid->price}} </span>
                        <small> {{config('app.currency')}} </small>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            @endif
            <div class="xxs-mb-40 clearfix"></div>
          @endforeach
          @else
            <div class="xxs-pl-50 text-center">
            <div class="clearfix">
              <div class="xxs-pr-50">
                <div class="xxs-mb-2 xxs-pl-40 xxs-pr-40 xxs-p-20 card-dp-1 text-dark bg-light border-radius-sm">
                  <span class="text-bold"> لا يوجد مزايدات حتي الان </span>
                </div>
              </div>
            </div>
            </div>
          @endif

          <div class="xxs-mb-40 clearfix"></div>
        </div>
        <form class="conversation-controls xxs-mt-80 md-form bidForm">
          <div class="form-group col-xs-10 z-bid-form-text">
            <div class="input-group">
              <input class="form-control input-lg xxs-pr-0" name="bid" placeholder="القيمة" autocomplete="off" type="number">
              <span class="input-group-addon xxs-pl-0"> {{config('app.currency')}} </span>
            </div>
          </div>
          <div class="col-xs-2 xxs-pt-10 xxs-mt-2 z-bid-form-bnt">
            <button class="btn btn-block btn-primary btn-ghost"> مزايدة </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>