<div class="col-xs-12 col-sm-4 col-md-3 position-relative z-index-medium">
    <div class="clearfix pull-up-70 hidden-xs">
        @if( $store->files()->first() )
            <a href="{{ $store->files()->first()->url }}" data-lightbox="storepicsm"
               data-title="{{$store->name}} - {{$store->description}}" hidden></a>
        @endif
        <a href="{{ $store->users()->first()->getImage() }}" data-lightbox="storepicsm" data-title="{{$store->name}}"
           class="col-xs-12 xxs-p-5 bg-light card-dp-1 border-radius-md profile-pic">
            <img src="{{ $store->users()->first()->getImage() }}" alt="{{$store->name}}"
                 class="full-width border-radius-sm img-responsive">
        </a>
    </div>
    <div class="clearfix visible-xs xxs-mt-20" style="text-align: center;">
        @if( $store->files()->first() )
            <a href="{{ $store->files()->first()->url }}" data-lightbox="storepicxs"
               data-title="{{$store->name}} - {{$store->description}}" hidden></a>
        @endif
        <a href="{{ $store->users()->first()->getImage() }}" data-lightbox="storepicxs" data-title="{{$store->name}}" class="xxs-p-5 bg-light card-dp-1 border-radius-md profile-pic"  style="display: inline-block;">
            <img src="{{ $store->users()->first()->getImage() }}" alt="{{$store->name}}" class="half-width border-radius-sm img-responsive">
        </a>
    </div>
    <h1 class="xxs-mt-20 xxs-p-0">
        <a href="#" class="text-xs text-primary text-bold font-jfflat">
            {{$store->name}}
        </a>
    </h1>
    <h3 class="xxs-mt-20 xxs-p-0">
        <a href="{{ route('user.profile', $store->users()->first()->username) }}"
           class="text-xs text-primary text-bold font-jfflat">
            {{ $store->users()->first()->username.'@' }}
        </a>
    </h3>
    @if(auth()->user() && $store->user()->first()->id != auth()->user()->id)
    <div class="pull-left xxs-mt-5 xxs-mb-8 xxs-pt-2">
        {!! Form::open(['route'=>'user.add_follow']) !!}
        {!! Form::hidden('following_id', $store->user()->first()->id) !!}
        <button class="btn btn-sm btn-ghost border-radius-sm xxs-mt-5 xxs-pr-15 xxs-pl-15 @if(auth()->user() && count(auth()->user()->follow($store->user()->first()->id)) > 0) btn-dark @else btn-primary @endif"
                type="submit">
            @if(auth()->user() && count(auth()->user()->follow($store->user()->first()->id)) > 0)
                <i class="display-inline-block va-top xxs-mt-2 xxs-pt-1 xxs-pl-5 icon-close"></i> الغاء المتابعة
            @else
                <i class="display-inline-block va-top xxs-mt-2 xxs-pt-1 xxs-pl-5 icon-check"></i> متابعة
            @endif
        </button>
        {!! Form::close() !!}
    </div>
    @endif
    <p class="xxs-mt-20 xxs-p-0">

        @lang('messages.all followers') :
        {{ $allFollowers }}
    </p>


    <p class="xxs-mt-10 font-droidkufi text-sm">{{ $store->description }}</p>
    @if(isset($extra_left))
        @include($extra_left)
    @endif
    @include('users._profile-manage',['user'=>$store->user])
    <div class="hidden-xs">
        @if (isset($top_liked))
            @include('products._lighted-list',['block_title' => Lang::get('products.Top Liked'),'products' => $top_liked])
        @endif
    </div>
    {{-- ToDo offers block --}}
    @include('blocks._golden-membership')
    {!! \App\Models\Advert::getHTML('box') !!}
</div>