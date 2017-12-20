	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Designed by Mohamed Gamil (gemy.me) | Developed by Mohamed Abo Bdwey (bdwey.com)">
	<meta name="description" content="{{\Setting::get('description')}}">
	<meta name="keywords" content="{{\Setting::get('keywords')}}">
	<meta name="csrf_token" content="{{ csrf_token() }}">
	<meta name="isGuest" content="{{ auth()->guest() }}">

	<meta property="og:type" content="website">
	<meta property="og:title" content="{{\Setting::get('title')}}">
	<meta property="og:site_name" content="{{\Setting::get('title')}}">
	<meta property="og:url" content="{{url('/')}}">
	<meta property="og:description" content="{{\Setting::get('description')}}">
	<meta property="og:image" content="{{url('/')}}/frontend/images/og-image.jpg">

<!--
    {DESIGN & CODE} Mohamed Gamil http://gemy.me
    _________________________
    {DEVELOPMENT} Mohamed Abo Bdwey http://.bdwey.com
    _________________________
    Coypyright © Shari 2017 All Rights Reserved.
-->