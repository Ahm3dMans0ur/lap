@extends('layouts.frontend')

@section('title')
    @lang('messages.offers control')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <h2>
                    <a href="{{ route('offers.create') }}" class="btn btn-primary btn-lg"> @lang('messages.create offer')</a>
                </h2>
                @if(count($offers) > 0)
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>@lang('products.product')</th>
                            <th>@lang('messages.title')</th>
                            <th>@lang('messages.new_price')</th>
                            <th>@lang('messages.discount')</th>
                            <th>@lang('stores.status')</th>
                            <th>@lang('messages.is_featured')</th>
                            <th>@lang('messages.start_date')</th>
                            <th>@lang('messages.end_date')</th>
                            <th>@lang('messages.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($offers as $offer)
                            <tr>
                                <td>
                                    <a href="{!! route('products.show', $offer->product_id) !!}">{{ $offer->products->title }}</a>
                                </td>
                                <td><a href="#">{{ $offer->title }}</a></td>
                                <td>{{ $offer->new_price }}</td>
                                <td>{{ $offer->discount }} %</td>
                                <td>
                                    <form action="{!! route('offers.status', $offer->id) !!}" method="post">
                                        {!! csrf_field() !!}
                                        <select name="is_active" class="form-control" onchange="this.form.submit()">
                                            <option value="0" @if(!$offer->is_active) selected @endif>@lang('messages.unActive')</option>
                                            <option value="1" @if($offer->is_active) selected @endif>@lang('messages.active')</option>
                                        </select>
                                    </form>
                                </td>
                                <td>
                                    @if($offer->is_featured)
                                    <span class="text-success">@lang('messages.yes')</span>
                                    @else
                                    <span class="text-danger">@lang('messages.no')</span>
                                    @endif
                                </td>
                                <td>{{ $offer->start_date }}</td>
                                <td>{{ $offer->end_date }}</td>
                                <td>

                                    {!! Form::open(['route' => ['offers.destroy', $offer->id], 'method' => 'delete']) !!}
                                    <a href="{!! route('offers.edit', [$offer->id]) !!}"
                                       class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
        @if(method_exists($offers,'links'))
            <footer class="md-pagination row">
                <div class="col-xs-12">
                    {{$offers->links() }}
                </div>
            </footer>
        @endif
    </div>
@endsection