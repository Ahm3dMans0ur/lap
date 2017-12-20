@php if (!$follower) return; @endphp
<div class="offer-card border-radius-sm col-xs-12 col-sm-6 col-md-4">
    <div class="card-img">
        <a href="{!! route('user.profile',$follower->username) !!}">
            <img src="{{ $follower->getImage() }}" alt="{{ $follower->name }}" class="img-responsive">
        </a>
    </div>
    <div class="card-meta">
        <a href="{!! route('user.profile',$follower->username) !!}" class="card-title btn btn-sm btn-primary btn-link"> {{ $follower->name }} </a>

    </div>
</div>