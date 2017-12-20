@extends('admin.layouts.app')

@section('content')

    @include('flash::message')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Mailbox
            @if($unread_num > 0)
                <small>{{ $unread_num }} new messages</small>
            @endif
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

            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Inbox</h3>

                        <div class="box-tools pull-right">
                            <div class="has-feedback">
                                <input type="text" class="form-control input-sm" placeholder="Search Mail">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    {!! Form::open(['method'=>'delete','url'=>route('admin.contact.delete')]) !!}
                    <div class="box-body no-padding">
                        <div class="mailbox-controls">
                            <!-- Check all button -->
                            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                        class="selectAll fa fa-square-o"></i>
                            </button>
                            <div class="btn-group">
                                <button type="submit" onclick="return confirm('Do you really want to delete?');"
                                        class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i>
                                </button>
                            </div>
                            <!-- /.btn-group -->
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                            <div class="pull-right">
                                {{ (($messages->currentPage()-1)*$messages->perPage())+1 }}
                                -
                                {{ ( ($messages->currentPage()*$messages->perPage()) > $messages->total() )?   $messages->total() : $messages->currentPage()*$messages->perPage() }}
                                /{{ $messages->total() }}
                                <div class="btn-group">
                                    <a href="{{ $messages->previousPageUrl() }}" class="btn btn-default btn-sm"><i
                                                class="fa fa-chevron-left"></i></a>
                                    <a href="{{ $messages->nextPageUrl() }}" class="btn btn-default btn-sm"><i
                                                class="fa fa-chevron-right"></i></a>
                                </div>
                                <!-- /.btn-group -->
                            </div>
                            <!-- /.pull-right -->
                        </div>
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover table-striped">
                                <tbody>
                                @if(count($messages) > 0)
                                    @foreach($messages as $message)
                                        <tr>
                                            <td><input type="checkbox" name="msgs[]" value="{{ $message->id }}"></td>
                                            <td class="mailbox-star"><a href="#"><i
                                                            class="{{ $message->read? 'fa fa-star' : 'fa fa-star-o' }} text-yellow"></i></a>
                                            </td>
                                            <td class="mailbox-name"><a
                                                        href="{!! route('admin.contact.read',$message->id) !!}">{{ $message->get_sender() }}</a>
                                            </td>
                                            <td class="mailbox-subject"><b>{{ $message->title }}</b>
                                                - {{ str_limit($message->message,50) }}
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">{{ $message->created_at }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    @lang('messages.no_messages')
                                @endif


                                </tbody>
                            </table>
                            <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
                    </div>

                {!! Form::close() !!}

                <!-- /.box-body -->
                    <div class="box-footer no-padding">
                        <div class="mailbox-controls">
                            <!-- Check all button -->
                            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                        class="selectAll fa fa-square-o"></i>
                            </button>
                            <div class="btn-group">
                                <button type="submit" onclick="return confirm('Do you really want to delete?');"
                                        class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i>
                                </button>
                            </div>
                            <!-- /.btn-group -->
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                            <div class="pull-right">
                                {{ (($messages->currentPage()-1)*$messages->perPage())+1 }}
                                -
                                {{ ( ($messages->currentPage()*$messages->perPage()) > $messages->total() )?   $messages->total() : $messages->currentPage()*$messages->perPage() }}
                                /{{ $messages->total() }}
                                <div class="btn-group">
                                    <a href="{{ $messages->previousPageUrl() }}" class="btn btn-default btn-sm"><i
                                                class="fa fa-chevron-left"></i></a>
                                    <a href="{{ $messages->nextPageUrl() }}" class="btn btn-default btn-sm"><i
                                                class="fa fa-chevron-right"></i></a>
                                </div>
                                <!-- /.btn-group -->
                            </div>
                            <!-- /.pull-right -->
                        </div>
                    </div>
                </div>
                <!-- /. box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->


@endsection

@section('scripts')

    <script>
        $(document).on('click', '.selectAll', function (e) {
            e.preventDefault();
            $("input[type='checkbox']").attr('checked', 'checked');
        });
    </script>

@endsection