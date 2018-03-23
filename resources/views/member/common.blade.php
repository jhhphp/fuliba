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
                                {{$user['username']}} ({{$user['nickname']}})
                                <span class="opts pull-right">
            </span>
                            </div>
                            <div class="item number">
                                第 {{$user['id']}} 位会员 / <span title="注册日期">{{substr($user['created_at'],0,10)}}</span>
                            </div>
                            <div class="item counts">
                                <span>0</span> 篇帖子 • <span>0</span> 条回帖
                            </div>
                            <div class="item social">


                                <a target="_blank" rel="nofollow" href="#"><i class="fa fa-github"></i></a>

                                <a href="mailto: github+23135416@example.com"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="follow-info row hide-ios">
                        <div class="col-xs-4 followers" data-login="{{$user['username']}}">
                            <a class="counter" href="/member/{{$user['username']}}/follower">0</a>
                            <a class="text" href="/member/{{$user['username']}}/follower">关注者</a>
                        </div>
                        <div class="col-xs-4 following">
                            <a class="counter" href="/member/{{$user['username']}}/following">0</a>
                            <a class="text" href="/member/{{$user['username']}}/following">正在关注</a>
                        </div>
                        <div class="col-xs-4 stars">
                            <a class="counter" href="/member/{{$user['username']}}/collection">3</a>
                            <a class="text" href="/member/{{$user['username']}}/collection">收藏</a>
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
                    <li class="active"><a href="/member/{{$user['username']}}" data-toggle="tab">最近回帖</a></li>
                    <li><a href="/member/{{$user['username']}}/article" data-toggle="tab">帖子</a></li>
                    <li><a href="/member/{{$user['username']}}/collection" data-toggle="tab">收藏</a></li>
                    <li><a href="/member/{{$user['username']}}/following" data-toggle="tab">关注</a></li>
                    <li><a href="/member/{{$user['username']}}/follower" data-toggle="tab">粉丝</a></li>
                </ul>
                @yield('name')

            </div>
        </div>

    </div>

</div>
@endsection
