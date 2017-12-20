<div class="carousel-slides same-line clearfix">
@php
$topStores = $category->getTopStores();
@endphp
  @if($topStores)
  @foreach($topStores as $store)
  <div class="carousel-slide overflow-hidden">
    <div class="user-card card-dp-2">
      <div class="card-img">
        <a href="{{route('stores.show',$store['slug'])}}" class="display-block">
          <img src="{{$store->user->getImage('medium')}}"  alt="{{$store['name']}}" class="full-width display-block margin-auto img-responsive border-radius-sm">
        </a>
      </div>
    </div>
  </div>
  @endforeach
  @endif
</div>