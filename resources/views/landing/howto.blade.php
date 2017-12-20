@extends('layouts.landing')

@section('title')
 @lang('messages.howto')
@endsection

@section('landing.abovethefold.title_raw')
    <h1 class="xxs-pt-30"><strong class="text-xs"> @lang('messages.howto_title') </strong></h1>
    <h4 class="xs-mt-15 font-droidkufi text-md hidden-xs"> @lang('messages.howto_desc') </h4>
    <div class="xxs-mt-40 md-mt-80">
        <a href="#" class="fold-scroll-down" data-action="scrollDown"><span></span></a>
    </div>
@endsection

@section('content')
    <section class="position-relative z-index-high xxs-p-20 xxs-pb-40 grad-bg-light-primary">
        <div class="container">
            <div class="row">
                <div class="pull-right col-xs-12 col-md-8 col-md-pull-2 position-relative z-index-low xxs-p-0">
                    <div class="col-xs-12 col-sm-6 col-md-8 xs-text-center sm-text-right">
                        <h3 class="text-primary"> تعرف على عضويات شاري </h3>
                        <h5 class="text-muted font-droidkufi xxs-mt-20"> للتمتع بكل مميزات منصة شاري قم بالحصول على العضوية الذهبية الآن. </h5>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 xs-text-center sm-text-left xxs-pt-30">
                        <a href="{{url('/memberships')}}" class="btn btn-primary"> العضويات </a>
                        <a href="{{url('/contact-us')}}" class="btn btn-dark btn-ghost"> الدعم الفني </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container position-relative z-index-medium xxs-pb-40">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-pull-1 position-relative z-index-low xxs-mb-40 xxs-p-0">
                <div class="text-center clearfix xxs-mt-60 md-pl-60 md-pr-60 flex-cols">
                    <div class="col-xs-12 col-sm-6 col-md-4 xxs-mb-20 lg-mb-40 position-relative z-index-high flex-item">
                        <div class="position-relative margin-auto square-xxl bg-light card-dp-1 card-dp-hover border-radius-md xxs-p-15 md-p-20 xxs-mt-0 md-mt-80">
                            <i class="text-dark text-xt material-icons margin-auto display-block xxs-mt-20 xxs-mb-20 cursor-default">looks_one</i>
                            <h5 class="hidden-xs line-height-xl xxs-mb-20 position-relative z-index-high">
                                <a href="{{url('/register')}}" class="text-bold text-xl font-jfflat btn btn-dark btn-link full-underline xxs-p-0"> قم بانشاء حساب </a></h5>
                            <div class="hidden-xs position-abolute x-right x-bottom container auto-width xxs-mt-40 xxs-p-0 text-right z-index-high">
                                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 bg-light border-radius-sm xxs-p-20 card-dp-4">
                                    <p class="xxs-pt-10 xxs-pb-10 font-jfflat"> احصل الآن على حساب لشراء وبيع المنتجات, اذا كنت تمتلك حساب يمكنك تسجيل الدخول. </p>
                                    <div class="xxs-pt-5 text-left">
                                        <a href="{{url('/login')}}" class="btn btn-sm btn-dark btn-ghost"> تسجيل الدخول </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="visible-xs">
                            <h5 class="line-height-xl xxs-mt-40">
                                <a href="{{url('/register')}}" class="text-bold text-xl font-jfflat btn btn-dark btn-link full-underline xxs-p-0"> قم بانشاء حساب </a></h5>
                            <div class="xxs-mt-10 xxs-p-20 text-center clearfix">
                                <div class="bg-light border-radius-sm xxs-p-20 card-dp-4">
                                    <p class="xxs-pt-10 xxs-pb-10 font-jfflat"> احصل الآن على حساب لشراء وبيع المنتجات, اذا كنت تمتلك حساب يمكنك تسجيل الدخول. </p>
                                    <div class="xxs-pt-5 text-center">
                                        <a href="{{url('/login')}}" class="btn btn-sm btn-dark btn-ghost"> تسجيل الدخول </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs col-sm-6 col-md-8 xxs-mb-20 lg-mb-40 position-relative z-index-low flex-item">
                      <div class="position-relative side-bg xxs-mt-0 xs-text-center md-text-left">
                        <div class="side-bg-el">
                          <img src="/frontend/images/tablet-iphone.png" alt="Shari for Tablets & Smartphones"/> </div>
                      </div>
                    </div>
                </div>
                <hr class="xxs-m-80 xxs-mb-0 border-bottom-solid-light-1">
            </div>
            <div class="col-xs-12 col-md-10 col-md-pull-1 position-relative z-index-low xxs-mb-40 xxs-p-0">
                <div class="text-center clearfix xxs-mt-60 md-pl-60 md-pr-60 flex-cols">
                    <div class="pull-right hidden-xs col-sm-6 col-md-8 xxs-mb-20 lg-mb-40 z-index-low flex-item">
                      <div class="position-relative side-bg xxs-mt-0 xs-text-center md-text-left">
                        <div class="side-bg-el">
                          <img src="/frontend/images/shari-store.png" alt="Shari for Tablets & Smartphones"/> </div>
                      </div>
                    </div>
                    <div class="position-relative col-xs-12 col-sm-6 col-md-4 xxs-mb-20 lg-mb-40 position-relative z-index-high flex-item">
                        <div class="position-relative margin-auto square-xxl bg-light card-dp-1 card-dp-hover border-radius-md xxs-p-15 md-p-20 xxs-mt-0 md-mt-40">
                            <i class="text-dark text-xt material-icons margin-auto display-block xxs-mt-20 xxs-mb-20 cursor-default">looks_two</i>
                            <h5 class="hidden-xs line-height-xl xxs-mb-20 position-absolute z-index-high x-left y-top sm-mt-130 sm-ml-40">
                                <a href="{{route('products.create')}}" class="text-bold text-xl font-jfflat btn btn-dark btn-link full-underline xxs-p-0"> قم بإضافة منتج </a></h5>
                        </div>
                        <div class="hidden-xs position-relative xxs-pt-80 xxs-pl-0">
                            <div class="position-abolute x-left x-bottom container auto-width xxs-mt-40 xxs-p-0 text-right z-index-high">
                                <div class="position-relative col-xs-12 col-sm-6 col-sm-push-4 col-md-5 col-md-push-3 col-lg-4 bg-light border-radius-sm xxs-p-20 card-dp-4">
                                    <p class="xxs-pt-10 xxs-pb-10 font-jfflat"> يمكنك الحصول على العضوية الذهبية او الفضية لانشاء متجر وبدأ بيع منتجاتك وتقديم خدماتك بشكل افضل. </p>
                                    <div class="xxs-pt-5 text-right">
                                        <a href="{{url('/register')}}" class="btn btn-sm btn-dark btn-ghost"> العضويات </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="visible-xs">
                            <h5 class="line-height-xl xxs-mt-40">
                                <a href="{{route('products.create')}}" class="text-bold text-xl font-jfflat btn btn-dark btn-link full-underline xxs-p-0"> قم بإضافة منتج </a></h5>
                            <div class="xxs-mt-10 xxs-p-20 text-center clearfix">
                                <div class="bg-light border-radius-sm xxs-p-20 card-dp-4">
                                    <p class="xxs-pt-10 xxs-pb-10 font-jfflat"> يمكنك الحصول على العضوية الذهبية او الفضية لانشاء متجر وبدأ بيع منتجاتك وتقديم خدماتك بشكل افضل. </p>
                                    <div class="xxs-pt-5 text-center">
                                        <a href="{{url('/register')}}" class="btn btn-sm btn-dark btn-ghost"> العضويات </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="xxs-m-80 xxs-mt- xxs-mb-0 border-bottom-solid-light-1">
            </div>
            <div class="col-xs-12 col-md-10 col-md-pull-1 position-relative z-index-low xxs-mb-40 xxs-p-0">
                <div class="text-center clearfix xxs-mt-60 md-pl-60 md-pr-60 flex-cols">
                    <div class="col-xs-12 col-sm-6 col-md-4 xxs-mb-20 lg-mb-40 position-relative z-index-high flex-item">
                        <div class="position-relative margin-auto square-xxl bg-light card-dp-1 card-dp-hover border-radius-md xxs-p-15 md-p-20 xxs-mt-0 md-mt-80">
                            <i class="text-dark text-xt material-icons margin-auto display-block xxs-mt-20 xxs-mb-20 cursor-default">looks_3</i>
                            <h5 class="hidden-xs line-height-xl xxs-mb-20 position-relative z-index-high">
                                <a href="{{route('stores.welcome')}}" class="text-bold text-xl font-jfflat btn btn-dark btn-link full-underline xxs-p-0"> احصل على الارباح </a></h5>
                            <div class="hidden-xs position-abolute x-right x-bottom container auto-width xxs-mt-40 xxs-p-0 text-right z-index-high">
                                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 bg-light border-radius-sm xxs-p-20 card-dp-4">
                                    <p class="xxs-pt-10 xxs-pb-10 font-jfflat"> اذا كان لديك استفسار او تريد مساعدة بخصوص انشاء او ادارة حسابك قم بمراسلة الدعم الفني. </p>
                                    <div class="xxs-pt-5 text-left">
                                        <a href="{{url('/contact-us')}}" class="btn btn-sm btn-dark btn-ghost"> الدعم الفنى </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="visible-xs">
                            <h5 class="line-height-xl xxs-mt-40">
                                <a href="{{route('stores.welcome')}}" class="text-bold text-xl font-jfflat btn btn-dark btn-link full-underline xxs-p-0"> احصل على الارباح </a></h5>
                            <div class="xxs-mt-10 xxs-p-20 text-center clearfix">
                                <div class="bg-light border-radius-sm xxs-p-20 card-dp-4">
                                    <p class="xxs-pt-10 xxs-pb-10 font-jfflat"> اذا كان لديك استفسار او تريد مساعدة بخصوص انشاء او ادارة حسابك قم بمراسلة الدعم الفني. </p>
                                    <div class="xxs-pt-5 text-center">
                                        <a href="{{url('/contact-us')}}" class="btn btn-sm btn-dark btn-ghost"> الدعم الفنى </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs col-sm-6 col-md-8 xxs-mb-20 lg-mb-40 position-relative z-index-low flex-item">
                      <div class="position-relative side-bg xxs-mt-0 xs-text-center md-text-left">
                        <div class="side-bg-el">
                          <img src="/frontend/images/hand-shake.png" alt="Shari for Tablets & Smartphones"/> </div>
                      </div>
                    </div>
                </div>
                <hr class="xxs-m-80 xxs-mt-100 xxs-mb-0 border-bottom-solid-light-1 opacity-0">
            </div>
        </div>
    </div>
@endsection