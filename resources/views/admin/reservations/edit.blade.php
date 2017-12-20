@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Reservation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reservation, ['route' => ['admin.reservations.update', $reservation->id], 'method' => 'patch']) !!}

                        @include('admin.reservations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection