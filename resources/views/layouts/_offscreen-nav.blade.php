<nav id="offscreenNav" class="offscreen-nav col-xs-12 col-sm-6 col-md-4 col-lg-2">
  <a href="#" data-action="offscreenNavClose" class="position-relative row xxs-p-15 display-block">
    <div href="#" class="offscreen-nav-close position-relative z-index-high clearfix">
      <i class="icon icon-arrow-left pull-left text-lg xxs-mt-2"></i>
      <span class="display-block text-light"> عودة </span>
    </div>
    <div class="position-absolute bg-darkgray opacity-3 x-left y-top full-width full-height"></div>
  </a>
  <ul class="xxs-mt-20">
    <li>
      <a href="{{route('defaultUserHome')}}"> {{\Setting::get('title', 'الرئيسية')}} </a>
      <ul>
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
            <a href="{{ route('stores.map') }}"> خريطة </a>
          </li>
        <li>
          <a href="{{ route('contact') }}"> @if(auth()->guest()) @lang('app.Contact Us') @else @lang('contact.technical support') @endif </a>
        </li>
      </ul>
    </li>
    @if(auth()->guest())
    <li>
      <a href="#"> حسابى </a>
      <ul>
        <li>
          <a href="{{route('register')}}"> تسجيل حساب </a>
        </li>

        <li>
          <a href="{{route('login')}}"> تسجيل الدخول </a>
        </li>
        <li>
          <a href="{{url('password/reset')}}"> نسيت كلمة المرور </a>
        </li>
      </ul>
    </li>
    @else
    <li>
      <a href="{{route('user.profile',auth()->user()->username)}}"> حسابى </a>
      <ul>
        <li>
          <a href="{{ route('products.create') }}"> @lang('app.Create Product') </a>
        </li>
        <li>
          <a href="{{route('user.profile',auth()->user()->username)}}"> صفحتي </a>
        </li>
        <li>
          <a href="{{ route('messages.inbox') }}"> الرسائل </a>
        </li>
        <li>
          <a href="{{ route('user.products_feed') }}"> احدث منتجات المتبوعون </a>
        </li>
        @if(auth()->user()->store)
        <li>
          <a href="{{route('stores.show',auth()->user()->store->slug)}}"> متجري </a>
        </li>
        <li>
          <a href="{{route('stores.manage')}}"> التحكم فى المتجر </a>
        </li>
        @else
        <li>
          <a href="{{route('stores.welcome')}}"> الحصول علي متجر </a>
        </li>
        @endif
        <li>
          <a href="{{route('user.edit')}}"> تعديل بياناتي </a>
        </li>
        <li>
          <a href="{{url('/logout')}}" class="logout"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            تسجيل الخروج
          </a>
        </li>
      </ul>
    </li>
    @endif
    <li>
      <a href="{{route('categories.index')}}"> @lang('app.All Categories') </a>
        @if($list_categories && count($list_categories) > 0)
        <ul>
          @foreach($list_categories as $category)
            <li class="submenu folded">
              <a href="#"> {{$category->name}}</a>
              <ul>
                <li><a href="{{route('categories.show', $category->slug)}}"> عرض الكل </a></li>
                  @if($category->childs)
                    @foreach($category->childs as $child)
                      <li>
                        <a href="{{route('categories.show', $child->slug)}}" @if($child->childs) class="has-child" @endif> 
                          {{$child->name}} 
                        </a>
                        @if($child->childs)
                          <ul>
                            @foreach($child->childs as $child)
                            <li>
                              <a href="{{route('categories.show', $child->slug)}}" @if($child->childs) class="has-child" @endif> 
                                {{$child->name}} 
                              </a>
                              @if($child->childs)
                                <ul>
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
        </ul>
        @endif
    </li>
  </ul>
</nav>