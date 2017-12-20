{{-- @if ($breadcrumbs)
  <ol class="breadcrumb">
    @foreach ($breadcrumbs as $breadcrumb)
      @if ($breadcrumb->url && !$breadcrumb->last)
        <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
      @else
        <li class="active">{{ $breadcrumb->title }}</li>
      @endif
    @endforeach
  </ol>
@endif --}}
@if ($breadcrumbs)
<ul class="product-cats list-reset pull-right">
  @foreach ($breadcrumbs as $breadcrumb)
    @if ($breadcrumb->url && !$breadcrumb->last)
      <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
    @else
      <li class="active">{{ $breadcrumb->title }}</li>
    @endif
  @endforeach
</ul>
@endif