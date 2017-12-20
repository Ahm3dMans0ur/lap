@extends('layouts.landing')
@section('title')
    @lang('app.Registration')
@endsection
@section('landing.main_header_class')
 half-window-height
@endsection
@section('landing.nav_class')
 nav-compact nav-persist
@endsection

@section('landing.footer')
  @include('layouts._simple-footer')
@endsection

@section('landing.abovethefold.title_raw')
  <h1 class="xxs-mt-20"><strong class="text-sm"> @lang('app.Registration') </strong></h1>
@endsection

@section('content')

<section class="position-relative z-index-low text-center pull-up-180 xxs-mb-40" hidden>
  <div class="container">
    <div class="col-xs-12 col-sm-8 col-sm-pull-2 col-md-6 col-md-pull-3">
      <div class="pull-up-80 border-radius-lg position-relative xxs-p-30 md-pb-20 overflow-hidden">
        <ul class="list-reset inline-blocks position-relative z-index-high">
          <li class="form-step current">
            <a href="#">
              <div class="step-num border-radius-round">
                <span> 1 </span>
              </div>
              <div class="step-title"> تسجيل بياناتك </div>
            </a>
          </li>
          <li class="form-step">
            <a>
              <div class="step-num text-gray border-radius-round border-color-transparent bct-important">
                <span> 2 </span>
              </div>
              <div class="step-title text-darkgray"> تفعيل الحساب </div>
            </a>
          </li>
        </ul>
        <div class="z-index-low position-absolute x-left y-top full-width full-height bg-light opacity-5">
      </div>
    </div>
  </div>
</section>

