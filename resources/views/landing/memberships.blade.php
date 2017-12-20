@extends('layouts.landing')

@section('title')
 @lang('messages.memberships')
@endsection

@section('landing.main_header_class')
 -window-height
@endsection
@section('landing.nav_class')
 nav-compact nav-persist
@endsection

@section('landing.abovethefold.title_raw')
    <h1 class="xxs-pt-30"><strong class="text-xs"> @lang('messages.memberships_title') </strong></h1>
    <h4 class="xs-mt-10 font-droidkufi text-md hidden-xs"> @lang('messages.memberships_desc') </h4>
    <div class="xxs-mt-20">
        <a href="#" class="fold-scroll-down" data-action="scrollDown"><span></span></a>
    </div>
@endsection

@section('landing.footer')
  @include('layouts._simple-footer', ['borderTopWidth' => 0])
@endsection

@section('content')
    <div class="container pull-up-90 position-relative z-index-medium">
        <div class="row">
            <div class="pull-right xxs-mb-40 col-xs-12 col-sm-4 col-md-3 col-md-pull-1 xxs-p-0 position-relative z-index-low">
                <div class="bg-light card-dp-1 border-radius-md-tr-bottom md-form xxs-mt-60">
                    <div class="clearfix xxs-pb-20">
                        <div class="text-center xxs-pt-0 xxs-pb-30">
                            <h5 class="text-darkgray xxs-p-20 xxs-pt-60 xxs-pb-5 xxs-m-0">
                                <strong class="text-xxl"> @lang('messages.memberships_free') </strong>
                            </h5>
                            <p class="xxs-p-20 xxs-pt-10 xxs-pb-10 text-sm text-darkgray"> @lang('messages.memberships_free_desc') </p>
                        </div>
                        <div class="xxs-pb-20">
                            <hr class="xxs-mt-0">
                        </div>
                        <p class="xxs-pb-20 text-right clearfix">
                            <span class="col-xs-2 col-md-1 text-left text-success icon-check xxs-pl-0 xxs-pt-1 xxs-mt-2"></span>
                            <span class="col-xs-10 col-md-11 text-dark line-height-lg"> عرض عدد غير محدود من المنتجات. </span>
                        </p>
                        <p class="xxs-pb-20 text-right clearfix">
                            <span class="col-xs-2 col-md-1 text-left text-danger icon-close xxs-pl-0 xxs-pt-1 xxs-mt-2"></span>
                            <span class="col-xs-10 col-md-11 text-dark line-height-lg"> اولوية <strong class="text-danger">منخفضة</strong> لظهور منتجاتك. </span>
                        </p>
                        <p class="xxs-pb-20 text-right clearfix">
                            <span class="col-xs-2 col-md-1 text-left text-danger icon-close xxs-pl-0 xxs-pt-1 xxs-mt-2"></span>
                            <span class="col-xs-10 col-md-11 text-dark line-height-lg"> <strong class="text-danger">لا يمكنك انشاء متجر</strong> لعرض المنتجات او لتقديم الخدمات. </span>
                        </p>
                        <div class="xxs-mt-20 text-center line-height-xl">
                            <strong class="display-inline-block va-bottom text-xxxl text-darkgray line-height-xs xxs-ml-5"> 0 </strong>
                            <strong class="display-inline-block va-bottom text-lg text-gray"> ريال </strong>
                        </div>
                        <div class="xxs-p-20 xxs-pt-30 xxs-pb-20">
                            <a href="{{url('/register')}}" class="btn btn-block btn-ghost btn-dark xxs-pt-10 xxs-pb-10"> احصل على العضوية المجانية </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pull-right xxs-mb-40 col-xs-12 col-sm-4 col-md-4 col-md-pull-1 xxs-p-0 position-relative z-index-high">
                <div class="bg-light card-dp-4 border-radius-md md-form">
                    <div class="clearfix xxs-pb-20">
                        <div class="text-center border-radius-md-top grad-bg-gold clearfix xxs-pb-30">
                            <div class="border-radius-md-top bg-primary text-light xxs-p-8 xxs-pt-10">
                                <strong class="display-inline-block va-top text-xl icon-badge xxs-mt-1 xxs-ml-5"></strong>
                                <strong class="display-inline-block va-top text-lg"> الاكثر اقبالاً </strong>
                            </div>
                            <h5 class="text-dark xxs-p-20 xxs-pt-50 xxs-pb-5 xxs-m-0">
                                <strong class="text-xxl"> @lang('messages.memberships_golden') </strong>
                            </h5>
                            <p class="xxs-p-20 xxs-pt-10 xxs-pb-20 text-sm text-dark"> @lang('messages.memberships_golden_desc') </p>
                        </div>
                        <div class="xxs-pb-20">
                            <hr class="xxs-mt-0">
                        </div>
                        <p class="xxs-pb-20 text-right clearfix">
                            <span class="col-xs-2 col-md-1 text-left text-success icon-check xxs-pl-0 xxs-pt-1 xxs-mt-2"></span>
                            <span class="col-xs-10 col-md-11 text-dark line-height-lg"> عرض عدد غير محدود من المنتجات. </span>
                        </p>
                        <p class="xxs-pb-20 text-right clearfix">
                            <span class="col-xs-2 col-md-1 text-left text-success icon-check xxs-pl-0 xxs-pt-1 xxs-mt-2"></span>
                            <span class="col-xs-10 col-md-11 text-dark line-height-lg"> اولوية <strong class="text-success">مرتفعة</strong> لظهور منتجاتك. </span>
                        </p>
                        <p class="xxs-pb-20 text-right clearfix">
                            <span class="col-xs-2 col-md-1 text-left text-success icon-check xxs-pl-0 xxs-pt-1 xxs-mt-2"></span>
                            <span class="col-xs-10 col-md-11 text-dark line-height-lg"> عرض منتجاتك فى <strong>اعلى الصفحة الرئيسية</strong> للمتجر. </span>
                        </p>
                        <p class="xxs-pb-20 text-right clearfix">
                            <span class="col-xs-2 col-md-1 text-left text-success icon-check xxs-pl-0 xxs-pt-1 xxs-mt-2"></span>
                            <span class="col-xs-10 col-md-11 text-dark line-height-lg"> يمكنك انشاء متجر لعرض المنتجات او لتقديم الخدمات. </span>
                        </p>
                        <p class="xxs-pb-20 text-right clearfix">
                            <span class="col-xs-2 col-md-1 text-left text-success icon-check xxs-pl-0 xxs-pt-1 xxs-mt-2"></span>
                            <span class="col-xs-10 col-md-11 text-dark line-height-lg"> اولوية الرد و الوصول للدعم الفني. </span>
                        </p>
                        <div class="xxs-mt-20 text-center line-height-xl">
                            <strong class="display-inline-block va-bottom text-xxxl text-primary line-height-xs xxs-ml-5"> 500 </strong>
                            <strong class="display-inline-block va-bottom text-lg text-gray"> ريال </strong>
                        </div>
                        <div class="xxs-p-20 xxs-pt-30 xxs-pb-20">
                            <a href="{{url('/register')}}" class="btn btn-block btn-ghost btn-primary xxs-pt-10 xxs-pb-10"> اشترك الآن </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pull-right xxs-mb-40 col-xs-12 col-sm-4 col-md-3 col-md-pull-1 xxs-p-0 position-relative z-index-low">
                <div class="bg-light card-dp-2 border-radius-md-tl-bottom md-form xxs-mt-60">
                    <div class="clearfix xxs-pb-20">
                        <div class="text-center border-radius-md-top-left bg-silver clearfix xxs-pb-30">
                            <h5 class="text-dark xxs-p-20 xxs-pt-60 xxs-pb-5 xxs-m-0">
                                <strong class="text-xxl"> @lang('messages.memberships_silver') </strong>
                            </h5>
                            <p class="xxs-p-20 xxs-pt-10 xxs-pb-10 text-sm text-dark"> @lang('messages.memberships_silver_desc') </p>
                        </div>
                        <div class="xxs-pb-20">
                            <hr class="xxs-mt-0">
                        </div>
                        <p class="xxs-pb-20 text-right clearfix">
                            <span class="col-xs-2 col-md-1 text-left text-success icon-check xxs-pl-0 xxs-pt-1 xxs-mt-2"></span>
                            <span class="col-xs-10 col-md-11 text-dark line-height-lg"> عرض عدد غير محدود من المنتجات. </span>
                        </p>
                        <p class="xxs-pb-20 text-right clearfix">
                            <span class="col-xs-2 col-md-1 text-left text-success icon-check xxs-pl-0 xxs-pt-1 xxs-mt-2"></span>
                            <span class="col-xs-10 col-md-11 text-dark line-height-lg"> اولوية <strong class="text-warning">متوسطة</strong> لظهور منتجاتك. </span>
                        </p>
                        <p class="xxs-pb-20 text-right clearfix">
                            <span class="col-xs-2 col-md-1 text-left text-success icon-check xxs-pl-0 xxs-pt-1 xxs-mt-2"></span>
                            <span class="col-xs-10 col-md-11 text-dark line-height-lg"> يمكنك انشاء متجر لعرض المنتجات او لتقديم الخدمات. </span>
                        </p>
                        <div class="xxs-mt-20 text-center line-height-xl">
                            <strong class="display-inline-block va-bottom text-xxxl text-dark line-height-xs xxs-ml-5"> 250 </strong>
                            <strong class="display-inline-block va-bottom text-lg text-gray"> ريال </strong>
                        </div>
                        <div class="xxs-p-20 xxs-pt-30 xxs-pb-20">
                            <a href="{{url('/register')}}" class="btn btn-block btn-ghost btn-dark xxs-pt-10 xxs-pb-10"> اشترك الآن </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <hr class="xxs-m-80 border-bottom-solid-midgray-1">
                <h3 class="xxs-pt-10 text-darkgray"> 
                    <span class="display-inline-block va-top xxs-pb-15 border-bottom-solid-gray-0"> كل العضويات يأتى معها </span></h3>
                <div class="text-center clearfix xxs-mt-60 md-pl-60 md-pr-60 flex-cols">
                    <div class="col-xs-12 col-sm-6 col-md-4 xxs-mb-20 lg-mb-40 flex-item">
                        <div class="bg-light card-dp-1 card-dp-hover border-radius-sm xxs-p-15 md-p-20">
                            <i class="icon text-xt material-icons margin-auto display-block xxs-mt-20 xxs-mb-40">dashboard</i>
                            <h5 class="line-height-md"><strong class="text-xl"> لوحة تحكم </strong></h5>
                            <p class="xxs-mt-10 text-muted"> يوفر لك شاري لوحة تحكم لحسابك بسيطة وسهلة الاستخدام. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 xxs-mb-20 lg-mb-40 flex-item">
                        <div class="bg-light card-dp-1 card-dp-hover border-radius-sm xxs-p-15 md-p-20">
                            <i class="icon text-xt material-icons margin-auto display-block xxs-mt-20 xxs-mb-40">stars</i>
                            <h5 class="line-height-md"><strong class="text-xl"> مستخدمين مميزين </strong></h5>
                            <p class="xxs-mt-10 text-muted"> شاري يتيح لك الوصول الى مجموعة من المستخدمين المميزين بمختلف انحاء المملكة. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 xxs-mb-20 lg-mb-40 flex-item">
                        <div class="bg-light card-dp-1 card-dp-hover border-radius-sm xxs-p-15 md-p-20">
                            <i class="icon text-xt material-icons margin-auto display-block xxs-mt-20 xxs-mb-40">update</i>
                            <h5 class="line-height-md"><strong class="text-xl"> دعم فنى </strong></h5>
                            <p class="xxs-mt-10 text-muted"> يسعدنا مساعدتك للتغلب على اى مشكلة قد تواجهك, <a href="{{route('contact')}}">تواصل مع الدعم الفنى</a>. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 xxs-mb-20 lg-mb-40 flex-item">
                        <div class="bg-light card-dp-1 card-dp-hover border-radius-sm xxs-p-15 md-p-20">
                            <i class="icon text-xt material-icons margin-auto display-block xxs-mt-20 xxs-mb-40">mail_outline</i>
                            <h5 class="line-height-md"><strong class="text-xl"> الرسائل </strong></h5>
                            <p class="xxs-mt-10 text-muted"> توفر منصة شاري نظام لتبادل الرسائل بين المستخدمين. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 xxs-mb-20 lg-mb-40 flex-item">
                        <div class="bg-light card-dp-1 card-dp-hover border-radius-sm xxs-p-15 md-p-20">
                            <i class="icon text-xt material-icons margin-auto display-block xxs-mt-20 xxs-mb-40">security</i>
                            <h5 class="line-height-md"><strong class="text-xl"> نظام آمن </strong></h5>
                            <p class="xxs-mt-10 text-muted"> منصة شاري آمنة كلياً لتوفر للمشتري وللبائع تجربة آمنة ومتميزة. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 xxs-mb-20 lg-mb-40 flex-item">
                        <div class="bg-light card-dp-1 card-dp-hover border-radius-sm xxs-p-15 md-p-20">
                            <i class="icon text-xt material-icons margin-auto display-block xxs-mt-20 xxs-mb-40">thumbs_up_down</i>
                            <h5 class="line-height-md"><strong class="text-xl"> التصويت </strong></h5>
                            <p class="xxs-mt-10 text-muted"> يوفر شاري امكانية تقيّم المنتجات ايجابياً او سلبياً لنظام اكثر شفافية ودقة. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 xxs-mb-20 lg-mb-40 flex-item">
                        <div class="bg-light card-dp-1 card-dp-hover border-radius-sm xxs-p-15 md-p-20">
                            <i class="icon text-xt material-icons margin-auto display-block xxs-mt-20 xxs-mb-40">important_devices</i>
                            <h5 class="line-height-md"><strong class="text-xl"> سهولة الوصول </strong></h5>
                            <p class="xxs-mt-10 text-muted"> منصة شاري مصممة لكي تعمل على مختلف مقاسات الشاشات المكتبية واللوحية. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 xxs-mb-20 lg-mb-40 flex-item">
                        <div class="bg-light card-dp-1 card-dp-hover border-radius-sm xxs-p-15 md-p-20">
                            <i class="icon text-xt material-icons margin-auto display-block xxs-mt-20 xxs-mb-40">favorite_outline</i>
                            <h5 class="line-height-md"><strong class="text-xl"> المفضلة </strong></h5>
                            <p class="xxs-mt-10 text-muted"> يمكنك حفظ المنتجات التى حاذت على اعجابك للوصول اليها في وقت لاحق . </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 xxs-mb-20 lg-mb-40 flex-item">
                        <div class=" border-radius-sm xxs-p-15 md-p-20">
                            <i class="icon text-xt material-icons margin-auto display-block xxs-mt-20 xxs-mb-40">help_outline</i>
                            @if (!Auth::check())
                                <h5 class="line-height-md"><strong class="text-xl"> <a href="{{url('/register')}}" class="font-jfflat">اكتشف المزيد</a> </strong></h5>
                                <p class="xxs-mt-10 text-muted"> <a href="{{url('/register')}}">سجل حساب الآن</a> لتتعرف على المزيد من مميزات منصة شاري. </p>
                            @else
                                <h5 class="line-height-md"><strong class="text-xl"> <a href="{{route('contact')}}" class="font-jfflat">مرحباً {{Auth::user()->name}}</a> </strong></h5>
                                <p class="xxs-mt-10 text-muted"> اذا واجهتك اى مشاكل لا تتردد بالتواصل مع <a href="{{route('contact')}}">الدعم الفنى</a>. </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection