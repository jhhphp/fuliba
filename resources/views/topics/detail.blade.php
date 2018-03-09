@extends('layouts.app')
@section('content')

    <div id="main" class="main-container container">




        <div class="row">
            <div class="col-md-9">
                <div class="topic-detail panel panel-default">
                    <div class="panel-heading media clearfix">
                        <div class="media-body">
                            <h1 class="media-heading">
                                <a class="node" href="/topics/node3">Gem</a>
                                [求助] Grape 如何查看生成的 URI？

                            </h1>
                            <div class="info">
                                <a data-author="true" class="user-name" data-name="Di.Diao" href="/OrderSun">OrderSun</a>
                                <span class="hidden-mobile">
      </span>
                                ·
                                <abbr class="timeago" title="2018年03月07日">18 小时前</abbr>
                                <span class="hidden-mobile">
         ·
        最后由 <a class="user-name" data-name="OrderSun" href="/OrderSun">OrderSun</a> 回复于 <abbr class="timeago" title="2018年03月08日">4 小时前</abbr>
      </span>
                                ·
                                268 次阅读
                            </div>
                        </div>
                        <div class="avatar media-right">
                            <a title="OrderSun (Di.Diao)" href="/OrderSun"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/31774/757211.jpeg!md"></a>
                        </div>
                    </div>



                    <div class="panel-body markdown markdown-toc"><div class="toc-container dropdown pull-right">
                            <button data-toggle="dropdown" class="btn btn-default">
                                <i class="fa fa-list"></i> 目录 <span class="caret"></span>
                            </button>
                            <div class="toc-panel dropdown-menu">
                                <div class="list-container">
                                    <ul class="list"></ul>
                                </div>
                            </div>
                        </div>


                        <p>配置按照Grape的教程，怎么样可以看到这种结果：</p>
                        <pre class="highlight shell"><code>GET /api/statuses/public_timeline
