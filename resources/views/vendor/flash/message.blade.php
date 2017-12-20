@if (session()->has('flash_notification.message'))
    @if (session()->has('flash_notification.overlay'))
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => session('flash_notification.title'),
            'body'       => session('flash_notification.message')
        ])
    @else
        @include('flash::_message',[
            'class' => session('flash_notification.level'),
            'extra_class' => (session()->has('flash_notification.important') ? 'alert-important' : ''),
            'message' => session('flash_notification.message')
        ])
    @endif
@endif

@if(session()->has('status'))
@include('flash::_message',[
  'class' => 'success',
  'message' => session('status')
])
@endif