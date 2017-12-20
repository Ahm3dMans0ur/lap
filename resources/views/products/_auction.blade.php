<div class="col-xs-12 col-md-10 col-md-pull-1 bg-light card-dp-2 border-radius-md xxs-mt-40 xxs-p-0 xxs-pb-20 z-auction">
  @if(count($product->bids) > 0)
  @php
    $topBidder = $product->bids->sortByDesc('price')->first()->user;
  @endphp
  <div class="col-sm-3 col-md-3 xxs-pt-20 z-auction-top">
    <span> اعلى المزايدات </span>
    <h2 class="text-primary text-bold xxs-mb-10">
      <span class="bidTopPrice"> {{$product->bids->max('price')}} </span>
      <small> {{config('app.currency')}} </small>
    </h2>
    <a href="{{$topBidder->getUrl()}}" class="font-jfflat">
      <div class="display-inline-block va-top xxs-ml-5">
        <img class="image-responsive border-radius-round mini-avatar bidTopUserAvatar" src="{{$topBidder->getImage('small')}}" alt="{{$topBidder->name}}">
      </div>
      <div class="display-inline-block va-top xxs-pt-8 bidTopUserName"> {{$topBidder->name}} </div>
    </a>
  </div>
  @else
  <div class="col-sm-3 col-md-3 xxs-pt-20">
    <span> اعلى المزايدات </span>
    <h2 class="text-primary text-bold xxs-mb-10">
      <span class="bidTopPrice"> 000,000 </span>
      <small> {{config('app.currency')}} </small>
    </h2>
    <a href="#" class="font-jfflat">
      <div class="display-inline-block va-top xxs-ml-5">
        <img class="image-responsive border-radius-round mini-avatar bidTopUserAvatar" src="/frontend/images/sample/user-sm.png" alt="User Sample Image">
      </div>
      <div class="display-inline-block va-top xxs-pt-8 bidTopUserName"> لا احد </div>
    </a>
  </div>
  @endif
  <div class="col-sm-6 col-md-6 text-center z-auction-timer">
  @if($product->isActiveAuction)
    <h6 class="text-bold text-gray xxs-mt-20"> باقى على انتهاء المزاد </h6>
    <h1 class="time-remaining lang-ltr xxs-mt-30">
      <span>
        <strong class="auction-date-day"> {{$product->auction_date->d}} </strong>
        <small> يوم </small>
      </span>
      <span>
        <strong class="auction-date-hours"> {{$product->auction_date->h}} </strong>
        <small> ساعة </small>
      </span>
      <span>
        <strong class="auction-date-minutes"> {{$product->auction_date->i}} </strong>
        <small> دقيقة </small>
      </span>
      <span>
        <strong class="auction-date-seconds"> {{$product->auction_date->s}} </strong>
        <small> ثانية </small>
      </span>
    </h1>
  @else
      <h1 class="time-remaining lang-ltr xxs-mt-50">
        <span><strong>انتهي المزاد  {{-- {{$product->auction_end->diffForHumans(\Carbon\Carbon::now())}} --}}</strong></span>
      </h1>
  @endif
  </div>

  <div class="col-sm-3 col-md-3 xxs-pt-20 z-auction-add">
    <div class="text-left text-gray text-sm text-bold"> اجمالى <span> {{$product->bids->count()}} </span> مزايدة </div>
    <form class="md-form xxs-pt-20 bidForm">
      <div class="form-group">
        <div class="input-group">
          <input class="form-control" name="bid" placeholder="القيمة" type="number">
          <span class="input-group-addon xxs-pl-0"> {{config('app.currency')}} </span>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary"> مزايدة </button>
      </div>
    </form>
  </div>
</div>

@if($product->isAuction())
@section('scripts')
<script>
$(document).ready(function(){
  // Set the date we're counting down to
  var countDownDate = new Date('{{$product->auction_end->format('Y-m-d\TH:i:s')}}').getTime();
  var now = new Date('{{\Carbon\Carbon::now()->format('Y-m-d\TH:i:s')}}').getTime();
  var difrrent = countDownDate - now;
  if (isNaN(difrrent) || difrrent != parseInt(difrrent, 10) || difrrent < 0)
  {
    return;
  }
  // Update the count down every 1 second
  var auctionCounter = setInterval(function() {
    difrrent = difrrent - 1000;
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(difrrent / (1000 * 60 * 60 * 24));
    var hours = Math.floor((difrrent % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((difrrent % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((difrrent % (1000 * 60)) / 1000);
    $('.auction-date-day').html(days);
    $('.auction-date-hours').html(hours);
    $('.auction-date-minutes').html(minutes);
    $('.auction-date-seconds').html(seconds);
    // If the count down is finished, write some text
    if (difrrent < 0)
    {
      clearInterval(auctionCounter);
      location.reload();
    }
  }, 1000);
});
function bidError(message)
{
    swal({
        title: "حدث خطأ",
        type: 'error',
        text: message,
    });
}
$(document).on('submit', '.bidForm', function (e) {
    e.preventDefault();
    var bid = $(this).find('input[name="bid"]').val();
    if (bid)
    {
      var button = $(this).find('button[type="submit"]');
      button.prop('disabled', true);
      @if(Auth::user())
      $.ajax({
        url: '{!! route('products.bid',$product->id) !!}',
        dataType: 'json',
        type:'post',
        data: {
          _token: $('meta[name="csrf_token"]').attr('content'),
          price : bid
        },
        success: function(data)
        {
            if (data.status && data.status == 'success')
            {
              $('.bidTopPrice').html(bid);
              $('.bidTopUserName').html('{{Auth::user()->name}}');
              $('.bidTopUserAvatar').prop('src','{{Auth::user()->getImage('medium')}}');
              swal({
                  title: "تم",
                  type: 'success',
                  text: 'تم استلام مزايدتك',
              });
            }
            else if(data.status == 'failed' && data.message == 'lowbid')
            {
              bidError('يرجي المزايدة بسعر اعلى من '+data.current_bid + '{{config('app.currency')}}');
            }
            else if(data.status == 'failed' && data.message == 'unauthorized')
            {
              bidError('عفوا غير مسوح لك بالمزايدة');
            }
            else
            {
              bidError('حدث خطأ الرجاء المحاولة لاحقا');
            }
            button.prop('disabled', false);
        },
        error: function(err)
        {
            button.prop('disabled', false);
            notificationRequestError();
        }
      });
      @else
        bidError('رجاء تسجيل الدخول');
      @endif
    } else {
      bidError('رجاء ادخال قيمة المزايدة');
    }
    return;
});

</script>
@append
@endif
@include('products._chat')
