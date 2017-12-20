@extends('layouts.frontend')

@section('title')
    @lang('app.Create Product')
@endsection

@section('content')
    <section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container">
            <ol class="breadcrumb pull-left bg-transparent xxs-pt-40 xxs-mt-2">
                <li><a href="{!! route('user.edit') !!}" class="font-jfflat"> @lang('app.Dashboard') </a></li>
                <li class="active"> @lang('app.Create Product') </li>
            </ol>
            <h1 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> @lang('app.Create Product') </h1>
        </div>
    </section>

    <div class="container pull-up-40 position-relative z-index-medium">
        <div class="row">
            <div class="pull-left offers col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
                <div class="bg-light card-dp-3 border-radius-md md-form user-panel-left-pane">
                    <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                        @if (isset($product,$product->id))
                        <div class="btn-group pull-left xxs-pt-30 xxs-pl-30">
                            <a href="{{route('products.show',$product->id)}}" class="btn btn-xs btn-gray" target="_blank"> المعاينة </a>
                        </div>
                        @endif
                        <h5 class="pull-right text-darkgray xxs-p-30 xxs-pl-0 xxs-pr-40 xxs-m-0 border-bottom-solid-midgray-1">
                            <i class="display-inline-block va-top icon icon-book-open xxs-ml-10"></i>
                            <span> بيانات الأعلان أو المنتج </span>
                        </h5>
                    </div>
                    @if (count($errors) > 0)
                    <div class="xxs-p-20 xxs-mb-20">
                        @include('common.errors')
                    </div>
                    @endif

                    {!! Form::open(['route' => 'products.store','class' => 'row create-new-product','enctype' => 'multipart/form-data']) !!}

                    @include('products.fields')

                    <div class="clearfix">
                        <hr class="xxs-mt-30 xxs-mb-10">
                    </div>

                    <div class="form-group xxs-mr-20 xxs-ml-20 clearfix {{ $errors->has('checkboxTermsAndCondition') ? ' has-error' : '' }}">

                        <div class="col-xs-12">

                            <div class="terms-error-message xxs-p-20 xxs-pb-0 hidden">
                            @include('flash::_message',[
                              'class' => 'warning',
                              'showClose' => true,
                              'message' => Lang::get('products.Please accept the terms and conditions')
                            ])
                            </div>

                        </div>
                        <div class="col-xs-2 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20">
                            <label for="checkboxTermsAndCondition" class="display-inline-block va-top text-primary text-xxl material-icons cursor-pointer">assignment</label>
                        </div>
                        <div class="checkbox col-xs-10 col-sm-4">
                            <label class="xxs-pt-15">
                                {!! Form::checkbox('checkboxTermsAndCondition', 'yes',false,['id' => 'checkboxTermsAndCondition']) !!}
                                <span class="display-inline-block va-top"> @lang('products.I accept the terms and conditions') </span>
                            </label>
                            <div class="xxs-mt-20">
                                <a id="linkTerms" class="btn btn-primary btn-link full-underline text-danger text-sm text-bold xxs-p-0 xxs-pb-5 hidden-sm hidden-xs" href="#" onclick="popupwindow('/pages/terms?layouts=simple','Terms & Conditions',800,600);return false;">
                                <span>@lang('products.terms_and_conditions')</span> </a>
                                <a id="linkTerms" class="btn btn-primary btn-link full-underline text-danger text-sm text-bold xxs-p-0 xxs-pb-5 hidden-md hidden-lg" href="{{url('/pages/terms?layouts=simple')}}" target="_blank">
                                <span>@lang('products.terms_and_conditions')</span> </a>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix">
                        <hr class="xxs-mb-40">
                    </div>

                    <div class="form-group form-submit xxs-pl-40 xxs-pb-20 text-left">
                        {!! Form::submit( Lang::get('app.Send'), ['class' => 'btn btn-primary border-radius-xs xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10']) !!}
                        {!! Form::reset( Lang::get('messages.cancel'), ['class' => 'btn btn-gray btn-ghost border-radius-xs xxs-p-10 xxs-pr-30 xxs-pl-30']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            @include('blocks._user-nav-sidebar', ['selected' => 'products.create'])
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
$(document).on('change', '#checkboxTermsAndCondition', function () {
    if ($(this).is(':checked'))
    {
        $('.terms-error-message').addClass('hidden');
    }
    else
    {
        $('.terms-error-message').removeClass('hidden');
    }
});
$(document).on('submit', '.create-new-product', function (e) {
    if ($('#checkboxTermsAndCondition').is(':checked'))
    {
        return true;
    }
    else
    {
        e.preventDefault();
        $('.terms-error-message').removeClass('hidden');
        $('html, body').animate({
            scrollTop: $("#linkTerms").offset().top-200
        }, 2000);
        return false;
    }
});
function popupwindow(url, title, w, h)
{
  var left = (screen.width/2)-(w/2);
  var top = (screen.height/2)-(h/2);
  return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
</script>
@append