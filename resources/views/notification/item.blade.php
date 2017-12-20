@php
$className = $notification->type;
$message = null;
if (method_exists($className,'renderMessage')){
  $message = $className::renderMessage($notification);
}
$link = '#';
if (method_exists($className,'notificationLink')){
  $link = $className::notificationLink($notification);
}
if ($message):
@endphp
<div class="xxs-p-10 xxs-pr-0 border-bottom-solid-lightgray-1 clearfix @if(!$notification->read_at) bg-light @endif notification-item" data-id="{{$notification->id}}" data-link="{{$link}}">
  <span class="pull-left badge badge-sm bg-gray xxs-mt-8 xxs-p-5 xxs-pr-10 xxs-pl-10"> {{\Carbon\Carbon::parse($notification->created_at)->diffForHumans()}} </span>
  <a href="{{$link}}" class="btn display-block xxs-pl-60 text-right btn-primary btn-link no-underline text-bold font-jfflat"> <i class="display-inline-block va-top xxs-ml-5 icon icon-xs xxs-p-5 border-radius-xs bg-light icon-envelope"></i>
  {{$message}}
  </a>
</div>
@php
endif;
@endphp