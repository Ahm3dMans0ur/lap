<div class="xxs-ml-20 xxs-mr-20 alert alert-{{ $class }} @if(isset($extra_class)){{ $extra_class }}@endif">
@if(session()->has('flash_notification.important') || isset($showClose))
    <button type="button" class="close xxs-ml-20" data-dismiss="alert" aria-hidden="true" >&times;</button>
@endif
    {!! $message !!}
</div>