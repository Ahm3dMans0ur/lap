<div class="col-xs-12 bg-light card-dp-2 xxs-mt-40 boxed-offers offers border-radius-md clearfix">
    <div id='calendar' class="xxs-pt-20 xxs-pb-20 pull-left"></div>
</div>

@section('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/locale/ar-sa.js"></script>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css">
{{-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.print.css"> --}}

<script type="text/javascript">
$(document).ready(function()
{
    $('#calendar').fullCalendar({
        isRTL: true,
        header: {
            right: 'next,prev today',
            center: 'title',
            left: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: new Date(),
        navLinks: true, // can click day/week names to navigate views
        editable: false,
        eventLimit: true, // allow "more" link when too many events
        events: {
            url: '{{ route('reservations.api',$services->id) }}',
            error: function() {
                alert("cannot load reservations");
            }
        }
    });
});
</script>
@append