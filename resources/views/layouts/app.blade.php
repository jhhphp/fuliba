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
    <link rel="stylesheet" media="screen" href="{{asset('css/app-476.css')}}" data-turbolinks-track="reload" />
    <link rel="stylesheet"  href="{{asset('css/bootstrap.min.css')}}" >


    <meta name="action-cable-url" content="/cable" />
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="l1seBFk9rPRVkhRWP5tKboc7OylcGjr0IAI9IwShA9y/zgwX6dsYHahzO858glrjUQIN3dPvZ+Vk9OrXpHgueg==" />
    <meta name="apple-itunes-app" content="app-id=1072028763" />
    <meta name="google-site-verification" content="YRy3qLejfhrOT_FxPRQn2p5h_ykCLOmhpP3Q5QUWdHU" />
    <link rel="icon" href="/favicon.ico" />

    <style>
        body { background: #e5e5e5; }
        .header .navbar-brand b { color: #EB5424; }
        .header #main-nav-menu .navbar-nav li a:hover, .header #main-nav-menu .navbar-nav li.active a, .header #main-nav-menu .navbar-nav li.active a:focus, .header #main-nav-menu .navbar-nav li.active a:hover { color: #EB5424; border-color: #EB5424; }
        .header .navbar-inverse .navbar-nav .open .dropdown-menu li.active a { color: #EB5424; }
        .turbolinks-progress-bar { color: #EB5424 !important; }
        abbr {  text-decoration: none; }
    </style>

    <script src="{{asset('js/jquery.min.js')}}" ></script>
    <script src="{{asset('js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('js/app-r.js')}}" ></script>

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
                <a href="{{route('/')}}" class="navbar-brand"><b style="font-size:140%">{{env('LOGO_NAME')}}</b>{{env('LOGO_NAME_EXT')}}</a>

            </div>
            <div class="collapse navbar-collapse nav-collapse-toggle" id="main-navbar-collapse">

                <div id="main-nav-menu">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="{{route('topic')}}">社区</a></li><li class=""><a href="{{route('topic')}}">招聘</a></li><li class=""><a href="{{route('topic')}}">Wiki</a></li><li class=""><a href="{{route('topic')}}">酷站</a></li>
                        <li class="nav-gems hidden-xs"><a href="{{route('topic')}}" rel="noopener">Gems</a></li>

                    </ul>
                </div>

            </div>
            <ul class="nav user-bar navbar-nav navbar-right">
                @guest
                <li><a href="{{route('reg')}}">注册</a></li>
                <li><a href="{{route('login')}}">登录</a></li>
                @endguest
                @auth
                        <li class="dropdown dropdown-avatar">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img class="media-object avatar-32" src="https://ruby-china.org/system/letter_avatars/2/J/82_188_137/64.png"> <span class="caret"></span>
                            </a>
                            <button class="navbar-toggle" type="button" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="sr-only">Toggle</span>
                                <img class="media-object avatar-32" src="https://ruby-china.org/system/letter_avatars/2/J/82_188_137/64.png">
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li class=""><a href="/member/{{Auth::user()->username}}">{{Auth::user()->username}}</a></li>
                                <li class=""><div class="divider"></div></li>
                                <li class=""><a href="/setting">个人资料设置</a></li>
                                <li class=""><a href="/topic/favorites">我的收藏</a></li>
                                <!--<li class=""><a href="/notes">记事本</a></li>-->
                                <li class=""><div class="divider"></div></li>
                                <li class=""><a rel="nofollow" data-method="delete" href="/logout">退出</a></li>
                            </ul>
                        </li>
                @endauth
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
                @auth
                    <li class="notification-count">
                        <a href="/notice" class="" title="通知"><i class="fa fa-bell"></i><span class="count">0</span></a>
                    </li>
                    <li class="newTopic">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-plus"></i> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu"><li class=""><a href="{{route('topicAdd')}}">发布新话题</a></li></ul>
                    </li>
                @endauth
            </ul>

        </div>
    </nav>
</div>
<!--预留作为通知-->
<!-- <div class="alert alert-success"><a class="close" data-dismiss="alert" href="#"><i class="fa fa-close"></i></a>这是个通知tips!</div> -->
<!-- end -->

@section('content')
@show

@includeWhen($showFoot,'layouts.foot')
