{{-- this block should be deprecated --}}
@include('inc._lighted-box',[
    'block_title' => isset($block_title) ? $block_title : null,
    'block_loop' => $products,
    'block_loop_empty' => Lang::get('app.No results matched with this criteria'),
    'block_item' => 'inc._product',
])