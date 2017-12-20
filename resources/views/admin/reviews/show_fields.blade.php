<div class="row">

<!-- Id Field -->
<div class="form-group">
    <label>Product</label>
    <p><a href="{{ route('products.show',$product->id) }}" target="_blank">{{ $product->title }}</a></p>
    @if($product->status=='active')
        <a href="{{ route('admin.products.enableProduct',$product->id) }}" class="btn btn-success">active</a>
    @else
        <a href="{{ route('admin.products.enableProduct',$product->id) }}" class="btn btn-danger">review</a>
    @endif
</div>
<h2>reviews</h2>
@foreach($reviews as $review)
    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-body">
                <section class="post-heading">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object photo-profile" src="{{ $review->users->getImage() }}"
                                             width="40" height="40" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="anchor-username"><h4
                                                class="media-heading">{{ $review->users->name }}</h4></a>
                                    <a href="#" class="anchor-time">{{ $review->created_at->diffForHumans() }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                        </div>
                    </div>
                </section>
                <section class="post-body">
                    <p>{{ $review->comment }}</p>
                </section>
                <section class="post-footer">
                    <hr>
                    <div class="post-footer-option container">
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{ route('messages.send_view',$review->users->id) }}">
                                    <i class="glyphicon glyphicon-comment"></i>@lang('messages.respond')</a>
                               </li>
                            <li><a style="cursor: pointer" id="addNotes" reviewId="{{ $review->id }}"> ملاحظة<i class="glyphicon glyphicon-share-alt"></i></a></li>
                            <li>
                                <select name="status" reviewId="{{ $review->id }}" id="status" class="form-control">
                                    <option {{ ($review->status == 'new')? 'selected':''}}>new</option>
                                    <option {{ ($review->status == 'reviewed')? 'selected':''}}>reviewed</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="post-footer-comment-wrapper">
                        <div class="comment-form">

                        </div>
                        <div class="comment">
                            <div class="media">

                                <div class="media-body">
                                    <div class="hiddenNotes{{ $review->id }} form-group @if(!$review->notes)hidden @endif">
                                        <h4>notes</h4>
                                        <p style="word-wrap: break-word;"
                                           class="col-lg-10 admin_notes{{ $review->id }}">{{ $review->notes }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endforeach
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Notes</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" id="reviewId">
                <textarea id="notes" name="notes" class="form-control" rows="7"></textarea>
            </div>
            <div class="modal-footer">
                <button id="submit" type="submit" class="btn btn-success">Save</button>
            </div>
            {!! Form::close() !!}
        </div>

    </div>
</div>

@section('scripts')
    <script>
        $(document).on('change', '#status', function () {
            var status = $(this).val();
            var id = $(this).attr('reviewId');
            $.ajax({
                url: '{!! route('admin.reviews.change_status') !!}',
                type: 'post',
                data: {id: id, status: status, _token: $('meta[name="csrf_token"]').attr('content')},
                success: function (response) {
                    if (response != 0) {
                        swal('{{ Lang::get('messages.change_status') }}');
                    } else {
                        swal('{{ Lang::get('messages.error') }}');
                    }
                }
            });
        });

        $(document).on('click', '#addNotes', function (e) {
            e.preventDefault();
            var obj = $(this);
            var review_id = obj.attr('reviewId');
            $('#reviewId').val(review_id)
            $.ajax({
                url: "{{ route('admin.reviews.getNotes') }}",
                data: {review_id: review_id},
                success: function (data) {
                    $('#notes').text(data);
                    $('#myModal').modal();
                }
            });
        });

        $(document).on('click', '#submit', function (e) {
            e.preventDefault();
            var notes = $('#notes').val();
            var review_id = $('#reviewId').val();
//        alert(notes);
            $.ajax({
                url: "{{ route('admin.reviews.addNotes') }}",
                data: {review_id: review_id, notes: notes},
                success: function (data) {
                    $('.hiddenNotes' + review_id).removeClass('hidden');
                    $('.admin_notes' + review_id).text(data);
                    $('#myModal').modal('toggle');
                }
            });
        });

    </script>

@endsection