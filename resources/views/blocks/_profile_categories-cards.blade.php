<form action="{!! route('user.profile',$user->username) !!}" method="get" class="submitForm md-form xxs-mt-20 xxs-mb-20">

@foreach($list_categories as $mainCategory)
    @if(!count($mainCategory->childs) > 0)
        @continue
    @endif
    @if($user->products()->inCategories(array_column($mainCategory->childs->toArray(),'id'))->count() > 0 || $mainCategory->products()->belongeToUser($user->id)->count() > 0)
    <div class="col-xs-12 bg-light card-dp-1 border-radius-sm xxs-mt-40 xxs-p-0">

            <div class="clearfix border-bottom-solid-lightgray-1 xxs-mb-10 xxs-p-0 position-relative">
                @if($mainCategory->products()->belongeToUser($user->id)->count() > 0 )
                    <span class="xxs-p-10 xxs-mt-10 pull-left">
                          <input class="submitCat" type="checkbox" name="category[]"
                                 @if(in_array($mainCategory['id'],$cats))checked @endif value="{{ $mainCategory['id'] }}">
                    </span>
                @endif

                <h6 class="text-bold font-droidkufi xxs-pr-20 xxs-p-10 text-darkgray"> {{$mainCategory['name']}} </h6>
            </div>

            @if($mainCategory['childs'])
                @foreach($mainCategory['childs'] as $chiled_category)
                    @if($chiled_category->products()->belongeToUser($user->id)->count() > 0 )
                        <div class="form-group">
                            <div class="checkbox">
                                <label class="display-block clearfix">
                        <span class="pull-left xxs-pl-10">
                          <input class="submitCat" type="checkbox" name="category[]"
                                 @if(in_array($chiled_category['id'],$cats))checked @endif
                                 value="{{ $chiled_category['id'] }}">
                        </span>
                                    @if($chiled_category->products)<span
                                            class="square-sm pull-right text-light bg-gray xxs-mr-18 xxs-mt-2 border-radius-round text-sm text-center line-height-lg"> {{$chiled_category->products()->belongeToUser($user->id)->count()}} </span>@endif
                                    <span class="pull-right xxs-mr-10 text-gray">{{$chiled_category['name']}} </span>
                                </label>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif


    </div>
        @endif
@endforeach
</form>

@section('scripts')
    <script>
        $(document).on('click', '.submitCat', function () {
            $(this).parents('.submitForm').submit();
        });
    </script>
@append