<table class="table table-responsive" id="reservations-table">
    <thead>
    <th>المستخدم</th>
    <th>المتجر</th>
    <th>حالة الطلب</th>
    <th>الفاتورة</th>
    <th>التاريخ</th>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>
            @if($order->owner)
                <a href="{{ route('user.profile',$order->owner->username) }}">{!! $order->owner->username !!}</a>
            @else
                لم يتم العثور على المستخدم
            @endif

            </td>
            <td>
            @if($order->store)
                <a href="{{ route('stores.show',$order->store->slug) }}">{!! $order->store->name !!}</a>
            @else
                لم يتم العثور على المتجر
            @endif
            </td>
            <td>
                <span class="xxs-p-5 label label-{{$order->getStatus()['class']}}">
                    {{$order->getStatus()['name']}}
                </span>
            </td>
            <td class="text-right hidden-xs"><a
                        href="{{ route('order.invoice',[$order->id]) }}">invoice</a>
            </td>
            <td>{!! $order->created_at !!}</td>
        </tr>
    @endforeach

    </tbody>
</table>
{!! $orders->links() !!}