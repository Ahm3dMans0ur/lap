@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Followers
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.followers.store']) !!}

                        @include('admin.followers.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