<div class="container pull-up-80 position-relative z-index-medium">
  <div class="row">
    <div class="col-xs-12 col-md-10 col-md-pull-1 bg-light card-dp-5 border-radius-sm">
      <div class="text-center clearfix xxs-pt-40 xxs-pl-20 xxs-pr-20">
        <ul class="list-reset inline-blocks position-relative z-index-high">
          <li class="form-step current">
            <a>
              <div class="step-num border-radius-round">
                <span> 1 </span>
              </div>
              <div class="step-title"> تسجيل بياناتك </div>
            </a>
          </li>
          <li class="form-step">
            <a>
              <div class="step-num text-gray border-radius-round">
                <span> 2 </span>
              </div>
              <div class="step-title text-darkgray"> تفعيل الحساب </div>
            </a>
          </li>
        </ul>
      </div>
      <hr class="row">

      @include('flash::message')

      <form class="md-form row xxs-pt-20" action="{{ url('/register') }}" method="post">
        {!! csrf_field() !!}

        <div class="form-group xxs-pt-5 xxs-mb-10 clearfix {{ $errors->has('group_id') ? ' has-error' : '' }} {{ !$errors->has('group_id') && old('group_id') ? ' has-success' : '' }}">
        {!! Form::label('group_id', 'المجموعة',['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
          <div class="col-xs-9 col-sm-6">
            @if ($errors->has('group_id')) <p class="help-block">{{ $errors->first('group_id') }}</p> @endif
            {!! Form::select('group_id', $groupsDescription, old('group_id') , ['class' => 'form-control xxs-p-0 input-lg text-lg', 'autofocus'=>'true']) !!}
                        {{-- {!! Form::select('group_id', $groups->prepend([['label' => 'Please Select', 'disabled' => true]]), old('group_id') , ['class' => 'form-control text-right lang-ltr']) !!} --}}

            <span class="help-block text-sm line-height-xl font-droidkufi"> تعلم المزيد عن <a href="{{route('memberships')}}" target="_blank" class="btn btn-xs btn-dark btn-link full-underline xxs-p-0 text-md"> العضويات </a> لتتعرف على مزايا كل مجموعة. </span>

          </div>
          <label for="group_id" class="col-xs-3 col-sm-2 text-right">
            @if(old('group_id'))
            <i class="validation-icon display-inline-block va-top xxs-mt-10 text-lg icon {{ !$errors->has('group_id') ? 'icon-check' : 'icon-close' }}"></i>
            @endif
          </label>
        </div>


        <div class="form-group xxs-pt-5 xxs-mb-10 clearfix{{ $errors->has('name') ? ' has-error' : '' }} {{ !$errors->has('name') && old('name') ? ' has-success' : '' }}">
          <label for="name" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> الاسم الشخصي </label>
          <div class="col-xs-9 col-sm-6">
            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
            <input type="text" id="name" class="form-control font-droidkufi xxs-pt-10 xxs-pb-15 xxs-pr-0" placeholder="ادخل الاسم بالكامل" name="name" value="{{ old('name') }}">
            <span class="help-block text-sm line-height-xl font-droidkufi"> رجاء ادخال الاسم الفعلى كما هو فى بطاقة الهوية. </span>

          </div>
          <label for="name" class="col-xs-3 col-sm-2 text-right">
            @if(old('name'))
            <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ (!$errors->has('name') ? 'icon-check' : 'icon-cross' ) }}"></i>
            @endif
          </label>
        </div>

        <div class="form-group xxs-pt-5 xxs-mb-10 clearfix{{ $errors->has('username') ? ' has-error' : '' }} {{ !$errors->has('username') && old('username') ? ' has-success' : '' }}">
          <label for="username" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> اسم المستخدم </label>
          <div class="col-xs-9 col-sm-6">
            @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
            <i class="icon-user text-lg text-primary position-absolute z-index-medium xxs-pt-10 xxs-pr-5"></i>
            <input type="text" id="username" class="form-control font-droidkufi xxs-pt-10 xxs-pb-15 xxs-pr-40 position-relative z-index-low" placeholder="ادخل اسم المستخدم" name="username" value="{{ old('username') }}">
            <span class="help-block text-sm line-height-xl font-droidkufi">يجب ان يكون الاسم مكون من احرف انجليزية او ارقاوم بدون مسافات و يكمن ان يحتوى على بعض الرموز.</span>
          </div>
          <label for="username" class="col-xs-3 col-sm-2 text-right">
            @if(old('username'))
            <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ !$errors->has('username') ? 'icon-check' : 'icon-close' }}"></i>
            @endif
          </label>
        </div>

        <div class="form-group xxs-pt-5 xxs-mb-10 clearfix{{ $errors->has('password') ? ' has-error' : '' }} {{ !$errors->has('password') && old('password') ? ' has-success' : '' }}">
          <label for="password" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> كلمة المرور </label>
          <div class="col-xs-9 col-sm-6">
            @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
            <input type="password" id="password" class="form-control font-droidkufi xxs-pt-10 xxs-pb-15 xxs-pr-0" placeholder="كلمة المرور" name="password" value="{{ old('password') }}">
            <span class="help-block text-sm line-height-xl font-droidkufi"> يجب الا تقل كلمة المرور عن 8 احرف و الا تزيد عن 63 حرف.</span>
          </div>
          <label for="password" class="col-xs-3 col-sm-2 text-right">
            @if(old('password'))
            <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ !$errors->has('password') ? 'icon-check' : 'icon-close' }}"></i>
            @endif
          </label>
        </div>

        <div class="form-group xxs-pt-5 xxs-mb-10 clearfix{{ $errors->has('password_confirmation') ? ' has-error' : '' }} {{ !$errors->has('password_confirmation') && old('password_confirmation') ? ' has-success' : '' }}">
          <label for="password_confirmation" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> تأكيد كلمة المرور </label>
          <div class="col-xs-9 col-sm-6">
            @if ($errors->has('password_confirmation')) <p class="help-block">{{ $errors->first('password_confirmation') }}</p> @endif
            <input type="password" id="password_confirmation" class="form-control font-droidkufi xxs-pt-10 xxs-pb-15 xxs-pr-0" placeholder="تأكيد كلمة المرور" name="password_confirmation" value="{{ old('password_confirmation') }}">
            <span class="help-block text-sm line-height-xl font-droidkufi"> يجب ان تتطابق مع كلمة المرور للتأكيد. </span>
          </div>
          <label for="password_confirmation" class="col-xs-3 col-sm-2 text-right">
            @if(old('password_confirmation'))
            <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ !$errors->has('password') && !$errors->has('password_confirmation') ? 'icon-check' : 'icon-close' }}"></i>
            @endif
          </label>
        </div>

        <div class="form-group xxs-pt-5 xxs-mb-10 clearfix{{ $errors->has('email') ? ' has-error' : '' }} {{ !$errors->has('email') && old('email') ? ' has-success' : '' }}">
          <label for="email" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> البريد الالكترونى </label>
          <div class="col-xs-9 col-sm-6">
            @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
            <input type="email" id="email" class="form-control font-droidkufi xxs-pt-10 xxs-pb-15 xxs-pr-0 text-right lang-ltr" placeholder="email@example.com" name="email" value="{{ old('email') }}">
            <span class="help-block text-sm line-height-xl font-droidkufi">
              يجب ان تقوم باستخدام بريد الكترونى صحيح من اجل التسجيل, سيتم ارسال رسالة تأكيد التسجيل.
            </span>
          </div>
          <label for="email" class="col-xs-3 col-sm-2 text-right">
            @if(old('email'))
            <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ !$errors->has('email') ? 'icon-check' : 'icon-close' }}"></i>
            @endif
          </label>
        </div>

        <div class="form-group xxs-pt-5 xxs-mb-10 clearfix{{ $errors->has('phone') ? ' has-error' : '' }} {{ !$errors->has('phone') && old('phone') ? ' has-success' : '' }}">
          <label for="phone" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> رقم الهاتف </label>
          <div class="col-xs-9 col-sm-6">
            @if ($errors->has('phone')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif
            <input type="text" id="phone" class="form-control font-droidkufi xxs-pt-10 xxs-pb-15 xxs-pr-0 text-right lang-ltr" placeholder="+9661000000000" name="phone" value="{{ old('phone') }}">
          </div>
          <label for="phone" class="col-xs-3 col-sm-2 text-right">
            @if(old('phone'))
            <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ !$errors->has('phone') ? 'icon-check' : 'icon-close' }}"></i>
            @endif
          </label>
        </div>

        <div class="form-group xxs-pt-5 xxs-mb-10 clearfix{{ $errors->has('address') ? ' has-error' : '' }} {{ !$errors->has('address') && old('address') ? ' has-success' : '' }}">
          <label for="address" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> العنوان </label>
          <div class="col-xs-9 col-sm-6">
            @if ($errors->has('address')) <p class="help-block">{{ $errors->first('address') }}</p> @endif
            <input type="text" id="address" class="form-control font-droidkufi xxs-pt-10 xxs-pb-15 xxs-pr-0" placeholder="ادخل العنوان بالكامل" name="address" value="{{ old('address') }}">
            <span class="help-block text-sm line-height-xl font-droidkufi"> رجاء ادخال العنوان الحالى. </span>

          </div>
          <label for="address" class="col-xs-3 col-sm-2 text-right">
            @if(old('address'))
              <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ (!$errors->has('address') ? 'icon-check' : 'icon-cross' ) }}"></i>
            @endif
          </label>
        </div>

        <div class="form-group xxs-pt-5 xxs-mb-10 clearfix{{ $errors->has('bank_accounts') ? ' has-error' : '' }} {{ !$errors->has('bank_accounts') && old('bank_accounts') ? ' has-success' : '' }}">
          <label for="bank_accounts" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> حسابات بنكية </label>
          <div class="col-xs-9 col-sm-6">
            @if ($errors->has('bank_accounts')) <p class="help-block">{{ $errors->first('bank_accounts') }}</p> @endif
            <input type="text" id="bank_accounts" class="form-control font-droidkufi xxs-pt-10 xxs-pb-15 xxs-pr-0" placeholder="الحسابات البنكية" name="bank_accounts" value="{{ old('bank_accounts') }}">
            <span class="help-block text-sm line-height-xl font-droidkufi"> رجاء ادخال الحسابات البنكية. </span>

          </div>
          <label for="bank_accounts" class="col-xs-3 col-sm-2 text-right">
            @if(old('bank_accounts'))
              <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ (!$errors->has('bank_accounts') ? 'icon-check' : 'icon-cross' ) }}"></i>
            @endif
          </label>
        </div>

        <div class="form-group xxs-pt-5 xxs-mb-10 clearfix{{ $errors->has('referee') ? ' has-error' : '' }} {{ !$errors->has('referee') && old('referee') ? ' has-success' : '' }}">
          <label for="referee" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> الإحالة </label>
          <div class="col-xs-9 col-sm-6">
            @if ($errors->has('referee')) <p class="help-block">{{ $errors->first('referee') }}</p> @endif
            <input type="text" id="referee" class="form-control font-droidkufi xxs-pt-10 xxs-pb-15 xxs-pr-0" placeholder="الإحالة" name="referee" value="{{ old('referee') }}">
            <span class="help-block text-sm line-height-xl font-droidkufi"> ان كنت قد سجلت من خلال صديق او موزع رجاء ذكر اسمه. </span>

          </div>
          <label for="referee" class="col-xs-3 col-sm-2 text-right">
            @if(old('referee'))
              <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ (!$errors->has('referee') ? 'icon-check' : 'icon-cross' ) }}"></i>
            @endif
          </label>
        </div>

{{--         <div class="form-group xxs-pt-5 xxs-mb-10 clearfix{{ $errors->has('requested_membership') ? ' has-error' : '' }} {{ !$errors->has('requested_membership') && old('requested_membership') ? ' has-success' : '' }}">
          <label for="requested_membership" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> نوع العضوية </label>
          <div class="col-xs-9 col-sm-6">
            @if ($errors->has('requested_membership')) <p class="help-block">{{ $errors->first('requested_membership') }}</p> @endif
            <select name="requested_membership" class="form-control font-droidkufi xxs-pt-10 xxs-pb-15 xxs-pr-0 text-right lang-ltr" aria-required="true" aria-invalid="false">
              <option value="">---</option>
              <option value="ذهبية- السعر 200 ريال">ذهبية- السعر 200 ريال</option>
              <option value="فضية- السعر 100 ريال">فضية- السعر 100 ريال</option>
              <option value="برونزية- السعر 50 ريال">برونزية- السعر 50 ريال</option>
              <option value="أفراد - مجانا">أفراد - مجانا</option>
            </select>
            <span class="help-block text-sm line-height-xl font-droidkufi"> رجاء ادخال الاسم الفعلى كما هو فى بطاقة الهوية. </span>
          </div>
          <label for="requested_membership" class="col-xs-3 col-sm-2 text-right">
            @if(old('requested_membership'))
            <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ !$errors->has('requested_membership') ? 'icon-check' : 'icon-close' }}"></i>
            @endif
          </label>
        </div> --}}
        <hr class="xxs-mt-80 xxs-mb-40" />
        <div class="form-group form-submit xxs-pl-40 xxs-pb-20 text-left">
          <button class="btn btn-primary border-radius-sm xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10" type="submit"> تسجيل </button>
          <button class="btn btn-gray border-radius-sm xxs-p-10 xxs-pr-30 xxs-pl-30" type="reset"> الغاء </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection