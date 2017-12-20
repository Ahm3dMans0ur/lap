@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Notification
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($notification, ['route' => ['admin.notifications.update', $notification->id], 'method' => 'patch']) !!}

                        @include('admin.notifications.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection