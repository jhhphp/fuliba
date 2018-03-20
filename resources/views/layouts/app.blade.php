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
<!--预留作为通知-->
<!-- <div class="alert alert-success"><a class="close" data-dismiss="alert" href="#"><i class="fa fa-close"></i></a>这是个通知tips!</div> -->
<!-- end -->

@section('content')
@show

<footer class="footer" id="footer" data-turbolinks-permanent>
    <div class="container">
        <div class="media">
            <div class="media-left" style="margin-right:20px;">
                <img class="media-object" src="//l.ruby-china.org/photo/2016/c309db0b49cab85a32f756541ea0e2b0.png" style="width: 64px;" />
            </div>

            <div class="media-body">
                <div class="links">
                    <a href="/wiki/about">关于</a> / <a href="http://rubyconfchina.org" target="_blank" title="RubyConf China 大会">RubyConf</a> / <a href="/wiki/ruby-mirror" title="Ruby 镜像">Ruby 镜像</a> / <a href="https://
gems.ruby-china.org" target="_blank" title="RubyGems 镜像">RubyGems 镜像</a> / <a href="/status" target="_blank">Status</a> / <a href="/users">活跃会员</a> / <a href="/teams">组织</a> / <a href="https://yuque.com/ruby-china/api/getting-started">API</a> / <a href="/wiki/contributors">贡献者</a>
                </div>
                <div class="copyright">
                    由众多爱好者共同维护的 Ruby 中文社区，本站使用 <a href="https://gethomeland.com">Homeland</a> 构建，并采用 Docker 部署。
                </div>
                <div class="supports" style="margin: 10px 0;">
                    <span style="margin-right: 20px">服务器由 <a href="http://www.ucloud.cn/?utm_source=zanzhu&utm_campaign=rubychina&utm_medium=display&utm_content=yejiao&ytag=rubychina_logo" target="_blank"  rel="twipsy" title="本站服务器由 UCloud 赞助"><img src="//l.ruby-china.org/photo/2016/e1eb47a05578576bf134da65736cc5b4.png" style='height: 20px; margin-top: -2px' /></a> 赞助</span>
                    <span style="margin-right: 20px">CDN 由 <a href="https://www.upyun.com/https.html?utm_source=ruby&utm_medium=Referral&utm_content=httpsad" target="_blank" style="display:inline-block;" rel="twipsy"  title="CDN, Ruby Mirror, RubyGems CDN 由又拍云赞助"><img src="//l.ruby-china.org/photo/2017/e094bd44-fd71-4ab7-9dcf-f4931f480705.png" style="height: 20px; margin-top: -2px" /></a> 赞助</span>
                    <span>Gem 服务器由
    <a href="http://www.qcloud.com?ref=ruby-china" target="_blank" rel="twipsy" title="腾讯云为 RubyGems 镜像提供国外服务器支持"><img src="//l.ruby-china.org/photo/2016/1977b4bcf6589a03fb4d21139955aa6a.png" style="height: 20px; margin-top: -3px" /></a> 赞助</span>
                </div>
                <div class="links" style="margin-top:8px" >
     <span class="socials">
     <a href="http://github.com/ruby-china" target="_blank" rel="nofollow" title="本站在 GitHub 上面的开源内容"><i class="fa fa-github"></i></a>
     <a href="http://twitter.com/ruby_china" target="_blank" rel="nofollow" title="本站的 Twitter 账号"><i class="fa fa-twitter"></i></a>
     <a href="http://weibo.com/u/3168836987" target="_blank" rel="nofollow" title="本站的 Weibo 账号"><i class="fa fa-weibo"></i></a>
     <a href="https://www.youtube.com/channel/UCOLKFS_uA7nX26_u8z9V9og/feed" target="_blank" rel="nofollow" title="本站在 YouTube 上面的视频内容"><i class="fa fa-youtube"></i></a>
     <a href="/topics/feed" target="_blank" rel="nofollow"><i class="fa fa-rss"></i></a>
     </span>

                    <span style="margin-left:20px;"><a href="https://itunes.apple.com/us/app/ruby-china/id1072028763">iOS 客户端</a> / <a href="https://play.google.com/store/apps/details?id=org.ruby_china.android">Android 客户端</a></span>

                    <a href="?locale=zh-CN" rel="nofollow" style="margin-left: 20px">简体中文</a> / <a href="?locale=zh-TW" rel="nofollow">正體中文</a> / <a href="?locale=en" rel="nofollow">English</a>
                </div>
            </div>
        </div>
    </div>
</footer>
