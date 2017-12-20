<div class="shop-actions display-inline-block va-top shop-notifications position-relative lang-rtl">
    <a href="#" class="action-toggle icon-bubbles" data-action="toggleNotifications">
        <span class="position-absolute z-index-high badge badge-sm badge-danger border-radius-round text-center notificationCounter transition @if(auth::user()->unreadNotifications->count() == 0) opacity-0 @endif"> {{auth::user()->unreadNotifications->count()}} </span>
    </a>
    <div class="shop-card container position-absolute z-index-top y-bottom x-left">
        <div id="notifications" class="col-xs-12 col-sm-6 col-lg-4 xxs-p-0 position-absolute z-index-high bg-lightgray border-radius-sm card-dp-2 y-top x-left text-right"
             style="display: none;">
            <div class="bg-light xxs-p-10 clearfix border-radius-sm card-dp-1 position-relative z-index-medium">
                <a href="{!! route('notification.index') !!}" class="btn btn-xs btn-primary pull-left xxs-mt-5 xxs-mr-5"> عرض الكل </a>
                <a href="#" class="btn btn-xs btn-dark pull-left xxs-mt-5 notificationReadAll"> مقروء للكل </a>
                <h6 class="pull-right"><strong data-bind="notifications"> {{auth::user()->notifications->count()}} </strong> اجمالي الاشعارات </h6>
            </div>
            <div class="xxs-pt-5 card-items position-relative z-index-low notificationOnHeader">
                @foreach(auth::user()->unreadNotifications as $notification)
                    @include('notification.item')
                @endforeach
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script>
var unreadNotifications = {{auth::user()->unreadNotifications->count()}};
function notificationRequestError()
{
    swal({
        title: "حدث خطأ",
        type: 'error',
        text: "لا يمكن اتمام العملية فى الوقت الحالي",
    });
}
$(".notificationOnHeader").delegate('.notification-item', 'click', function (e) {
    if ($(this).data("id") && $(this).data("link") == '#')
    {
        e.preventDefault();
        var notificationItem = $(this);
        $.ajax({
            url: '{!! url('notifications/read/') !!}' +'/'+ notificationItem.data("id"),
            dataType: 'json',
            type:'post',
            data: {_token: $('meta[name="csrf_token"]').attr('content')},
            success: function(data)
            {
                if (data.status && data.status == 'success')
                {
                    unreadNotifications--;
                    $('.notificationCounter').removeClass('opacity-0').text(unreadNotifications);
                    notificationItem.hide("slow");
                }
                else
                {
                    notificationRequestError();
                }
            },
            error: function(err){
                notificationRequestError();
            }
        });
    }
});
$(document).on('click', '.notificationReadAll', function (e) {
    e.preventDefault();

    $.ajax({
        url: '{!! url('notifications/readAll/') !!}',
        dataType: 'json',
        type:'post',
        data: {_token: $('meta[name="csrf_token"]').attr('content')},
        success: function(data)
        {
            if (data.status && data.status == 'success')
            {
                $('.notificationOnHeader .notification-item').each(function( k,item ) {
                    unreadNotifications--;
                    $('.notificationCounter').removeClass('opacity-0').text(unreadNotifications);
                    $(item).hide('slow');
                });
            }
            else
            {
                notificationRequestError();
            }
        },
        error: function(err){
            notificationRequestError();
        }
    });
});
</script>
@append