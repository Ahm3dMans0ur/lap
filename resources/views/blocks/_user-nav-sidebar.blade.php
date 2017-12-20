<div class="@if(isset($class)) {{$class}} @else pull-right col-xs-12 col-md-4 col-lg-3 xxs-mb-40 @endif user-side-nav">
    <div class="nav-panel-wrapper">
        <div class="bg-light card-dp-1 nav-panel">
            <ul role="navigation" class="nav nav-stacked text-bold xxs-p-2">
                @if (Auth::user()->store)
                <li role="presentation">
                    <a href="{!! route('stores.manage') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-1 @if(isset($selected) && $selected == 'stores.manage') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-speedometer"></span>
                        <span class="display-inline-block va-top"> @lang('stores.manage') </span>
                    </a></li>
                <li role="presentation">
                    <a href="{!! route('order.store.view') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-1 @if(isset($selected) && $selected == 'order.store.view') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-list"></span>
                        <span class="display-inline-block va-top"> @lang('messages.display orders') </span>
                    </a></li>
                <li role="presentation" >
                    <a href="{!! route('services.index') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-1 @if(isset($selected) && $selected == 'services.index') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-briefcase"></span>
                        <span class="display-inline-block va-top"> خدمات الحجز </span>
                        {{--  <span class="display-inline-block va-top"> @lang('services.Services') </span>  --}}
                    </a></li>
                <li role="presentation" >
                    <a href="{!! route('reservations.index') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-1 @if(isset($selected) && $selected == 'reservations.index') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-event"></span>
                        <span class="display-inline-block va-top"> @lang('reservations.Reservations') </span>
                    </a>
                <tr>
                    <li>
                        <a href="{!! route('reservations.index','confirmed') !!}" class="font-jfflat bg-light  border-bottom-solid-lightgray-1">
                            <span class="display-inline-block va-top"> @lang('reservations.confirmed') </span>
                        </a>
                    </li>
                    <li>
                        <a href="{!! route('reservations.index','rejected') !!}" class="font-jfflat bg-light  border-bottom-solid-lightgray-1">
                            <span class="display-inline-block va-top"> @lang('reservations.rejected') </span>
                        </a>
                    </li>
                    <li>
                        <a href="{!! route('reservations.index','new') !!}" class="font-jfflat bg-light  border-bottom-solid-lightgray-1">
                            <span class="display-inline-block va-top"> @lang('reservations.new') </span>
                        </a>
                    </li>

                </tr>
                </li>
                @else
                <li role="presentation">
                    <a href="{!! route('stores.create') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-1 @if(isset($selected) && $selected == 'stores.create') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-organization"></span>
                        <span class="display-inline-block va-top"> @lang('stores.create') </span>
                    </a></li>
                @endif
                <li role="presentation">
                    <a href="{!! route('products.create') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-1 @if(isset($selected) && $selected == 'products.create') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-plus"></span>
                        <span class="display-inline-block va-top"> @lang('app.Create Product') </span>
                    </a></li>
                
                <li role="presentation">
                    <a href="{!! route('user.favorites') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-1 @if(isset($selected) && $selected == 'user.favorites') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-star"></span>
                        <span class="display-inline-block va-top"> @lang('messages.favorites') </span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="{!! route('notification.index') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-1 @if(isset($selected) && $selected == 'notification.index') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-bubbles"></span>
                        <span class="display-inline-block va-top"> @lang('app.Notifications') </span>
                    </a>
                </li>
                <li role="presentation" >
                    <a href="{!! route('order.user.view') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-1 @if(isset($selected) && $selected == 'order.user.view') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-list"></span>
                        <span class="display-inline-block va-top"> عرض المشتريات </span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="{!! route('user.edit') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-1 @if(isset($selected) && $selected == 'user.edit') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-user"></span>
                        <span class="display-inline-block va-top"> @lang('messages.profile_edit') </span>
                    </a>
                </li>

                <li role="presentation" >
                    <a href="{!! route('contact') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-0 @if(isset($selected) && $selected == 'contact') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-support"></span>
                        <span class="display-inline-block va-top"> @lang('contact.technical support') </span>
                    </a></li>
            </ul>
        </div>
        <div class="bg-light card-dp-1 nav-panel xxs-mt-40">
            <ul role="navigation" class="nav nav-stacked text-bold xxs-p-2">
                <li role="presentation">
                    <a href="{!! route('messages.inbox') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-1 @if(isset($selected) && $selected == 'messages.inbox') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="pull-left xxs-mt-2 xxs-pt-4 text-bold border-radius-round badge badge-sm text-light text-center line-height-sm {{(auth()->user()->messages_receives()->notRead()->count() > 0) ? 'badge-danger' : 'bg-gray' }}"> {{ auth()->user()->messages_receives()->notRead()->count() }} </span>
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-envelope-letter"></span>
                        <span class="display-inline-block va-top"> @lang('messages.inbox_messages') </span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="{!! route('messages.sent') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-1 @if(isset($selected) && $selected == 'messages.sent') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-envelope"></span>
                        <span class="display-inline-block va-top"> @lang('messages.sent') </span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="{!! route('messages.send_view') !!}" class="font-jfflat bg-light line-height-lg border-bottom-solid-lightgray-0 @if(isset($selected) && $selected == 'messages.send_view') btn btn-dark btn-block text-right text-light border-radius-xs @endif">
                        <span class="display-inline-block va-top xxs-mt-1 xxs-ml-10 text-xl opacity-5 icon-envelope-open"></span>
                        <span class="display-inline-block va-top"> @lang('messages.send_message') </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @if (!Auth::user()->store)
    <div class="bg-light card-dp-1 border-radius-sm xxs-mt-40 border-top-solid-primary-3">
        <h5 class="text-bold text-primary grad-bg-light-primary xxs-mt-0 xxs-p-20 line-height-lg"> <span class="icon-organization text-lg"></span> &nbsp; قم بانشاء متجر الآن وابدأ البيع! </h5>
        <div class="xxs-p-20 xxs-pb-0">
            <a href="{{ route('stores.create') }}" class="btn btn-block btn-primary">
                <span class="display-inline-block va-top"> إنشاء متجر </span>
            </a>
        </div>
        <div class="xxs-p-20 xxs-pt-10">
            <a href="{{ route('stores.welcome') }}" class="btn btn-block btn-dark btn-ghost">
                <span class="display-inline-block va-top"> المزيد </span>
            </a>
        </div>
    </div>
    @endif
</div>