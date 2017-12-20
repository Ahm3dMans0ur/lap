<form class="md-form" action="{!! route('search') !!}" method="get" accept-charset="utf-8">
    <div class="offers-box xxs-mt-40 bg-light border-radius-md card-dp-2 clearfix">
        <div class="offer-card border-radius-sm col-xs-12">
            <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                <h5 class="pull-right text-darkgray xxs-p-30 xxs-pl-0 xxs-pr-10 xxs-m-0 border-bottom-solid-midgray-1">
                    <i class="display-inline-block va-top icon icon-user-following xxs-ml-10"></i>
                    <span> بحث عن الاعضاء والمتاجر </span>
                </h5>
            </div>

            <div class="form-group xxs-pt-20 clearfix">
                <input class="form-control input-lg xxs-pr-0 xxs-pl-30" name="q"
                       value="@if(isset($q)){{ $q }}@endif"
                       placeholder="@lang('products.searchKeyword')"/>
            </div>


            <div class="form-group xxs-pt-20 clearfix">
                <label for="store"
                       class="col-xs-12 col-sm-8 xxs-mb-20"> متجر </label>
                <div class="col-xs-10 col-sm-4">
                    @if($type)
                        <input type="radio" name="type" value="store" id="store" {{ $type=='store'? 'checked':'' }}>
                   @else
                        <input type="radio" name="type" value="store" id="store" checked>
                   @endif
                </div>
            </div>
            <div class="form-group xxs-pt-0 clearfix">
                <label for="user"
                       class="col-xs-12 col-sm-8 xxs-mb-20"> عضو </label>
                <div class="col-xs-10 col-sm-4">
                    <input type="radio" name="type" value="user" id="user" {{ $type=='user'? 'checked':'' }}>
                </div>
            </div>


            <input class="btn btn-primary border-radius-xs xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-mb-10"
                   type="submit" name="search" value="بحث">
        </div>
    </div>
</form>