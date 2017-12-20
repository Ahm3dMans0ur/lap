<div class="container position-static z-tags-wrapper">
    <div class="row clearfix">
      <a href="{{route('services.stores')}}" class="tag tag-all"> كل الحجوزات </a>
@if($topCategoriesHasServices)
    @foreach($topCategoriesHasServices as $category)
        <a href="{{route('categories.show',$category->slug)}}" class="tag"># {{$category->name}}</a>
        {{-- @if ($category != reset($topCategoriesHasServices))  - @endif --}}
    @endforeach
@endif
    </div>
</div>