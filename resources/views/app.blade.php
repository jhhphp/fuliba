<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Ruby China</title>
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
                <a href="/" class="navbar-brand"><b>Ruby</b> China</a>

            </div>
            <div class="collapse navbar-collapse" id="main-navbar-collapse">

                <div id="main-nav-menu">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="/topics">社区</a></li><li class=""><a href="/jobs">招聘</a></li><li class=""><a href="/wiki">Wiki</a></li><li class=""><a href="/sites">酷站</a></li>
                        <li class="nav-gems hidden-xs"><a href="https://gems.ruby-china.org" target="_blank" rel="noopener">Gems</a></li>

                    </ul>
                </div>

            </div>
            <ul class="nav user-bar navbar-nav navbar-right">
                <li><a href="/account/sign_up">注册</a></li>
                <li><a href="/account/sign_in">登录</a></li>
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



<div id="main" class="main-container container">


    <div class="panel panel-default hidden-xs">
        <div class="panel-body" style="text-align: center;">
            <div class="media" style="width: 480px; margin:0px auto; text-align: left;">
                <div class="media-left">
                    <img src="https://cdn.bootcss.com/twemoji/2.5.0/2/svg/1f381.svg"  style="width: 55px;" />
                </div>
                <div class="media-body" style="line-height: 200%; text-align: center;">
                    <div style="font-size: 15px">
                        Ruby China 官方 <a href="https://gems.ruby-china.org" target="_blank">RubyGems 镜像</a>、<a href="/wiki/ruby-mirror">Ruby 镜像</a> 正式上线！
                    </div>
                    <div>
                        <code style="padding: 4px 10px;">gem source -a https://gems.ruby-china.org</code>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--div class="panel panel-default">
      <div class="panel-body" style="text-align: center;">
    <a href="http://rubyconfchina.org/" target="_blank"><img src="//l.ruby-china.org/photo/2016/75d6042000eebe88d302b320dd235a57.png!large" style="width: 400px; max-width: 100%;" /></a>
      </div>
    </div-->


    <div class="row home-icons hidden-sm hidden-xs">
        <div class="col-md-3">
            <div class="item item1">
                <div class="icon">
                    <a href="/topics"><i class="fa fa-comments-o"></i></a>
                </div>
                <div class="text">
                    <a href="/topics">Ruby 社区 <i class="pull-right fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item item2">
                <div class="icon">
                    <a href="/wiki"><i class="fa fa-support"></i></a>
                </div>
                <div class="text">
                    <a href="/wiki">技术文档 <i class="pull-right fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item item3">
                <div class="icon">
                    <a href="/jobs"><i class="fa fa-users"></i></a>
                </div>
                <div class="text">
                    <a href="/jobs" title="Ruby 相关的招聘与求职">招聘与求职 <i class="pull-right fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item item4">
                <div class="icon">
                    <a href="/topics/popular"><i class="fa fa-diamond"></i></a>
                </div>
                <div class="text">
                    <a href="/topics/popular">精华文章 <i class="pull-right fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="home_suggest_topics panel panel-default">
        <div class="panel-heading">社区精华帖</div>
        <div class="panel-body topics row">
            <div class="col-md-6 topics-group">
                <div class="topic media topic-35072">
                    <div class="avatar media-left">
                        <a title="dsh0416 (Delton Ding)" href="/dsh0416"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/21472/0b45a6.png!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="Ruby 2.6.0-preview1 已发布" href="/topics/35072">
                                <span class="node">Ruby</span>
                                Ruby 2.6.0-preview1 已发布
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="Delton Ding" href="/dsh0416">dsh0416</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="jakit" href="/jakit">jakit</a> 回复于 <abbr class="timeago" title="2018-02-24T17:41:38+08:00">2018年02月24日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/35072#reply-338455">4</a>
                    </div>
                </div>
                <div class="topic media topic-35015">
                    <div class="avatar media-left">
                        <a title="ceclinux-github (ceclinux)" href="/ceclinux-github"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/32084/43585f.jpg!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="JIT for MRI 开始开发了" href="/topics/35015">
                                <span class="node">Ruby</span>
                                JIT for MRI 开始开发了
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="ceclinux" href="/ceclinux-github">ceclinux-github</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="steve" href="/steve">steve</a> 回复于 <abbr class="timeago" title="2018-03-06T13:03:00+08:00">2018年03月06日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/35015#reply-338906">29</a>
                    </div>
                </div>
                <div class="topic media topic-34964">
                    <div class="avatar media-left">
                        <a title="hooopo (Hooopo)" href="/hooopo"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/8.jpg!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="Cool things in Ruby in 2018" href="/topics/34964">
                                <span class="node">Ruby</span>
                                Cool things in Ruby in 2018
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="Hooopo" href="/hooopo">hooopo</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="hooopo" href="/hooopo">hooopo</a> 回复于 <abbr class="timeago" title="2018-03-07T13:10:44+08:00">2018年03月07日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34964#reply-339006">18</a>
                    </div>
                </div>
                <div class="topic media topic-34921">
                    <div class="avatar media-left">
                        <a title="gingerhot (B1nj0y)" href="/gingerhot"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/2945/e94ba8.jpeg!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="使用 Ruby FFI 调用 Go 函数：十倍效率提升" href="/topics/34921">
                                <span class="node">Ruby</span>
                                使用 Ruby FFI 调用 Go 函数：十倍效率提升
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="B1nj0y" href="/gingerhot">gingerhot</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="conphi" href="/conphi">conphi</a> 回复于 <abbr class="timeago" title="2018-02-15T10:55:09+08:00">2018年02月15日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34921#reply-338249">38</a>
                    </div>
                </div>
                <div class="topic media topic-34771">
                    <div class="avatar media-left">
                        <a title="dsh0416 (Delton Ding)" href="/dsh0416"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/21472/0b45a6.png!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="Ruby 2.5.0 已发布" href="/topics/34771">
                                <span class="node">Ruby</span>
                                Ruby 2.5.0 已发布
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="Delton Ding" href="/dsh0416">dsh0416</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="runup" href="/runup">runup</a> 回复于 <abbr class="timeago" title="2018-02-06T19:18:44+08:00">2018年02月06日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34771#reply-337905">36</a>
                    </div>
                </div>
                <div class="topic media topic-34684">
                    <div class="avatar media-left">
                        <a title="psvr (潘旻琦)" href="/psvr"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/756.jpg!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="将您的 Ruby 应用编译成单个可执行文件" href="/topics/34684">
                                <span class="node">Ruby</span>
                                将您的 Ruby 应用编译成单个可执行文件
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="潘旻琦" href="/psvr">psvr</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="doosolar" href="/doosolar">doosolar</a> 回复于 <abbr class="timeago" title="2018-02-09T11:15:17+08:00">2018年02月09日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34684#reply-337996">10</a>
                    </div>
                </div>
                <div class="topic media topic-34663">
                    <div class="avatar media-left">
                        <a title="pathbox (Cary)" href="/pathbox"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/15420.jpg!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="简记 Rails 中的 logger 实用技巧" href="/topics/34663">
                                <span class="node">Rails</span>
                                简记 Rails 中的 logger 实用技巧
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="Cary" href="/pathbox">pathbox</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="pathbox" href="/pathbox">pathbox</a> 回复于 <abbr class="timeago" title="2017-12-29T11:25:18+08:00">2017年12月29日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34663#reply-336218">9</a>
                    </div>
                </div>
                <div class="topic media topic-34627">
                    <div class="avatar media-left">
                        <a title="hfpp2012 (随风)" href="/hfpp2012"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/16154.jpg!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="如何用 GitBook 结合 markdown 写一本开源书籍" href="/topics/34627">
                                <span class="node">分享</span>
                                如何用 GitBook 结合 markdown 写一本开源书籍
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="随风" href="/hfpp2012">hfpp2012</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="hfpp2012" href="/hfpp2012">hfpp2012</a> 回复于 <abbr class="timeago" title="2018-01-14T23:51:53+08:00">2018年01月14日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34627#reply-336936">7</a>
                    </div>
                </div>
                <div class="topic media topic-34540">
                    <div class="avatar media-left">
                        <a title="quakewang" href="/quakewang"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/162.jpg!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="性能优化案例分析之一：软删除是慢查询的罪魁祸首？" href="/topics/34540">
                                <span class="node">数据库</span>
                                性能优化案例分析之一：软删除是慢查询的罪魁祸首？
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="" href="/quakewang">quakewang</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="ibcker" href="/ibcker">ibcker</a> 回复于 <abbr class="timeago" title="2017-12-21T22:42:27+08:00">2017年12月21日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34540#reply-335876">17</a>
                    </div>
                </div>
                <div class="topic media topic-34421">
                    <div class="avatar media-left">
                        <a title="Draveness (Draveness)" href="/Draveness"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/25879/a40f50.png!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="如何从 MongoDB 迁移到 MySQL" href="/topics/34421">
                                <span class="node">重构</span>
                                如何从 MongoDB 迁移到 MySQL
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="Draveness" href="/Draveness">Draveness</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="hlxwell" href="/hlxwell">hlxwell</a> 回复于 <abbr class="timeago" title="2018-02-08T11:19:22+08:00">2018年02月08日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34421#reply-337964">40</a>
                    </div>
                </div>

            </div>

            <div class="col-md-6 topics-group">
                <div class="topic media topic-35031">
                    <div class="avatar media-left">
                        <a title="imwildcat (WildCat)" href="/imwildcat"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/14174.jpg!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="商科背景， 5 周完成 deeplearning.ai 课程的过程、心得与总结" href="/topics/35031">
                                <span class="node">其他</span>
                                商科背景， 5 周完成 deeplearning.ai 课程的过程、心得与总结
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="WildCat" href="/imwildcat">imwildcat</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="imwildcat" href="/imwildcat">imwildcat</a> 回复于 <abbr class="timeago" title="2018-03-05T19:38:43+08:00">2018年03月05日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/35031#reply-338871">11</a>
                    </div>
                </div>
                <div class="topic media topic-34992">
                    <div class="avatar media-left">
                        <a title="jjym (2622)" href="/jjym"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/2622.jpeg!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="Good news everyone! Ruby 又要添加绿色线程了, Thread::Green (可以理解为 go 的 goroutine)" href="/topics/34992">
                                <span class="node">Ruby</span>
                                Good news everyone! Ruby 又要添加绿色线程了, Thread::Green (可以理解为 go 的 goroutine)
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="2622" href="/jjym">jjym</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="jakit" href="/jakit">jakit</a> 回复于 <abbr class="timeago" title="2018-02-23T18:47:53+08:00">2018年02月23日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34992#reply-338409">33</a>
                    </div>
                </div>
                <div class="topic media topic-34951">
                    <div class="avatar media-left">
                        <a title="agilejzl (志龙)" href="/agilejzl"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/8582/42ec9e.jpg!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="有考虑使用 Sinatra + ActiveRecord 替换你的 Rails 项目吗" href="/topics/34951">
                                <span class="node">Gem</span>
                                有考虑使用 Sinatra + ActiveRecord 替换你的 Rails 项目吗
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="志龙" href="/agilejzl">agilejzl</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="Lax" href="/Lax">Lax</a> 回复于 <abbr class="timeago" title="2018-02-21T01:17:51+08:00">2018年02月21日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34951#reply-338332">30</a>
                    </div>
                </div>
                <div class="topic media topic-34778">
                    <div class="avatar media-left">
                        <a title="dsh0416 (Delton Ding)" href="/dsh0416"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/21472/0b45a6.png!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="Rack/Rails 服务器获取用户 IP 问题分享" href="/topics/34778">
                                <span class="node">Rails</span>
                                Rack/Rails 服务器获取用户 IP 问题分享
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="Delton Ding" href="/dsh0416">dsh0416</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="hegwin" href="/hegwin">hegwin</a> 回复于 <abbr class="timeago" title="2018-01-11T16:25:47+08:00">2018年01月11日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34778#reply-336850">3</a>
                    </div>
                </div>
                <div class="topic media topic-34762">
                    <div class="avatar media-left">
                        <a title="lyfi2003 (windy)" href="/lyfi2003"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/121/93d6b1.png!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="DHH: 2017 年 Rails 框架还值得学习吗?" href="/topics/34762">
                                <span class="node">Rails</span>
                                DHH: 2017 年 Rails 框架还值得学习吗?
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="windy" href="/lyfi2003">lyfi2003</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="u1440247613" href="/u1440247613">u1440247613</a> 回复于 <abbr class="timeago" title="2018-03-07T19:12:29+08:00">2018年03月07日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34762#reply-339019">61</a>
                    </div>
                </div>
                <div class="topic media topic-34668">
                    <div class="avatar media-left">
                        <a title="zhansingsong (singsong)" href="/zhansingsong"><img class="media-object avatar-48" src="https://ruby-china.org/system/letter_avatars/2/Z/173_214_125/96.png" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="看完离编写高性能的 JavaScript 又近了一步" href="/topics/34668">
                                <span class="node">JavaScript</span>
                                看完离编写高性能的 JavaScript 又近了一步
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="singsong" href="/zhansingsong">zhansingsong</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="davidzhu001" href="/davidzhu001">davidzhu001</a> 回复于 <abbr class="timeago" title="2018-02-20T20:58:38+08:00">2018年02月20日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34668#reply-338327">9</a>
                    </div>
                </div>
                <div class="topic media topic-34640">
                    <div class="avatar media-left">
                        <a title="Yggdroot (Yggdroot)" href="/Yggdroot"><img class="media-object avatar-48" src="https://ruby-china.org/system/letter_avatars/2/Y/188_170_164/96.png" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="如何使用 Python 编写 vim 插件" href="/topics/34640">
                                <span class="node">开发工具</span>
                                如何使用 Python 编写 vim 插件
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="Yggdroot" href="/Yggdroot">Yggdroot</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="lanzhiheng" href="/lanzhiheng">lanzhiheng</a> 回复于 <abbr class="timeago" title="2018-01-24T11:09:12+08:00">2018年01月24日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34640#reply-337282">2</a>
                    </div>
                </div>
                <div class="topic media topic-34571">
                    <div class="avatar media-left">
                        <a title="quakewang" href="/quakewang"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/162.jpg!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="性能优化案例分析之二：时间区域查询的性能优化" href="/topics/34571">
                                <span class="node">数据库</span>
                                性能优化案例分析之二：时间区域查询的性能优化
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="" href="/quakewang">quakewang</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="kooglezhang" href="/kooglezhang">kooglezhang</a> 回复于 <abbr class="timeago" title="2018-01-24T13:34:09+08:00">2018年01月24日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34571#reply-337286">14</a>
                    </div>
                </div>
                <div class="topic media topic-34486">
                    <div class="avatar media-left">
                        <a title="pathbox (Cary)" href="/pathbox"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/15420.jpg!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="为 Rails 项目升级使用 ElasticSearch 5.x 版本" href="/topics/34486">
                                <span class="node">搜索引擎</span>
                                为 Rails 项目升级使用 ElasticSearch 5.x 版本
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="Cary" href="/pathbox">pathbox</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="johnsafe" href="/johnsafe">johnsafe</a> 回复于 <abbr class="timeago" title="2018-02-23T09:32:15+08:00">2018年02月23日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34486#reply-338378">13</a>
                    </div>
                </div>
                <div class="topic media topic-34341">
                    <div class="avatar media-left">
                        <a title="vito (vito)" href="/vito"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/29029.jpg!md" /></a>
                    </div>
                    <div class="infos media-body">
                        <div class="title media-heading">
                            <a title="理解本质的 REST" href="/topics/34341">
                                <span class="node">分享</span>
                                理解本质的 REST
                            </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                        </div>
                        <div class="info">
                            <a class="user-name" data-name="vito" href="/vito">vito</a>
                            <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="wuguzaliang" href="/wuguzaliang">wuguzaliang</a> 回复于 <abbr class="timeago" title="2018-02-07T16:38:15+08:00">2018年02月07日</abbr>
      </span>
                        </div>
                    </div>
                    <div class="count media-right">
                        <a class="state-false" href="/topics/34341#reply-337947">16</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="panel-footer">
            <a href="/topics/excellent">查看更多精华帖...</a>
        </div>
    </div>
    <div class="index-sections panel panel-default">
        <div class="panel-heading">讨论节点分类导航</div>
        <div class="panel-body">
            <div class="row node-list">
                <div class="node media">
                    <label class="media-left">Ruby</label>
                    <span class="nodes media-body">
            <span class="name"><a title="新手问题" data-id="52" href="/topics/node52">新手问题</a></span>
            <span class="name"><a title="招聘" data-id="25" href="/topics/node25">招聘</a></span>
            <span class="name"><a title="Rails" data-id="2" href="/topics/node2">Rails</a></span>
            <span class="name"><a title="Gem" data-id="3" href="/topics/node3">Gem</a></span>
            <span class="name"><a title="部署" data-id="44" href="/topics/node44">部署</a></span>
            <span class="name"><a title="Sinatra" data-id="43" href="/topics/node43">Sinatra</a></span>
            <span class="name"><a title="Ruby" data-id="1" href="/topics/node1">Ruby</a></span>
            <span class="name"><a title="RVM/rbenv" data-id="45" href="/topics/node45">RVM/rbenv</a></span>
            <span class="name"><a title="测试" data-id="37" href="/topics/node37">测试</a></span>
            <span class="name"><a title="求职" data-id="64" href="/topics/node64">求职</a></span>
            <span class="name"><a title="mRuby" data-id="66" href="/topics/node66">mRuby</a></span>
            <span class="name"><a title="重构" data-id="29" href="/topics/node29">重构</a></span>
            <span class="name"><a title="JRuby" data-id="54" href="/topics/node54">JRuby</a></span>
            <span class="name"><a title="开源项目" data-id="47" href="/topics/node47">开源项目</a></span>
        </span>
                </div>
                <div class="node media">
                    <label class="media-left">其他语言</label>
                    <span class="nodes media-body">
            <span class="name"><a title="Crystal" data-id="67" href="/topics/node67">Crystal</a></span>
            <span class="name"><a title="Rust" data-id="70" href="/topics/node70">Rust</a></span>
            <span class="name"><a title="Erlang/Elixir" data-id="35" href="/topics/node35">Erlang/Elixir</a></span>
            <span class="name"><a title="Go" data-id="34" href="/topics/node34">Go</a></span>
            <span class="name"><a title="Haskell" data-id="59" href="/topics/node59">Haskell</a></span>
            <span class="name"><a title="Dotnet" data-id="76" href="/topics/node76">Dotnet</a></span>
            <span class="name"><a title="Clojure" data-id="58" href="/topics/node58">Clojure</a></span>
            <span class="name"><a title="ObjC/Swift" data-id="48" href="/topics/node48">ObjC/Swift</a></span>
            <span class="name"><a title="Node.js" data-id="75" href="/topics/node75">Node.js</a></span>
            <span class="name"><a title="Python" data-id="4" href="/topics/node4">Python</a></span>
        </span>
                </div>
                <div class="node media">
                    <label class="media-left">Front-End</label>
                    <span class="nodes media-body">
            <span class="name"><a title="AngularJS" data-id="71" href="/topics/node71">AngularJS</a></span>
            <span class="name"><a title="React" data-id="72" href="/topics/node72">React</a></span>
            <span class="name"><a title="EmberJS" data-id="73" href="/topics/node73">EmberJS</a></span>
            <span class="name"><a title="CSS" data-id="41" href="/topics/node41">CSS</a></span>
            <span class="name"><a title="JavaScript" data-id="5" href="/topics/node5">JavaScript</a></span>
            <span class="name"><a title="Vue" data-id="77" href="/topics/node77">Vue</a></span>
        </span>
                </div>
                <div class="node media">
                    <label class="media-left">Back-End</label>
                    <span class="nodes media-body">
            <span class="name"><a title="搜索引擎" data-id="39" href="/topics/node39">搜索引擎</a></span>
            <span class="name"><a title="Linux" data-id="17" href="/topics/node17">Linux</a></span>
            <span class="name"><a title="运维" data-id="55" href="/topics/node55">运维</a></span>
            <span class="name"><a title="Git" data-id="11" href="/topics/node11">Git</a></span>
            <span class="name"><a title="数据库" data-id="12" href="/topics/node12">数据库</a></span>
            <span class="name"><a title="Redis" data-id="10" href="/topics/node10">Redis</a></span>
            <span class="name"><a title="Nginx" data-id="18" href="/topics/node18">Nginx</a></span>
            <span class="name"><a title="安全" data-id="60" href="/topics/node60">安全</a></span>
            <span class="name"><a title="Mailer" data-id="46" href="/topics/node46">Mailer</a></span>
            <span class="name"><a title="云服务" data-id="20" href="/topics/node20">云服务</a></span>
            <span class="name"><a title="算法" data-id="40" href="/topics/node40">算法</a></span>
            <span class="name"><a title="MongoDB" data-id="9" href="/topics/node9">MongoDB</a></span>
        </span>
                </div>
                <div class="node media">
                    <label class="media-left">Mobile</label>
                    <span class="nodes media-body">
            <span class="name"><a title="RubyMotion" data-id="74" href="/topics/node74">RubyMotion</a></span>
            <span class="name"><a title="Android" data-id="33" href="/topics/node33">Android</a></span>
            <span class="name"><a title="iOS" data-id="32" href="/topics/node32">iOS</a></span>
        </span>
                </div>
                <div class="node media">
                    <label class="media-left">分享</label>
                    <span class="nodes media-body">
            <span class="name"><a title="分享" data-id="26" href="/topics/node26">分享</a></span>
            <span class="name"><a title="瞎扯淡" data-id="27" href="/topics/node27">瞎扯淡</a></span>
            <span class="name"><a title="开发工具" data-id="24" href="/topics/node24">开发工具</a></span>
            <span class="name"><a title="创业" data-id="56" href="/topics/node56">创业</a></span>
            <span class="name"><a title="移民" data-id="62" href="/topics/node62">移民</a></span>
            <span class="name"><a title="数学" data-id="53" href="/topics/node53">数学</a></span>
            <span class="name"><a title="产品推广" data-id="69" href="/topics/node69">产品推广</a></span>
            <span class="name"><a title="书籍" data-id="38" href="/topics/node38">书籍</a></span>
            <span class="name"><a title="翻译" data-id="68" href="/topics/node68">翻译</a></span>
            <span class="name"><a title="音乐" data-id="78" href="/topics/node78">音乐</a></span>
            <span class="name"><a title="Mac" data-id="42" href="/topics/node42">Mac</a></span>
            <span class="name"><a title="产品控" data-id="30" href="/topics/node30">产品控</a></span>
            <span class="name"><a title="插画 / 设计" data-id="50" href="/topics/node50">插画 / 设计</a></span>
            <span class="name"><a title="健康" data-id="63" href="/topics/node63">健康</a></span>
            <span class="name"><a title="其他" data-id="28" href="/topics/node28">其他</a></span>
        </span>
                </div>
                <div class="node media">
                    <label class="media-left">Ruby China</label>
                    <span class="nodes media-body">
            <span class="name"><a title="公告" data-id="21" href="/topics/node21">公告</a></span>
            <span class="name"><a title="反馈" data-id="22" href="/topics/node22">反馈</a></span>
            <span class="name"><a title="Homeland" data-id="23" href="/topics/node23">Homeland</a></span>
            <span class="name"><a title="NoPoint" data-id="61" href="/topics/node61">NoPoint</a></span>
        </span>
                </div>
                <div class="node media">
                    <label class="media-left">活动</label>
                    <span class="nodes media-body">
            <span class="name"><a title="RubyTuesday" data-id="31" href="/topics/node31">RubyTuesday</a></span>
            <span class="name"><a title="RubyConf" data-id="51" href="/topics/node51">RubyConf</a></span>
            <span class="name"><a title="线下活动" data-id="57" href="/topics/node57">线下活动</a></span>
        </span>
                </div>
            </div>
        </div>
    </div>

    <div class="index-locations panel panel-default">
        <div class="panel-heading">热门城市</div>
        <div class="panel-body location-list" style="text-align:center;">
            <span class="name"><a href="/users/city/%E5%8C%97%E4%BA%AC">北京</a></span>
            <span class="name"><a href="/users/city/%E4%B8%8A%E6%B5%B7">上海</a></span>
            <span class="name"><a href="/users/city/%E6%B7%B1%E5%9C%B3">深圳</a></span>
            <span class="name"><a href="/users/city/%E6%9D%AD%E5%B7%9E">杭州</a></span>
            <span class="name"><a href="/users/city/%E6%88%90%E9%83%BD">成都</a></span>
            <span class="name"><a href="/users/city/%E5%B9%BF%E5%B7%9E">广州</a></span>
            <span class="name"><a href="/users/city/%E6%AD%A6%E6%B1%89">武汉</a></span>
            <span class="name"><a href="/users/city/%E8%A5%BF%E5%AE%89">西安</a></span>
            <span class="name"><a href="/users/city/%E5%8D%97%E4%BA%AC">南京</a></span>
            <span class="name"><a href="/users/city/%E5%A4%A7%E8%BF%9E">大连</a></span>
            <span class="name"><a href="/users/city/%E8%8B%8F%E5%B7%9E">苏州</a></span>
            <span class="name"><a href="/users/city/%E9%95%BF%E6%B2%99">长沙</a></span>
        </div>
    </div>


</div>
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


<script type="text/javascript">
    App.mobile = true;
</script>
<script type="text/javascript" data-turbolinks-eval="false">
    App.root_url = "https://ruby-china.org/";
    App.asset_url = "https://l.ruby-china.org";
    App.twemoji_url = "https://cdn.bootcss.com/twemoji/2.5.0/2";
    App.locale = "zh-CN";
</script>

<script>
    ga('create', 'UA-26598064-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
</script>
<div class="zoom-overlay"></div>
</body>
</html>