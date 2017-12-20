@if($advert->type == 'banner')
<div class="container adverts adv-{{$advert->type}}">
  <a href="{{ $advert->getURL() }}" target="_blank">
    <img src="{{ $advert->file_path }}" alt="{{ $advert->name }}">
  </a>
</div>
@else
<div class="adverts adv-{{$advert->type}}">
  <a href="{{ $advert->getURL() }}" target="_blank">
    <img src="{{ $advert->file_path }}" alt="{{ $advert->name }}">
  </a>
</div>
@endif