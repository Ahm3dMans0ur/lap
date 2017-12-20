@if ($breadcrumbs)
<ol class="breadcrumb pull-left bg-transparent xxs-pt-40 xxs-mt-2">
  @foreach ($breadcrumbs as $breadcrumb)
    @if ($breadcrumb->url && !$breadcrumb->last)
      <li><a href="{{ $breadcrumb->url }}" class="font-jfflat">{{ $breadcrumb->title }}</a></li>
    @else
      <li class="active">{{ $breadcrumb->title }}</li>
    @endif
  @endforeach
</ol>
@endif