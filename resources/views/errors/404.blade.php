@extends('layouts.error')
@section('content')
<div class="absolute-center text-center text-light z-index-high text-shadow-10" style="height: 0;">
    <h1><strong> خطأ 404! </strong></h1>
    <h4 class="xs-mt-20 font-droidkufi">
        @if (!Auth::guest())
        مرحبا {{Auth::user()->name}}, 
        @endif
        نعتذر عن هذا لكن يبدو ان الرابط الذى اتبعته غير صحيح, الصفحة غير موجودة. 
    </h4>
</div>
@endsection