@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Subscription
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($subscription, ['route' => ['admin.subscriptions.update', $subscription->id], 'method' => 'patch']) !!}

                        @include('admin.subscriptions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection