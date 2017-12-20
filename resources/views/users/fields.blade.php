{{--<div class="form-group xxs-pl-20 xxs-pr-20 md-pl-0 md-pr-0 xxs-pt-40 clearfix{{ $errors->has('group_id') ? ' has-error' : '' }}">--}}
    {{--{!! Form::label('group_id', 'المجموعة :',['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}--}}
    {{--<div class="col-xs-12 col-sm-7">--}}
        {{--@if ($errors->has('group_id')) <p class="help-block">{{ $errors->first('group_id') }}</p> @endif--}}
        {{--{!! Form::select('group_id', $groups, old('group_id') , ['class' => 'form-control text-right lang-ltr']) !!}--}}
        {{--<span class="help-block text-sm line-height-xl font-droidkufi"> رجاء اختيار نوع الحساب و للتمع بمزايا مل مجموعة </span>--}}

    {{--</div>--}}
    {{--<label for="group_id" class="col-xs-3 col-sm-2 text-right">--}}
        {{--<i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>--}}
    {{--</label>--}}
{{--</div>--}}


<div class="form-group xxs-pl-20 xxs-pr-20 md-pl-0 md-pr-0 xxs-pt-40 clearfix{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> الاسم الشخصي </label>
    <div class="col-xs-12 col-sm-7">
        @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
        {!! Form::text('name',null,['id'=>'name', 'placeholder'=>'ادخل الاسم بالكامل', 'class'=>'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi"> رجاء ادخال الاسم الفعلى كما هو فى بطاقة الهوية. </span>
    </div>
</div>

<div class="form-group xxs-pl-20 xxs-pr-20 md-pl-0 md-pr-0 xxs-pt-40 clearfix{{ $errors->has('username') ? ' has-error' : '' }}">
    <label for="username" class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> اسم المستخدم </label>
    <div class="col-xs-12 col-sm-7">
        @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
        <i class="icon-user text-lg text-primary position-absolute z-index-medium xxs-pt-2 xxs-pr-5"></i>
        {!! Form::text('username',null,['id'=>'username', 'placeholder'=>'ادخل اسم المستخدم', 'class'=>'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-40 position-relative z-index-low']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi"> يجب ان يكون الاسم مكون من احرف انجليزية بدون مسافات كما يمكن ان يحتوى على ارقام او بعض الرموز. </span>
    </div>
    <label for="username" class="col-xs-3 col-sm-2 text-right">
        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
    </label>
</div>

<div class="form-group xxs-pl-20 xxs-pr-20 md-pl-0 md-pr-0 xxs-pt-40 clearfix{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> البريد الالكترونى </label>
    <div class="col-xs-12 col-sm-7">
        @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
        {!! Form::email('email',null,['id'=>'email', 'placeholder'=>'email@example.com', 'class'=>'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi">
              يجب ان تقوم باستخدام بريد الكترونى صحيح من اجل التسجيل, سيتم ارسال رسالة تأكيد التسجيل.
            </span>
    </div>
</div>

<div class="form-group xxs-pl-20 xxs-pr-20 md-pl-0 md-pr-0 xxs-pt-40 clearfix{{ $errors->has('address') ? ' has-error' : '' }}">
    <label for="address" class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> العنوان </label>
    <div class="col-xs-12 col-sm-7">
        @if ($errors->has('address')) <p class="help-block">{{ $errors->first('address') }}</p> @endif
        {!! Form::text('address',null,['id'=>'address', 'placeholder'=>'ادخل العنوان بالكامل', 'class'=>'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi"> رجاء ادخال العنوان الحالى . </span>
    </div>
</div>

<div class="form-group xxs-pl-20 xxs-pr-20 md-pl-0 md-pr-0 xxs-pt-40 clearfix{{ $errors->has('bank_accounts') ? ' has-error' : '' }}">
    <label for="bank_accounts" class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> حسابات بنكية </label>
    <div class="col-xs-12 col-sm-7">
        @if ($errors->has('bank_accounts')) <p class="help-block">{{ $errors->first('bank_accounts') }}</p> @endif
        {!! Form::text('bank_accounts',null,['id'=>'bank_accounts', 'placeholder'=>'الحسابات البنكية', 'class'=>'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi">  رجاء ادخال الحسابات البنكية. </span>
    </div>
</div>

<div class="form-group xxs-pl-20 xxs-pr-20 md-pl-0 md-pr-0 xxs-pt-40 clearfix{{ $errors->has('phone') ? ' has-error' : '' }}">
    <label for="phone" class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> رقم الهاتف </label>
    <div class="col-xs-12 col-sm-7">
        @if ($errors->has('phone')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif
        {!! Form::text('phone',null,['id'=>'phone', 'placeholder'=>'+9661000000000', 'class'=>'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr']) !!}
    </div>
</div>


<div class="clearfix">
    <hr class="xxs-mt-60 xxs-mb-20">
</div>


<div class="form-group xxs-pl-20 xxs-pr-20 md-pl-0 md-pr-0 xxs-pt-40 clearfix{{ $errors->has('avatar') ? ' has-error' : '' }}">
    <label for="avatar" class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20">الصورة الشخصية </label>
    <div class="col-xs-12 col-sm-7">
        {!! Form::mdfile('avatar', ['id'=>'avatar', 'class'=>'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr']) !!}
        @if ($errors->has('avatar')) <p class="help-block">{{ $errors->first('avatar') }}</p> @endif
        @if(auth()->user()->files()->count() > 0)
            <img src="{{ auth()->user()->files()->first()->url }}" width="200px">
        @endif
    </div>
</div>


<div class="clearfix">
    <hr class="xxs-mt-60 xxs-mb-20">
</div>


<div class="form-group xxs-pl-20 xxs-pr-20 md-pl-0 md-pr-0 xxs-pt-40 clearfix{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> كلمة المرور </label>
    <div class="col-xs-12 col-sm-7">
        @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
        <input type="password" id="password" class="form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0" placeholder="كلمة المرور الحالية" name="password" value="{{ old('password') }}">
        <!-- <span class="help-block text-sm line-height-xl font-droidkufi"> . </span> -->
    </div>
</div>

<div class="form-group xxs-pl-20 xxs-pr-20 md-pl-0 md-pr-0 xxs-pt-40 clearfix{{ $errors->has('password_new') ? ' has-error' : '' }}">
    <label for="password_new" class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20 text-primary"> كلمة المرور  الجديدة</label>
    <div class="col-xs-12 col-sm-7">
        @if ($errors->has('password_new')) <p class="help-block">{{ $errors->first('password_new') }}</p> @endif
        <input type="password" id="password_new" class="form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0" placeholder="كلمة المرور" name="password_new" value="{{ old('password_new') }}">
        <span class="help-block text-sm line-height-xl font-droidkufi"> يجب الا تقل كلمة المرور عن 8 احرف و الا تزيد عن 63 حرف. يمكن لكلمة المرور ان تحتوى على احرف او ارقام او رموز. </span>
    </div>
</div>

<div class="form-group xxs-pl-20 xxs-pr-20 md-pl-0 md-pr-0 xxs-pt-40 clearfix{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <label for="password_confirmation" class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20 text-primary"> تأكيد كلمة المرور </label>
    <div class="col-xs-12 col-sm-7">
        @if ($errors->has('password_confirmation')) <p class="help-block">{{ $errors->first('password_confirmation') }}</p> @endif
        <input type="password" id="password_confirmation" class="form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0" placeholder="تأكيد كلمة المرور" name="password_confirmation" value="{{ old('password_confirmation') }}">
        <span class="help-block text-sm line-height-xl font-droidkufi"> يجب ان تتطابق مع كلمة المرور الجديدة للتأكيد. </span>
    </div>
</div>

<div class="clearfix">
  <hr class="xxs-mt-80 xxs-mb-40" />
</div>

<div class="form-group form-submit xxs-pl-20 xxs-pr-20 xxs-pl-40 xxs-pb-40 text-left">
    {!! Form::submit( Lang::get('app.Send'), ['class' => 'btn btn-primary border-radius-xs xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10']) !!}
    {!! Form::reset( Lang::get('messages.cancel'), ['class' => 'btn btn-gray btn-ghost border-radius-xs xxs-p-10 xxs-pr-30 xxs-pl-30']) !!}
</div>