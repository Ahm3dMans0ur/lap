<script>
    $(document).on('click', '.action-like , .action-dislike', function (e) {
        e.preventDefault();
        var is_liked = $(this).attr('like');
        var product_id = $(this).siblings('.get-product-id').val();
        $.ajax({
            url: '{!! route('products.likes') !!}',
            type: 'post',
            data: {product_id: product_id, is_liked: is_liked,_token: $('meta[name="csrf_token"]').attr('content')},
            success: function (data) {
                $('.action-like').children('span').html(data.likes);
                $('.action-dislike').children('span').html(data.dislikes);
            }
        });
    });

    $(document).on('click', '.action-favorite', function (e) {
        e.preventDefault();
        var product_id = $(this).siblings('.get-product-id').val();
        $.ajax({
            url: '{!! route('products.favorite') !!}',
            type: 'post',
            data: {product_id: product_id,_token: $('meta[name="csrf_token"]').attr('content')},
            success: function (data) {
                if(data == '1'){
                    $('.action-favorite').removeClass('favorite');
                    $('.action-favorite').addClass('is-favorite');
                }else{
                    $('.action-favorite').addClass('favorite');
                    $('.action-favorite').removeClass('is-favorite');
                }

            }
        });
    });
</script>