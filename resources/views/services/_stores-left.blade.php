<hr />
<h1 class="xxs-mt-20 xxs-p-0">
    <a href="#" class="text-xs text-primary text-bold font-jfflat">
        {{$services->title}}
    </a>
</h1>
<p class="xxs-mt-10 font-droidkufi text-sm">{{ $services->description }}</p>
<p> منذ : {{\Carbon\Carbon::parse($services->created_at)->diffForHumans()}}</p>

<div class="col-xs-12 bg-light card-dp-1 border-radius-sm xxs-mt-40 xxs-p-0">
  <div class="clearfix border-bottom-solid-lightgray-1 xxs-mb-10 xxs-p-0 position-relative">
    <h6 class="text-bold font-droidkufi xxs-pr-20 xxs-p-10 text-darkgray"> @lang('services.Working days') </h6>
  </div>
  <div class="xxs-mt-20 xxs-mb-20">
    <ul>
      @foreach($services->working_days as $working_day)
      <li>
        <span class="pull-right xxs-mr-10"> @lang('services.'.$working_day) </span>
      </li>
      @endforeach
  </div>
</div>

<div class="col-xs-12 bg-light card-dp-1 border-radius-sm xxs-mt-40 xxs-p-0">
  <div class="clearfix border-bottom-solid-lightgray-1 xxs-mb-10 xxs-p-0 position-relative">
    <h6 class="text-bold font-droidkufi xxs-pr-20 xxs-p-10 text-darkgray"> @lang('services.Working hours') </h6>
  </div>
  <div class="xxs-mt-20 xxs-mb-20">
    <ul>
      @foreach($services->working_hours as $working_hour)
      <li>
        <span class="pull-right xxs-mr-10">@lang('services.'.$working_hour)</span>
      </li>
      @endforeach
  </div>
</div>