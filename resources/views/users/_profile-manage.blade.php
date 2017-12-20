@if(auth()->user() && $user->id == auth()->user()->id)
<div class="col-xs-12 bg-light card-dp-1 border-radius-sm xxs-mt-40 xxs-p-0">
    <div class="clearfix border-bottom-solid-lightgray-1 xxs-mb-10 xxs-p-0 position-relative">

        <h6 class="text-bold font-droidkufi xxs-pr-20 xxs-p-10 text-darkgray"> نشاطاتى </h6>
    </div>
    <div class="xxs-mt-20 xxs-mb-20">

        <a href="{!! route('user.edit') !!}"
           class="display-block font-jfflat xxs-mb-15 clearfix text-primary">
            <span class="pull-right xxs-mr-10">@lang('messages.profile_edit') </span>
        </a>

        <a href="{!! route('order.user.view') !!}"
           class="display-block font-jfflat xxs-mb-15 clearfix text-primary">
            <span class="pull-right xxs-mr-10">@lang('messages.orders') </span>
        </a>

        <a href="{!! route('user.favorites') !!}"
           class="display-block font-jfflat xxs-mb-15 clearfix text-primary">
            <span class="pull-right xxs-mr-10">@lang('messages.favorites') </span>
        </a>

        <a href="{!! route('messages.inbox') !!}"
           class="display-block font-jfflat xxs-mb-15 clearfix text-primary">
            <span class="pull-right xxs-mr-10">@lang('messages.messages') </span>
        </a>
    </div>
</div>
@endif