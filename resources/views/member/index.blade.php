@extends('layouts.app')
@section('content')
<div id="main" class="main-container container">
    <div class="row">
        <div class="sidebar col-md-4" id="sidebar">
            <div class="panel profile panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div class="avatar media-left">
                            <div class="image"><img class="media-object avatar-96" src="https://l.ruby-china.org/user/avatar/31774/757211.jpeg!lg"></div>
                            <div class="level"><span class="label label-info role">会员</span></div>
                        </div>
                        <div class="media-body">
                            <div class="item">
                                {{$user['name']}}
                                <span class="opts pull-right">
            </span>
                            </div>
                            <div class="item number">
                                第 31774 位会员 / <span title="注册日期">2017-06-01</span>
                            </div>
                            <div class="item counts">
                                <span>3</span> 篇帖子 • <span>12</span> 条回帖
                            </div>
                            <div class="item social">


                                <a target="_blank" rel="nofollow" href="https://github.com/OrderSun"><i class="fa fa-github"></i></a>

                                <a href="mailto: github+23135416@example.com"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="follow-info row hide-ios">
                        <div class="col-xs-4 followers" data-login="OrderSun">
                            <a class="counter" href="/OrderSun/followers">0</a>
                            <a class="text" href="/OrderSun/followers">关注者</a>
                        </div>
                        <div class="col-xs-4 following">
                            <a class="counter" href="/OrderSun/following">0</a>
                            <a class="text" href="/OrderSun/following">正在关注</a>
                        </div>
                        <div class="col-xs-4 stars">
                            <a class="counter" href="/OrderSun/favorites">3</a>
                            <a class="text" href="/OrderSun/favorites">收藏</a>
                        </div>
                    </div>
                    <div class="buttons row">
                        <div class="col-xs-6">

                        </div>

                        <div class="col-xs-6">

                        </div>
                    </div>


                    <div class="buttons">

                    </div>
                </div>
            </div>


            <div class="panel panel-default" id="user_github_repos">
                <div class="panel-heading">GitHub Public Repos</div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="title">
                            <a target="_blank" rel="nofollow" href="https://github.com/OrderSun/blogs">blogs</a>
                            <span class="watchers" title="1 Watchers">1</span>
                        </div>
                        <p class="desc">

                        </p></li>
                    <li class="list-group-item">
                        <div class="title">
                            <a target="_blank" rel="nofollow" href="https://github.com/OrderSun/baidu_map">baidu_map</a>
                            <span class="watchers" title="1 Watchers">1</span>
                        </div>
                        <p class="desc">

                        </p></li>
                    <li class="list-group-item">
                        <div class="title">
                            <a target="_blank" rel="nofollow" href="https://github.com/OrderSun/db">db</a>
                            <span class="watchers" title="0 Watchers">0</span>
                        </div>
                        <p class="desc">

                        </p></li>
                    <li class="list-group-item">
                        <div class="title">
                            <a target="_blank" rel="nofollow" href="https://github.com/OrderSun/yyy">yyy</a>
                            <span class="watchers" title="0 Watchers">0</span>
                        </div>
                        <p class="desc">

                        </p></li>
                    <li class="list-group-item">
                        <div class="title">
                            <a target="_blank" rel="nofollow" href="https://github.com/OrderSun/xxx">xxx</a>
                            <span class="watchers" title="0 Watchers">0</span>
                        </div>
                        <p class="desc">

                        </p></li>
                    <li class="list-group-item">
                        <div class="title">
                            <a target="_blank" rel="nofollow" href="https://github.com/OrderSun/models">models</a>
                            <span class="watchers" title="0 Watchers">0</span>
                        </div>
                        <p class="desc">

                        </p></li>
                    <li class="list-group-item">
                        <div class="title">
                            <a target="_blank" rel="nofollow" href="https://github.com/OrderSun/interview_html_css">interview_html_css</a>
                            <span class="watchers" title="0 Watchers">0</span>
                        </div>
                        <p class="desc">

                        </p></li>
                    <li class="list-group-item">
                        <div class="title">
                            <a target="_blank" rel="nofollow" href="https://github.com/OrderSun/axlsx">axlsx</a>
                            <span class="watchers" title="0 Watchers">0</span>
                        </div>
                        <p class="desc">
                            xlsx generation with charts, images, automated column width, customizable styles and full sch...
                        </p></li>
                </ul>
                <div class="panel-footer more">
                    <a target="_blank" rel="nofollow" href="https://github.com/OrderSun">More on GitHub</a>
                </div>
            </div>

        </div>


        <div class="col-md-8">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#replies" data-toggle="tab">最近回帖</a></li>
                    <li><a href="#article" data-toggle="tab">帖子</a></li>
                    <li><a href="#collection" data-toggle="tab">收藏</a></li>
                    <li><a href="#following" data-toggle="tab">关注</a></li>
                    <li><a href="#follower" data-toggle="tab">粉丝</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="replies">
                        <div class="panel panel-default">
                            <ul class="list-group recent-replies">
                                <li class="list-group-item">
                                    <div class="title">
                                        <a href="/topics/35190">[求助] Grape 如何查看生成的 URI？</a>
                                        <span class="info">at <abbr class="timeago" title="2018年03月08日">4 小时前</abbr></span>
                                    </div>
                                    <div class="body markdown">
                                        <p>2楼的方案挺好的。之前我也看到了，感觉挺麻烦，配置好了确实不错。那个帖子有点老，需要跟新gem。</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="title">
                                        <a href="/topics/35190">[求助] Grape 如何查看生成的 URI？</a>
                                        <span class="info">at <abbr class="timeago" title="2018年03月08日">8 小时前</abbr></span>
                                    </div>
                                    <div class="body markdown">
                                        <p>这个打不开，需要翻墙么？</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="title">
                                        <a href="/topics/35073">如何在任何 model 中获取 Devise 的 current_user 信息？</a>
                                        <span class="info">at <abbr class="timeago" title="2018年02月27日">9 天前</abbr></span>
                                    </div>
                                    <div class="body markdown">
                                        <p>多谢指正<img title=":+1:" alt="👍" src="https://cdn.bootcss.com/twemoji/2.5.0/2/svg/1f44d.svg" class="twemoji"> <img title=":+1:" alt="👍" src="https://cdn.bootcss.com/twemoji/2.5.0/2/svg/1f44d.svg" class="twemoji"> <img title=":+1:" alt="👍" src="https://cdn.bootcss.com/twemoji/2.5.0/2/svg/1f44d.svg" class="twemoji"> </p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="title">
                                        <a href="/topics/35073">如何在任何 model 中获取 Devise 的 current_user 信息？</a>
                                        <span class="info">at <abbr class="timeago" title="2018年02月27日">9 天前</abbr></span>
                                    </div>
                                    <div class="body markdown">
                                        <p>多谢指正，再添加一个clear_passport!方法就OK了。</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="title">
                                        <a href="/topics/35073">如何在任何 model 中获取 Devise 的 current_user 信息？</a>
                                        <span class="info">at <abbr class="timeago" title="2018年02月27日">9 天前</abbr></span>
                                    </div>
                                    <div class="body markdown">
                                        <p>不是啊，我就是好奇，想研究一下<img title=":relieved:" alt="😌" src="https://cdn.bootcss.com/twemoji/2.5.0/2/svg/1f60c.svg" class="twemoji"> </p>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="tab-pane" id="article">
                        <p>帖子列表</p>
                    </div>
                    <div class="tab-pane" id="collection">
                        <p>收藏列表</p>
                    </div>
                    <div class="tab-pane" id="following">
                        <p>关注列表</p>
                    </div>
                    <div class="tab-pane" id="folower">
                        <p>粉丝列表</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
