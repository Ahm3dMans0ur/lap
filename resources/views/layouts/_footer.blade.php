<footer class="std-footer xxs-mt-40 xxs-pt-60">
    <div class="container xxs-pt-40">
        <div class="row col-lg-pull-0 position-relative">
            <div class="col-xs-12 col-lg-4 xxs-mb-60 lg-mb-0 xs-text-center lg-text-right">
                <div class="footer-brand-desc">
                    <a href="#" class="brand-right display-inline-block">
                        <img src="/frontend/images/logo-light.png" alt="Shari.sa" class="img-responsive log_resolution">
                    </a>
                    <p class="text-sm text-light xxs-mt-20 font-jfflat">
                        {{\Setting::get('description')}}
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-5 xxs-mb-60 sm-mb-0">
                <nav class="footer-nav">
                    <ul class="nav col-md-6">
                        <li>
                            <a href="{{ route('defaultUserHome') }}"> الرئيسية </a></li>
                        <li>
                            <a href="{{ url('/welcome#about-shari') }}"> عن شاري </a></li>
                        <li>
                            <a href="#"> سياسة الخصوصية </a></li>
                        <li>
                            <a href="{{ route('pages.show','terms') }}"> شروط الاستخدام </a></li>
                    </ul>
                    <ul class="nav col-md-6">
                        <li>
                            <a href="{{ url('/welcome#about-usage') }}"> كيفية استخدام شاري </a></li>
                        <li>
                            <a href="{{ url('/memberships') }}"> العضويات </a></li>
                        <li>
                            <a href="{{route('contact')}}"> الدعم الفنى </a></li>
						<li>
                            <a href="{{route('pages.show','return-policy')}}"> سياسة الاسترجاع </a></li>
						<li>
                            <a href="{{route('pages.show','payment-and-shipping-mechanism')}}"> آلية الدفع والشحن </a></li>							
						<li>
                            <a href="{{route('pages.show','warranty-mechanism')}}"> آلية الضمان </a></li>                    
					</ul>
                </nav>
            </div>
        @if(!empty(\Setting::get('twitter')))
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="http://twitter.com/{{ \Setting::get('twitter') }}" target="_blank">
                        <h3 class="xxs-mt-0 text-left text-light lang-ltr clearfix">
                            <span class="pull-left icon icon-xs icon-social-twitter"></span>
                            <span class="pull-left xxs-ml-10"> @SHARI </span>
                        </h3>
                    </a>
                    @if(isset($tweets))
                        <div class="xxs-mt-30 tweets-list">
                            @foreach($tweets as $tweet)
                                <div class="tweet-item">
                                    <p>{{ $tweet['text'] }}</p>
                                    <span class="tweet-time"> {{ \Carbon\Carbon::parse($tweet['created_at'])->diffForHumans() }} </span>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
    <div class="footer-low xxs-mt-20 xxs-pt-20 xxs-pb-20 text-center">
        <span class="display-inline-block font-droidkufi"> جميع الحقوق محفوظة لسنة 2017 </span>
    </div>
</footer>