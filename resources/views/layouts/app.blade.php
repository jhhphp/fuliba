<!DOCTYPE html>
<!--[if IE 8]> <html lang="{{ app()->getLocale() }}" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="{{ app()->getLocale() }}" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>{{env('APP_NAME')}}</title>
    <meta name="apple-mobile-web-app-capable" content="no">
    <meta content='True' name='HandheldFriendly' />
    <link rel="alternate" type="application/rss+xml" title="订阅最新帖" href="https://ruby-china.org/topics/feed" />
    <link rel="stylesheet" media="screen" href="{{asset('css/app-476.css')}}" data-turbolinks-track="reload" />


    <meta name="action-cable-url" content="/cable" />
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="l1seBFk9rPRVkhRWP5tKboc7OylcGjr0IAI9IwShA9y/zgwX6dsYHahzO858glrjUQIN3dPvZ+Vk9OrXpHgueg==" />
    <meta name="apple-itunes-app" content="app-id=1072028763" />
    <meta name="google-site-verification" content="YRy3qLejfhrOT_FxPRQn2p5h_ykCLOmhpP3Q5QUWdHU" />
    <link rel="icon" href="//l.ruby-china.org/photo/2016/c309db0b49cab85a32f756541ea0e2b0.png" />
    <link rel="mask-icon" href="//l.ruby-china.org/photo/2016/8c03593544987c35a95d5f2e83e86e61.svg!large" />
    <link rel="apple-touch-icon" href="//l.ruby-china.org/photo/2017/689eac2db74b87236f371e2898580746.png!large" />

    <style>
        body { background: #e5e5e5; }
        .header .navbar-brand b { color: #EB5424; }
        .header #main-nav-menu .navbar-nav li a:hover, .header #main-nav-menu .navbar-nav li.active a, .header #main-nav-menu .navbar-nav li.active a:focus, .header #main-nav-menu .navbar-nav li.active a:hover { color: #EB5424; border-color: #EB5424; }
        .header .navbar-inverse .navbar-nav .open .dropdown-menu li.active a { color: #EB5424; }
        .turbolinks-progress-bar { color: #EB5424 !important; }
        abbr {  text-decoration: none; }
    </style>

    <script src="{{asset('js/app-476.js')}}" data-turbolinks-track="reload"></script>

</head>
<body class="page-home" data-controller-name="home">
<div class="header">
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-default">
        <div class="container">
            <div class="navbar-header" id="navbar-header" data-turbolinks-permanent>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse">
                    <span class="sr-only">Toggle</span>
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="{{route('/')}}" class="navbar-brand"><b>Ruby</b> China</a>

            </div>
            <div class="collapse navbar-collapse" id="main-navbar-collapse">

                <div id="main-nav-menu">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="{{route('topic')}}">社区</a></li><li class=""><a href="{{route('topic')}}">招聘</a></li><li class=""><a href="{{route('topic')}}">Wiki</a></li><li class=""><a href="{{route('topic')}}">酷站</a></li>
                        <li class="nav-gems hidden-xs"><a href="{{route('topic')}}" rel="noopener">Gems</a></li>

                    </ul>
                </div>

            </div>
            <ul class="nav user-bar navbar-nav navbar-right">
                <li><a href="{{route('reg')}}">注册</a></li>
                <li><a href="{{route('login')}}">登录</a></li>
            </ul>

            <ul class="nav navbar-nav user-bar navbar-right">
                <li class="nav-search hidden-xs hidden-sm">
                    <form class="navbar-form form-search active" action="/search" method="GET">
                        <div class="form-group">
                            <input class="form-control" name="q" type="text" value="" placeholder="搜索本站内容" />
                        </div>
                        <i class="fa btn-search fa-search"></i>
                    </form>
                </li>
            </ul>

        </div>
    </nav>
</div>

@section('content')
@show

@includeWhen($showFoot,'layouts.foot')
