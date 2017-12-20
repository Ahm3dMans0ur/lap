@extends('admin.layouts.app')

@section('css')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shari - Admin Charts</title>
    {!! Charts::assets() !!}
@endsection
@section('content')
    @include('flash::message')
    <!-- <div class="display-block position-relative square-lg xxs-ml-5 xxs-ml-auto xxs-mr-auto">
        <span class="position-absolute full-width z-index-high x-left text-xxxl xxs-mt-2 xxs-pt-2 icon-ban opacity-7 text-gray"></span>
        <strong class="position-absolute full-width z-index-low x-left text-xxl xxs-mt-10 xxs-pt-2 font-jfflat opacity-6 text-success"> $ </strong>
    </div> -->

    <div class="container">
        <div class="row xxs-mt-20">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                    <p class="pull-right">
                    فى حالة رغبتك فى تحديث الموقع بأسرع وقت رجاء استخدام الزر التالي
                    </p>
                    <h1 class="pull-left">
                        <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('admin.clearCache') }}">Clear cache - مسح ملفات الحفظ المؤقت
                        </a>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="clear">   </div>
    <div class="container">
        <div class="row xxs-mt-20">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-body">
                        {!! $users->render() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <div class="box-body">
                    {!! $members->render() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="margin-top: 20px;">
                <div class="box">
                    <div class="box-body">
                    {!! $products->render() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 20px;">
                <div class="box">
                    <div class="box-body">
                    {!! $stores->render() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 20px;">
                <div class="box">
                    <div class="box-body">
                        {!! $messages->render() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1" style="margin-top: 20px;">
                <div class="box">
                    <div class="box-body">
                    {!! $categories->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
