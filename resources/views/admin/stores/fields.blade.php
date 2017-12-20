<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>


<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', Lang::get('products.Category'),['class' => '']) !!}
    {!! Form::select('category_id', \App\Repositories\CategoriesRepository::getNestedCategories(),null,['class' => 'form-control']) !!}

</div>

@include('blocks.__geo_admin',['field' => $stores])


<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['active' => 'Active', 'review' => 'Review', 'rejected' => 'Rejected', 'suspended' => 'Suspended'], null, ['class' => 'form-control']) !!}
</div>

<!--user Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_status', 'User Status:') !!}
    {!! Form::select('user_status', ['active' => 'Active','suspended' => 'Suspended','view_only' => 'View only'], null, ['class' => 'form-control']) !!}
</div>

<!--user  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user', 'User:') !!}
    {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
</div>

<!--logo  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    {!! Form::mdfile('logo',['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr']) !!}
    @if(isset($stores) && $stores->files()->count() > 0)
        <img src="{{ $stores->files()->first()->url }}" width="250px">
    @endif
</div>

@if($stores->deleted_at != '')
<!-- deleted Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deleted_at', 'تاريخ الحذف:') !!}
    <p>قم بأفراغ التاريخ لاسترجاع المتجر</p>
    {!! Form::text('deleted_at', null, ['class' => 'form-control']) !!}
</div>
@endif


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.stores.index') !!}" class="btn btn-default">Cancel</a>
</div>

@section('scripts')
    <script src="{!! asset('/frontend/scripts/products/geo.js') !!}"></script>
@append