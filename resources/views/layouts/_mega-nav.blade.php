<nav id="megaNav" class="mega-nav visible-md-block visible-lg-block">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="mega-nav_bar">
          <li>
            <a href="{{route('products.index')}}"> @lang('app.All Products')</a>
              <ul class="submenu dropdown-menu col-xs-10 pull-right">
                <h2 class="text-lightgray col-xs-12">@lang('app.All Products')</h2>
                <li>
                  <a href="{{route('products.golden')}}"> @lang('products.golden products') </a>
                </li>
                <li>
                  <a href="{{route('products.silver')}}"> @lang('products.silver products') </a>
                </li>
                <li>
                  <a href="{{route('products.individual')}}"> @lang('products.individual products') </a>
                </li>
                <li>
                  <a href="{{route('products.auctions')}}"> @lang('products.Auctions') </a>
                </li>
              </ul>
          </li>
          @if($list_products_categories && count($list_products_categories) > 0)
            @foreach($list_products_categories as $category)
              <li>
                <a href="{{route('categories.show', $category->slug)}}"> {{$category->name}}</a>

                <ul class="submenu dropdown-menu col-xs-10 pull-right card-bg-cat-{{ $category->getClassName() }}">
                <h2 class="text-lightgray col-xs-12">{{ $category->name }}</h2>
                    @if($category->childs)
                      @foreach($category->childs as $child)
                        <li>
                          <a href="{{route('categories.show', $child->slug)}}">
                            {{$child->name}}
                            @if($child->childs)
                              <i class="icon-arrow-left icons has_menu_icon"></i>
                            @endif
                          </a>
                          @if($child->childs)
                            <ul class="_submenu dropdown-menu">
                              @foreach($child->childs as $child)
                              <li>
                                <a href="{{route('categories.show', $child->slug)}}">
                                  {{$child->name}}
                                  @if($child->childs)
                                    <i class="icon-arrow-left icons has_menu_icon"></i>
                                  @endif
                                </a>
                                @if($child->childs)
                                  <ul class="_submenu dropdown-menu">
                                    @foreach($child->childs as $child)
                                    <li>
                                      <a href="{{route('categories.show', $child->slug)}}"> {{$child->name}} </a>
                                    </li>
                                    @endforeach
                                  </ul>
                                @endif
                              </li>
                              @endforeach
                            </ul>
                          @endif
                        </li>
                      @endforeach
                    @endif
                </ul>
              </li>
            @endforeach
          @endif
{{--           <li>
            <a href="{{route('defaultUserHome')}}"> {{\Setting::get('title', 'الرئيسية')}} </a>
            <ul class="submenu">
              @if(count($pages) > 0)
                @foreach($pages as $page)
                <li>
                  <a href="{{ $url=route('pages.show',$page->slug) }}">{{$page->title}}</a>
                </li>
                @endforeach
              @endif
              <li>
                <a href="{{ url('/memberships') }}"> @lang('messages.memberships') </a>
              </li>
              <li>
                <a href="{{ url('/how-to-use-shari') }}"> كيف تستخدم شارى </a>
              </li>
              <li>
                <a href="{{ route('contact') }}"> @if(auth()->guest()) @lang('app.Contact Us') @else @lang('contact.technical support') @endif </a>
              </li>
            </ul>
          </li>
   --}}
        </ul>
      </div>
    </div>
  </div>
</nav>