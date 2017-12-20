@extends('admin.layouts.app')

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Read Mail
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Mailbox</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">

            @include('admin.contact.sidebar')
            <!-- /. box -->
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Read Mail</h3>

                        <div class="box-tools pull-right">
                            <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i
                                        class="fa fa-chevron-left"></i></a>
                            <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i
                                        class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="mailbox-read-info">
                            <h3>{{ $message->title }}</h3>
                            <h5>From: @if($message->get_sender() == 'guest')
                                    {{ $message->email }}
                                @else
                                    {{ $message->sender()->first() ->email }}
                                @endif
                                <span class="mailbox-read-time pull-right">{{ $message->created_at }}</span></h5>
                        </div>
                        <!-- /.mailbox-read-info -->
                        <div class="mailbox-controls with-border text-center">
                            <div class="btn-group">
                                {!! Form::open(['method'=>'delete','url'=>route('admin.contact.delete')]) !!}
                                <input type="hidden" name="msgs[]" value="{{ $message->id }}">
                                <button type="submit" onclick="return confirm('Do you really want to delete?')" class="btn btn-default btn-sm" data-toggle="tooltip"
                                        data-container="body" title="Delete">
                                    <i class="fa fa-trash-o"></i></button>
                                {!! Form::close() !!}

                            </div>

                        </div>
                        <!-- /.mailbox-controls -->
                        <div class="mailbox-read-message">
                            {{ $message->message }}
                        </div>
                        <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.box-body -->

                    <!-- /.box-footer -->
                    <div class="box-footer">
                        {!! Form::open(['method'=>'delete','url'=>route('admin.contact.delete')]) !!}
                        <input type="hidden" name="msgs[]" value="{{ $message->id }}">
                        <button type="submit" onclick="return confirm('Do you really want to delete?')" class="btn btn-default">
                            <i class="fa fa-trash-o"></i> Delete</button>
                        {!! Form::close() !!}
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /. box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection