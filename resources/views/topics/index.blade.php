@extends('layouts.app')

@section('content')
<div class="sub-navbar node-header hide-ios">
    <div class="container">
        <ul class="filter nav nav-pills">
            <!--<li><a href="#" class="all-nodes" data-toggle="modal" data-target="#node-selector">所有节点 <span class="caret-right"></span></a></li>-->
            <li class=" active">
                <a href="{{route('topic')}}" data-turbolinks-action="replace">默认</a>
            </li>
            <li class="">
                <a href="{{route('topic',['type'=>'well'])}}" data-turbolinks-action="replace"><i class="fa fa-diamond"></i> 优质帖子</a>
            </li>
            <li class="">
                <a data-turbolinks-action="replace" href="{{route('topic',['type'=>'no_reply'])}}">无人问津</a>
            </li>
            <li class="">
                <a data-turbolinks-action="replace" href="{{route('topic',['type'=>'latest'])}}">最新发布</a>
            </li>
        </ul>
    </div>
</div>

    <div id="main" class="main-container container">
    <div class="row">
        <div class="col-md-9">
            <div class="topics topics-index panel panel-default">

                <div class="panel-body item-list">
                    <div class="topic media topic-35052">
                        <div class="avatar media-left">
                            <a title="ryudoawaru (Mu-Fan teng)" href="{{route('topic_detail',['id'=>234])}}"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/5841.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="Grape 如何查看生成的 URI？" href="{{route('topic_detail',['id'=>234])}}">
                                    <span class="node">RubyConf</span>
                                     Grape 如何查看生成的 URI？
                                </a><i class="fa fa-angle-double-up" title="置顶"></i>


                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Mu-Fan teng" href="{{route('member',['name'=>'ryudoawaru'])}}">ryudoawaru</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="qq1695381214" href="{{route('member',['name'=>'qq1695381214'])}}">qq1695381214</a> 回复于 <abbr class="timeago" title="2018-03-06T21:03:26+08:00">2018年03月06日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="{{route('topic_detail',['id'=>234])}}#reply-item">6</a>
                        </div>
                    </div>

                    <div class="topic media topic-35106">
                        <div class="avatar media-left">
                            <a title="dmycnm" href="{{route('member',['name'=>'dmycnm'])}}"><img class="media-object avatar-48" src="https://ruby-china.org/system/letter_avatars/2/D/149_114_207/96.png" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="如何用 Ruby 写一个图片上传到服务器的方法" href="{{route('topic_detail',['id'=>234])}}">
                                    <span class="node">新手问题</span>
                                    如何用 Ruby 写一个图片上传到服务器的方法
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="dmycnm" href="{{route('member',['name'=>'dmycnm'])}}">dmycnm</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="dmycnm" href="{{route('member',['name'=>'dmycnm'])}}">dmycnm</a> 回复于 <abbr class="timeago" title="2018-03-07T09:33:04+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="{{route('topic_detail',['id'=>234])}}">5</a>
                        </div>
                    </div>

                </div>

                <div class="panel-footer clearfix">
                    <ul class="pagination">

                        <li class='active'>
                            <a remote="false">1</a>
                        </li>

                        <li>
                            <a rel="next" href="/topics?page=2">2</a>
                        </li>

                        <li>
                            <a href="/topics?page=3">3</a>
                        </li>

                        <li>
                            <a href="/topics?page=4">4</a>
                        </li>

                        <li>
                            <a href="/topics?page=5">5</a>
                        </li>

                        <li class='disabled'>
                            <a>&hellip;</a>
                        </li>

                        <li>
                            <a href="/topics?page=58">58</a>
                        </li>

                        <li>
                            <a href="/topics?page=59">59</a>
                        </li>

                        <li>
                            <a href="/topics?page=60">60</a>
                        </li>

                        <li class="next">
                            <a rel="next" href="/topics?page=2">下一页 <i class="fa fa-angle-right"></i></a>
                        </li>

                    </ul>

                </div>
            </div>


        </div>


        <div class="sidebar col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a class="btn btn-primary btn-block" href="/topics/new">发布新话题</a>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">小帖士</div>
                <div class="panel-body">
                    如果你不是特别对他的每一句话感兴趣，不要随意用“关注”人的功能，因为关注以后，他的所有发帖回帖都会以通知的方式提醒你的！
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">社区规则</div>
                <ul class="list-group">
                    <li class="list-group-item"><i class="fa fa-archive"></i> <a href="https://ruby-china.org/topics/24325">提问的智慧</a></li>
                    <li class="list-group-item"><i class="fa fa-heart"></i> <a href="http://blog.steveklabnik.com/posts/2011-08-19-matz-is-nice-so-we-are-nice" target="_blank">Matz is Nice So We Are Nice</a></li>
                </ul>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">推荐 Ruby 资源</div>
                <ul class="list-group">
                    <li class="list-group-item"><i class='fa fa-cloud'></i> <a href="/wiki/ruby-mirror">Ruby 镜像</a></li>
                    <li class="list-group-item"><i class='fa fa-diamond'></i> <a href="https://gems.ruby-china.org" target="_blank">RubyGems 镜像</a></li>
                    <li class="list-group-item"><i class='fa fa-youtube-play'></i> <a href="http://railscasts.com" target="_blank" rel="nofollow">Rails 视频教程</a></li>
                    <li class="list-group-item"><i class='fa fa-archive'></i> <a href="https://rails.guide/book/">Rails Guides 中文版</a></li>
                    <li class="list-group-item"><i class="fa fa-archive"></i> <a href="https://railstutorial-china.org">Ruby on Rails 教程</a></li>
                </ul>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">友情社区</div>
                <ul class="list-group" style="text-align: center;">
                    <li class="list-group-item"><a href="http://cnodejs.org" rel="nofollow" title="CNode 社区" target="_blank"><img src="//l.ruby-china.org/photo/2016/d427ef3efd33b57721df152c2aa1735e.png" style="width:130px; " /></a></li>
                    <li class="list-group-item"><a href="https://gocn.io" rel="nofollow" title="GoCN 社区" target="_blank"><img src="//l.ruby-china.org/photo/2017/97b87be9-1375-40cb-8d56-29e203a31689.png" style="width:130px; " /></a></li>
                    <li class="list-group-item"><a href="https://laravel-china.org" target="_blank" rel="nofollow"><img src="//l.ruby-china.org/photo/2016/d7782871f3fac7e85a95d20c74046909.png" style="width:130px; " /></a></li>
                    <!--li class="list-group-item"><a href="http://segmentfault.com" target="_blank" rel="nofollow"><img src="//l.ruby-china.org/photo/2016/e91d14ee109ed066e215057ab40257b7.png" style="width:150px; " /></a></li-->
                    <li class="list-group-item"><a href="http://elixir-cn.com" target="_blank" rel="nofollow"><img src="//l.ruby-china.org/photo/2017/2720bc62-2348-40c0-88f6-95500067c648.png" style="width: 130px; " /></a></li>
                    <li class="list-group-item"><a href="https://testerhome.com/" target="_blank" rel="nofollow"><img src="//l.ruby-china.org/photo/2016/5cd78b730062ab3c768bcc2592c5c7fa.png" style="width: 150px;" /></a></li>
                    <li class="list-group-item"><a href="https://pythoncaff.com" target="_blank" rel="nofollow"><img src="//l.ruby-china.org/photo/2018/00d4dd0a-188b-4c58-a524-46c99244659b.png" style="width: 150px;" /></a></li>
                </ul>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">统计信息</div>
                <ul class="list-group">
                    <li class="list-group-item">社区会员: 34464 人</li>
                    <li class="list-group-item">帖子数: 35104 个</li>
                    <li class="list-group-item">回帖数: 337378 条</li>
                </ul>
            </div>

        </div>

    </div>

    </div>
@endsection
