@if($store->user)
<div class="carousel-slide user-card border-radius-xl card-dp-1">
  <div class="card-img">
    <a href="{{route('stores.show',$store['slug'])}}">
      <img src="{{$store->user->getImage('medium')}}"  alt="{{$store['name']}}" class="img-responsive">
    </a>
  </div>
  <div class="card-meta xxs-pb-10">
    <a href="{{route('user.profile',$store->user->username)}}" class="user-rank {{ $store->user->type() }}"></a>
    {{-- {{ str_limit($store['name'], 16, '...') }} --}}
    <a href="{{route('stores.show',$store['slug'])}}" class="card-title btn btn-sm btn-primary btn-link truncate-145">{{ $store['name'] }} </a>
  </div>
</div>
  @endif