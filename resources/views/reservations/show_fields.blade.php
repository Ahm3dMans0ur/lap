<div class="xxs-mt-10">
<table class="table table-striped">
    <tbody>
      <tr>
        <td>@lang('app.Id')</td>
        <td>{{$reservations->id}}</td>
      </tr>
      <tr>
        <td>@lang('app.The User')</td>
        <td>
            @if($reservations->user_id)
            <span><a href="{{ route('user.profile',$reservations->user->username) }}">{{$reservations->user->name}}</a></span>
            @else
            <span>@lang('app.Guest')</span>
            @endif
        </td>
      </tr>
      <tr>
        <td>@lang('Services.The Service')</td>
        <td>{{$reservations->service->title}}</td>
      </tr>
      <tr>
        <td>@lang('reservations.Name')</td>
        <td>{{$reservations->name}}</td>
      </tr>
      <tr>
        <td>@lang('reservations.Email')</td>
        <td>{{$reservations->email}}</td>
      </tr>
      <tr>
        <td>@lang('reservations.Phone')</td>
        <td>{{$reservations->phone}}</td>
      </tr>
      <tr>
        <td>@lang('reservations.Extra Phone')</td>
        <td>{{$reservations->extra_phone}}</td>
      </tr>
      <tr>
        <td>@lang('reservations.Personal Id')</td>
        <td>{{$reservations->personal_id}}</td>
      </tr>
      <tr>
        <td>@lang('reservations.Notes')</td>
        <td>{{$reservations->notes}}</td>
      </tr>
      <tr>
        <td>@lang('reservations.Start Time')</td>
        <td>{{$reservations->start_time}}</td>
      </tr>
      <tr>
        <td>@lang('reservations.End Time')</td>
        <td>{{$reservations->end_time}}</td>
      </tr>
      <tr>
        <td>@lang('reservations.Created At')</td>
        <td>{{$reservations->created_at->diffForHumans()}} - {{$reservations->created_at}}</td>
      </tr>
      <tr>
        <td>@lang('reservations.Updated At')</td>
        <td>{{$reservations->updated_at->diffForHumans()}} - {{$reservations->updated_at}}</td>
      </tr>
    </tbody>
  </table>
  </div>