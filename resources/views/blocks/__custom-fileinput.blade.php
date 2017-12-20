<div data-init="mdfile" class="clearfix xxs-mb-20 xxs-p-0 md-p-0">
	<label for="{{md5($name)}}" class="position-relative z-index-high pull-right xxs-mt-10 square-lg transition bg-gray bg-hover-darkgray text-light border-radius-round cursor-pointer card-dp-2">
		<i class="display-block line-height-lg full-width text-center material-icons">file_upload</i>
	</label>
	<div class="position-relative z-index-low xxs-pr-60 clearfix">
		<div class="col-xs-12 col-sm-8 col-md-9 xxs-pr-0 xxs-pb-10">
			{!! Form::file($name, array_merge($attributes, ['id' => md5($name)])) !!}
		</div>
		<div class="col-xs-12 col-sm-4 col-md-3 xxs-pl-0 text-left">
			<div class="position-relative display-inline-block va-top square-xxl bg-lightgray border-radius-sm card-dp-1 overflow-hidden">
				<img data-mdfileimg="" class="position-relative z-index-low img-responsive display-block margin-auto full-width border-radius-sm square-xxl">
				<div class="position-absolute full-width full-height x-left y-top z-index-high cursor-default">
					@if( isset($attributes['multiple']) )
					<div class="absolute-center square-md border-radius-round bg-light text-dark text-center card-dp-4">
						<strong data-mdfilecount="" class="display-block xxs-mt-2 xxs-pt-2 text-lg">0</strong>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
