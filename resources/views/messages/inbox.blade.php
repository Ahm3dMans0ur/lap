@extends('layouts.frontend')

@section('title')
    {{$page_title}}
@endsection

@section('content')
    <section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container">
          <ol class="breadcrumb pull-left bg-transparent xxs-pt-40 xxs-mt-2">
            <li><a href="{!! route('user.edit') !!}" class="font-jfflat"> @lang('app.Dashboard') </a></li>
            <li class="active"> @lang('messages.inbox') </li>
          </ol>
          <h1 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> {{$page_title}} </h1>
        </div>
    </section>

    <div class="container pull-up-40 position-relative z-index-medium">
        <div class="row">
          <div class="pull-left offers col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
            <div class="bg-light card-dp-3 border-radius-md md-form user-panel-left-pane">
              <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                <div class="pull-left square-sm border-radius-round bg-darkgray text-light text-center line-height-lg xxs-mt-30 xxs-ml-20">
                  <span> {{ $total }} </span>
                </div>
                <span class="pull-left xxs-ml-10 text-sm xxs-p-5 xxs-mt-20 xxs-pt-15 text-darkgray line-height-xs"> @lang('messages.inbox total') </span>
                <div class="pull-right xxs-p-20">
                    <span class="display-inline-block va-top xxs-mt-2 text-gray font-droidkufi text-bold xxs-p-10"> {{$page_title}} </span>
                </div>
              </div>
              <div class="xxs-p-10 offers">
                <div class="offer-card clearfix xxs-mb-0 border-bottom-dotted-midgray-0">
                    <div class="list-group">
                    @if(count($messages) > 0)
                        @foreach($messages as $message)
                        <a href="{!! route('messages.view',($message->message_id)? $message->message_id: $message->id ) !!}" class="clearfix list-group-item {{ $message->read? 'read' : '' }}">
                            <div class="col-xs-12 col-sm-7 col-md-4">
                                {{-- MAKE SURE TO IMPLEMENT PROPER LOCALIZATION FOR THIS (REPLY-TO) STRING --}}
                                <span class="display-inline-block va-top name font-jfflat text-bold">
                                {{ str_replace('reply to: ', 'رد: ', $message->title) }}
                                </span>
                            </div>
                            <div class="col-sm-5 col-md-8">
                                <span class="display-inline-block va-top text-muted hidden-xs hidden-sm">{{ str_limit($message->content,50) }}</span>
                                <span class="display-inline-block va-top badg hidden-xs">{{ $message->created_at }}</span> <span class="pull-right"></span>
                            </div>
                        </a>
                        @endforeach
                    @else
                        <div class="list-group-item">
                            <span class="text-center">@lang('messages.no_messages')</span>
                        </div>
                    @endif
                    </div>
                </div>
                @if(method_exists($messages,'links'))
                <footer class="md-pagination row xxs-pt-20">
                    <div class="col-xs-12">
                    {!! $messages->links() !!}
                    </div>
                </footer>
                @endif
              </div>
            </div>
          </div>
          @include('blocks._user-nav-sidebar', ['selected' => 'messages.inbox'])
        </div>
    </div>
@endsection