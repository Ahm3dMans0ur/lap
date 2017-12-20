<div id="custom-search-input clearfix">
    <form  method="get" class="md-form col-xs-12 col-md-6 col-md-4 pull-left clearfix xs-text-center md-text-left xxs-p-0">
        <div class="display-inline-block va-top input-group">
            <input type="text" name="q" class="form-control input-lg bg-transparent" placeholder="ابحث عن المنتجات ..." @if(isset($query))value="{{$query}}"@endif/>
        </div>
        <div class="display-inline-block va-top input-group xxs-mr-10">
            <button class="btn btn-primary btn-lg" type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
        </div>
    </form>
</div>