GET /api/statuses/home_timeline
GET /api/statuses/:id
POST /api/statuses
PUT /api/statuses/:id
DELETE /api/statuses/:id
</code></pre>
                        <p>Rails执行<code>rake routes</code>就可以，怎么才能看到grape api的呢？</p>


                    </div>

                    <div class="panel-footer clearfix">
                        <div class="opts">
                            <a title="赞" data-count="0" data-state="deactive" data-type="Topic" data-id="35190" class="likeable deactive" href="#"><i class="fa fa-heart"></i> <span></span></a>



                            <span class="pull-right opts">
  </span>
                        </div>

                    </div>
                </div>



                <div id="replies" class="panel panel-default" data-last-floor="7">
                    <div class="total panel-heading hide-ios">
                        共收到 <b>5</b> 条回复
                    </div>
                    <div class="items panel-body">
                        <div class="reply" data-id="339030" id="reply1">
                            <div id="reply-339030" data-floor="1">
                                <div class="avatar"><a title="winse (汪维)" href="/winse"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/27823/e5a8ce.jpg!md"></a></div>
                                <div class="infos">
                                    <div class="info">
          <span class="name">
            <a class="user-name" data-name="汪维" href="/winse">winse</a>
          </span>
                                        <span class="sub-info">
            <span class="floor">#1</span> ·
            <a class="time" href="#reply-339030"><abbr class="timeago" title="2018年03月07日">18 小时前</abbr></a>
          </span>
                                        <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="27823" title="修改回帖" href="/topics/35190/replies/339030/edit"></a>
              <a data-id="339030" data-login="winse" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="339030" class="likeable deactive" href="#"><i class="fa fa-heart"></i> <span></span></a>
          </span>
                                    </div>

                                    <div class="markdown">
                                        <p><a href="https://segmentfault.com/a/1190000003874442" rel="nofollow" target="_blank">https://segmentfault.com/a/1190000003874442</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reply" data-id="339031" id="reply2">
                            <div id="reply-339031" data-floor="2">
                                <div class="avatar"><a title="yfractal (yang)" href="/yfractal"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/7072.jpg!md"></a></div>
                                <div class="infos">
                                    <div class="info">
          <span class="name">
            <a class="user-name" data-name="yang" href="/yfractal">yfractal</a>
          </span>
                                        <span class="sub-info">
            <span class="floor">#2</span> ·
            <a class="time" href="#reply-339031"><abbr class="timeago" title="2018年03月07日">18 小时前</abbr></a>
          </span>
                                        <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="7072" title="修改回帖" href="/topics/35190/replies/339031/edit"></a>
              <a data-id="339031" data-login="yfractal" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="339031" class="likeable deactive" href="#"><i class="fa fa-heart"></i> <span></span></a>
          </span>
                                    </div>

                                    <div class="markdown">
                                        <p><a href="https://gist.github.com/oivoodoo/5089237" rel="nofollow" target="_blank">https://gist.github.com/oivoodoo/5089237</a></p>

                                        <p>不是很好用，到至少能用。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reply reply-deleted" data-id="339049" id="reply3">
                            <div id="reply-339049" data-floor="3">
                                <div class="deleted text-center">3楼 已删除</div>
                            </div>
                        </div>
                        <div class="reply" data-id="339051" id="reply4">
                            <div id="reply-339051" data-floor="4">
                                <div class="avatar"><a title="OrderSun (Di.Diao)" href="/OrderSun"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/31774/757211.jpeg!md"></a></div>
                                <div class="infos">
                                    <div class="info">
          <span class="name">
            <a class="user-name" data-name="Di.Diao" href="/OrderSun">OrderSun</a>
          </span>
                                        <span class="sub-info">
            <span class="floor">#4</span> ·
            <a class="time" href="#reply-339051"><abbr class="timeago" title="2018年03月08日">7 小时前</abbr></a>
          </span>
                                        <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="31774" title="修改回帖" href="/topics/35190/replies/339051/edit"></a>
              <a data-id="339051" data-login="OrderSun" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="339051" class="likeable deactive" href="#"><i class="fa fa-heart"></i> <span></span></a>
          </span>
                                    </div>
                                    <div class="reply-to-block" data-reply-to-id="339031">
                                        <div class="info">
                                            对
                                            <a data-remote="true" href="/topics/35190/replies/339051/reply_to">
                                                <img class="media-object avatar-16" src="https://l.ruby-china.org/user/avatar/7072.jpg!xs"><span class="user-name">yfractal</span>
                                                <span class="reply-floor">#2</span>
                                            </a>      回复
                                        </div>
                                    </div>

                                    <div class="markdown">
                                        <p>这个打不开，需要翻墙么？</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reply reply-deleted" data-id="339059" id="reply5">
                            <div id="reply-339059" data-floor="5">
                                <div class="deleted text-center">5楼 已删除</div>
                            </div>
                        </div>
                        <div class="reply" data-id="339063" id="reply6">
                            <div id="reply-339063" data-floor="6">
                                <div class="avatar"><a title="yfractal (yang)" href="/yfractal"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/7072.jpg!md"></a></div>
                                <div class="infos">
                                    <div class="info">
          <span class="name">
            <a class="user-name" data-name="yang" href="/yfractal">yfractal</a>
          </span>
                                        <span class="sub-info">
            <span class="floor">#6</span> ·
            <a class="time" href="#reply-339063"><abbr class="timeago" title="2018年03月08日">5 小时前</abbr></a>
          </span>
                                        <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="7072" title="修改回帖" href="/topics/35190/replies/339063/edit"></a>
              <a data-id="339063" data-login="yfractal" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="339063" class="likeable deactive" href="#"><i class="fa fa-heart"></i> <span></span></a>
          </span>
                                    </div>
                                    <div class="reply-to-block" data-reply-to-id="339051">
                                        <div class="info">
                                            对
                                            <a data-remote="true" href="/topics/35190/replies/339063/reply_to">
                                                <img class="media-object avatar-16" src="https://l.ruby-china.org/user/avatar/31774/757211.jpeg!xs"><span class="user-name">OrderSun</span>
                                                <span class="reply-floor">#4</span>
                                            </a>      回复
                                        </div>
                                    </div>

                                    <div class="markdown">
                                        <p>gits 应该要吧，
                                            或者这个 gem <a href="https://github.com/syedmusamah/grape_on_rails_routes" rel="nofollow" target="_blank">https://github.com/syedmusamah/grape_on_rails_routes</a> ？（这个 gem 我没用过）</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reply" data-id="339068" id="reply7">
                            <div id="reply-339068" data-floor="7">
                                <div class="avatar"><a title="OrderSun (Di.Diao)" href="/OrderSun"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/31774/757211.jpeg!md"></a></div>
                                <div class="infos">
                                    <div class="info">
          <span class="name">
            <a class="user-name" data-name="Di.Diao" href="/OrderSun">OrderSun</a>
          </span>
                                        <span class="sub-info">
            <span class="floor">#7</span> ·
            <a class="time" href="#reply-339068"><abbr class="timeago" title="2018年03月08日">4 小时前</abbr></a>
          </span>
                                        <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="31774" title="修改回帖" href="/topics/35190/replies/339068/edit"></a>
              <a data-id="339068" data-login="OrderSun" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="339068" class="likeable deactive" href="#"><i class="fa fa-heart"></i> <span></span></a>
          </span>
                                    </div>
                                    <div class="reply-to-block" data-reply-to-id="339063">
                                        <div class="info">
                                            对
                                            <a data-remote="true" href="/topics/35190/replies/339068/reply_to">
                                                <img class="media-object avatar-16" src="https://l.ruby-china.org/user/avatar/7072.jpg!xs"><span class="user-name">yfractal</span>
                                                <span class="reply-floor">#6</span>
                                            </a>      回复
                                        </div>
                                    </div>

                                    <div class="markdown">
                                        <p>2楼的方案挺好的。之前我也看到了，感觉挺麻烦，配置好了确实不错。那个帖子有点老，需要跟新gem。</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="reply" class="form box">
                            <div style="padding:20px;" data-turbolinks-action="replace">
                                需要 <a class="btn btn-primary" href="/account/sign_in">登录</a> 后方可回复, 如果你还没有账号请点击这里 <a class="btn btn-danger" href="/account/sign_up">注册</a>。
                            </div>
                        </div>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">相关话题</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/topics/27122">Grape 的 JSON 参数验证，以及 nested params 问题</a></li>
                        <li class="list-group-item"><a href="/topics/31958">Grape 过滤器如何过滤掉 API 方法 (语法不清楚)</a></li>
                        <li class="list-group-item"><a href="/topics/31021">如果不用 Rails 的话,哪些 gem 不能用?</a></li>
                        <li class="list-group-item"><a href="/topics/24697">Grape 片段缓存</a></li>
                        <li class="list-group-item"><a href="/topics/28999">Grape 方法小汇！</a></li>
                    </ul>
                </div>

            </div>

            <div class="sidebar hidden-mobile col-md-3">
                <div id="topic-sidebar" data-spy="affix" data-offset-bottom="65" class="affix">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="#" class="btn btn-block btn-sm btn-move-page" data-type="top"><i class="fa fa-arrow-up"></i></a>
                            <div class="buttons">
                                <div class="group likes opts">
                                    <a title="赞" data-count="0" data-state="deactive" data-type="Topic" data-id="35190" class="likeable deactive" href="#"><i class="fa fa-heart"></i> <span></span></a>
                                </div>
                                <div class="group">
                                    <div class="btn-group" role="group">


                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="group">
                                <div class="social-share-button" data-title="[求助] Grape 如何查看生成的 URI？" data-img="" data-url="" data-desc="" data-via="">
                                    <a rel="nofollow " data-site="twitter" class="ssb-icon ssb-twitter" onclick="return SocialShareButton.share(this);" title="分享到 Twitter" href="#"></a>
                                    <a rel="nofollow " data-site="wechat" class="ssb-icon ssb-wechat" onclick="return SocialShareButton.share(this);" title="分享到 微信" data-wechat-footer="打开微信，点击底部的 “发现”，<br/> 使用 “扫一扫” 即可将网页分享至朋友圈。" href="#"></a>
                                    <a rel="nofollow " data-site="facebook" class="ssb-icon ssb-facebook" onclick="return SocialShareButton.share(this);" title="分享到 Facebook" href="#"></a>
                                    <a rel="nofollow " data-site="google_plus" class="ssb-icon ssb-google_plus" onclick="return SocialShareButton.share(this);" title="分享到 Google+" href="#"></a>
                                    <a rel="nofollow " data-site="weibo" class="ssb-icon ssb-weibo" onclick="return SocialShareButton.share(this);" title="分享到 新浪微博" href="#"></a>
                                    <a rel="nofollow " data-site="douban" class="ssb-icon ssb-douban" onclick="return SocialShareButton.share(this);" title="分享到 豆瓣" href="#"></a>
                                </div>
                            </div>
                            <hr>
                            <div class="reply-buttons">
                                <div class="total">
                                    共收到 <b>5</b> 条回复
                                </div>

                            </div>
                            <hr>
                            <div class="group opts">

                            </div>
                            <a href="#" class="btn btn-block btn-move-page" data-type="bottom"><i class="fa fa-arrow-down"></i></a>
                        </div>
                    </div>

                    <div class="notify-updated">
                        <a class="update" href="#"><i class="fa fa-bell-o"></i> <b>有新回复！</b>点击这里立即载入</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
