<!-- product_id Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('product_id') ? ' has-error' : '' }}">
    <label for="product_id" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> @lang('products.product') </label>
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('product_id')) <p class="help-block">{{ $errors->first('product_id') }}</p> @endif
        {!! Form::select('product_id',(isset($product))?$product:[], null, ['id'=>'product_id','class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>'product_id']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi"> @lang('products.product')</span>
    </div>
    <label for="inputID4" class="col-xs-2 col-sm-1 text-right">
        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
    </label>
</div>


<!-- title Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('title') ? ' has-error' : '' }}">
  <label for="title" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> @lang('messages.title') </label>
  <div class="col-xs-10 col-sm-7">
    @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
    {!! Form::text('title', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','id'=>'title','placeholder'=> ' '.Lang::get('messages.title')]) !!}
    <span class="help-block text-sm line-height-xl font-droidkufi"> @lang('messages.title')</span>
  </div>
  <label for="inputID4" class="col-xs-2 col-sm-1 text-right">
    <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
  </label>
</div>

<!-- description Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('description') ? ' has-error' : '' }}">
    <label for="description" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> @lang('messages.description') </label>
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
        {!! Form::textarea('description', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('messages.description')]) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi"> @lang('messages.description')</span>
    </div>
    <label for="inputID4" class="col-xs-2 col-sm-1 text-right">
        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
    </label>
</div>

<!-- new_price Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('new_price') ? ' has-error' : '' }}">
    <label for="new_price" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> @lang('messages.new_price') </label>
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('new_price')) <p class="help-block">{{ $errors->first('new_price') }}</p> @endif
        {!! Form::number('new_price', null, ['id'=>'new_price','readonly','class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('messages.new_price')]) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi"> @lang('messages.new_price')</span>
    </div>
    <label for="inputID4" class="col-xs-2 col-sm-1 text-right">
        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
    </label>
</div>

<!-- discount Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('discount') ? ' has-error' : '' }}">
    <label for="discount" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> @lang('messages.discount') </label>
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('discount')) <p class="help-block">{{ $errors->first('discount') }}</p> @endif
        {!! Form::number('discount', null, ['id'=>'discount','class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('messages.discount')]) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi"> @lang('messages.discountPercent')</span>
    </div>
    <label for="inputID4" class="col-xs-2 col-sm-1 text-right">
        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
    </label>
</div>

<!-- is_featured Field -->

<div class="form-group clearfix">
    <div class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"></div>
    <div class="checkbox col-xs-12 col-sm-4">
        <label>
            @if(isset($offer) && $offer->is_featured)
                {!! Form::checkbox('is_featured', 'yes',true) !!}
            @else
                {!! Form::checkbox('is_featured', 'yes',false) !!}
            @endif
            <span class="display-inline-block va-top"> @lang('messages.is_featured') </span>

        </label>
    </div>
</div>

<!-- start_date Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('start_date') ? ' has-error' : '' }}">
    <label for="start_date" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> @lang('messages.start_date') </label>
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('start_date')) <p class="help-block">{{ $errors->first('start_date') }}</p> @endif
            <label for="start_date" class="icon-calendar text-lg text-primary position-absolute z-index-medium xxs-pt-2 xxs-pr-5"></label>
            {!! Form::text('start_date', (isset($offer))? null : \Carbon\Carbon::now(), ['id'=>'start_date','class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-40 text-right lang-ltr position-relative z-index-low ','placeholder'=>'yyyy/mm/dd h:i:s']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi"> @lang('messages.start_date')</span>
    </div>
    <label for="inputID4" class="col-xs-2 col-sm-1 text-right">
        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
    </label>
</div>

<!-- end_date Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('end_date') ? ' has-error' : '' }}">
    <label for="end_date" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> @lang('messages.end_date') </label>
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('end_date')) <p class="help-block">{{ $errors->first('end_date') }}</p> @endif
            <label for="end_date" class="icon-calendar text-lg text-primary position-absolute z-index-medium xxs-pt-2 xxs-pr-5"></label>
            {!! Form::text('end_date', (isset($offer))? null : \Carbon\Carbon::now()->addDay(2), ['id'=>'end_date','class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-40 text-right lang-ltr position-relative z-index-low','placeholder'=>'yyyy/mm/dd h:i:s']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi"> @lang('messages.end_date')</span>
    </div>
    <label for="inputID4" class="col-xs-2 col-sm-1 text-right">
        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
    </label>
</div>


<hr class="xxs-mt-80 xxs-mb-40" />
<div class="form-group form-submit xxs-pl-40 xxs-pb-20 text-left">
  {!! Form::submit('Save', ['class' => 'btn btn-primary border-radius-sm xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10']) !!}
  <a href="{!! route('offers.index') !!}" class="btn btn-gray border-radius-sm xxs-p-10 xxs-pr-30 xxs-pl-30">@lang("Cancel")</a>
</div>


@section('scripts')


    <script>
        $("#product_id").select2({
            placeholder: "@lang('products.product')",
            minimumInputLength: 2,
            ajax: {
                url: '{!! route('offers.products.find') !!}',
                dataType: 'json',
                data: function (params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    </script>

    <script>
        function getDiscount(){
            var product_id=$('#product_id').val();
            var discount=$('#discount').val();
            if(product_id)
                $.ajax({
                    url:'{!! route('products.findById') !!}',
                    type:'post',
                    data:{product_id:product_id,_token:$('meta[name="csrf_token"]').attr('content')},
                    success:function(price){
                        var new_price=price*(discount/100);
                        new_price =price - new_price;
                        if(new_price <0)
                            new_price=0;
                        $('#new_price').val(new_price.toFixed(2));
                    }
                });
        }
        $(document).on('keyup','#discount',getDiscount);
        $(document).on('change','#product_id',getDiscount);

        $(document).ready(function(){
            // init date picker
            $('#start_date,#end_date').datetimepicker({
                // todayBtn: false,
                maxDate:'+1970/01/30',
                defaultDate:'+1970/01/06',
                minDate: '+1970/01/02',
                format: 'Y-m-d H:i:s',
                closeOnDateSelect: true
            });
        });
    </script>
@append