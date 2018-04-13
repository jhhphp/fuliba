@extends('layouts.app')

@section('content')

    <link href="{{asset('css/jquery.qeditor.css')}}" rel="stylesheet">
    <div id="main" class="main-container container">



        <div class="panel panel-default">
            <div class="panel-heading hide-ios">发布新话题</div>
            <div class="panel-body">
                <div class="modal" id="node-selector" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>话题节点</strong>
                            </div>
                            <div class="modal-body">
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
            <span class="name"><a title="开源项目" data-id="47" href="/topics/node47">开源项目</a></span>
            <span class="name"><a title="测试" data-id="37" href="/topics/node37">测试</a></span>
            <span class="name"><a title="求职" data-id="64" href="/topics/node64">求职</a></span>
            <span class="name"><a title="mRuby" data-id="66" href="/topics/node66">mRuby</a></span>
            <span class="name"><a title="重构" data-id="29" href="/topics/node29">重构</a></span>
            <span class="name"><a title="JRuby" data-id="54" href="/topics/node54">JRuby</a></span>
            <span class="name"><a title="RVM/rbenv" data-id="45" href="/topics/node45">RVM/rbenv</a></span>
        </span>
                                            </div>
                                            <div class="node media">
                                                <label class="media-left">其他语言</label>
                                                <span class="nodes media-body">
            <span class="name"><a title="Crystal" data-id="67" href="/topics/node67">Crystal</a></span>
            <span class="name"><a title="Rust" data-id="70" href="/topics/node70">Rust</a></span>
            <span class="name"><a title="Erlang/Elixir" data-id="35" href="/topics/node35">Erlang/Elixir</a></span>
            <span class="name"><a title="Go" data-id="34" href="/topics/node34">Go</a></span>
            <span class="name"><a title="Clojure" data-id="58" href="/topics/node58">Clojure</a></span>
            <span class="name"><a title="Dotnet" data-id="76" href="/topics/node76">Dotnet</a></span>
            <span class="name"><a title="Node.js" data-id="75" href="/topics/node75">Node.js</a></span>
            <span class="name"><a title="ObjC/Swift" data-id="48" href="/topics/node48">ObjC/Swift</a></span>
            <span class="name"><a title="Python" data-id="4" href="/topics/node4">Python</a></span>
            <span class="name"><a title="Haskell" data-id="59" href="/topics/node59">Haskell</a></span>
        </span>
                                            </div>
                                            <div class="node media">
                                                <label class="media-left">Front-End</label>
                                                <span class="nodes media-body">
            <span class="name"><a title="HTML/CSS" data-id="41" href="/topics/node41">HTML/CSS</a></span>
            <span class="name"><a title="EmberJS" data-id="73" href="/topics/node73">EmberJS</a></span>
            <span class="name"><a title="React" data-id="72" href="/topics/node72">React</a></span>
            <span class="name"><a title="JavaScript" data-id="5" href="/topics/node5">JavaScript</a></span>
            <span class="name"><a title="AngularJS" data-id="71" href="/topics/node71">AngularJS</a></span>
            <span class="name"><a title="Vue" data-id="77" href="/topics/node77">Vue</a></span>
        </span>
                                            </div>
                                            <div class="node media">
                                                <label class="media-left">Back-End</label>
                                                <span class="nodes media-body">
            <span class="name"><a title="数据库" data-id="12" href="/topics/node12">数据库</a></span>
            <span class="name"><a title="Git" data-id="11" href="/topics/node11">Git</a></span>
            <span class="name"><a title="运维" data-id="55" href="/topics/node55">运维</a></span>
            <span class="name"><a title="Redis" data-id="10" href="/topics/node10">Redis</a></span>
            <span class="name"><a title="Nginx" data-id="18" href="/topics/node18">Nginx</a></span>
            <span class="name"><a title="Linux" data-id="17" href="/topics/node17">Linux</a></span>
            <span class="name"><a title="Mailer" data-id="46" href="/topics/node46">Mailer</a></span>
            <span class="name"><a title="算法" data-id="40" href="/topics/node40">算法</a></span>
            <span class="name"><a title="搜索引擎" data-id="39" href="/topics/node39">搜索引擎</a></span>
            <span class="name"><a title="安全" data-id="60" href="/topics/node60">安全</a></span>
            <span class="name"><a title="云服务" data-id="20" href="/topics/node20">云服务</a></span>
            <span class="name"><a title="MongoDB" data-id="9" href="/topics/node9">MongoDB</a></span>
        </span>
                                            </div>
                                            <div class="node media">
                                                <label class="media-left">Mobile</label>
                                                <span class="nodes media-body">
            <span class="name"><a title="RubyMotion" data-id="74" href="/topics/node74">RubyMotion</a></span>
            <span class="name"><a title="iOS" data-id="32" href="/topics/node32">iOS</a></span>
            <span class="name"><a title="Android" data-id="33" href="/topics/node33">Android</a></span>
        </span>
                                            </div>
                                            <div class="node media">
                                                <label class="media-left">分享</label>
                                                <span class="nodes media-body">
            <span class="name"><a title="瞎扯淡" data-id="27" href="/topics/node27">瞎扯淡</a></span>
            <span class="name"><a title="分享" data-id="26" href="/topics/node26">分享</a></span>
            <span class="name"><a title="开发工具" data-id="24" href="/topics/node24">开发工具</a></span>
            <span class="name"><a title="书籍" data-id="38" href="/topics/node38">书籍</a></span>
            <span class="name"><a title="创业" data-id="56" href="/topics/node56">创业</a></span>
            <span class="name"><a title="移民" data-id="62" href="/topics/node62">移民</a></span>
            <span class="name"><a title="数学" data-id="53" href="/topics/node53">数学</a></span>
            <span class="name"><a title="音乐" data-id="78" href="/topics/node78">音乐</a></span>
            <span class="name"><a title="翻译" data-id="68" href="/topics/node68">翻译</a></span>
            <span class="name"><a title="产品控" data-id="30" href="/topics/node30">产品控</a></span>
            <span class="name"><a title="插画 / 设计" data-id="50" href="/topics/node50">插画 / 设计</a></span>
            <span class="name"><a title="产品推广" data-id="69" href="/topics/node69">产品推广</a></span>
            <span class="name"><a title="Mac" data-id="42" href="/topics/node42">Mac</a></span>
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
            <span class="name"><a title="线下活动" data-id="57" href="/topics/node57">线下活动</a></span>
            <span class="name"><a title="RubyConf" data-id="51" href="/topics/node51">RubyConf</a></span>
            <span class="name"><a title="RubyTuesday" data-id="31" href="/topics/node31">RubyTuesday</a></span>
        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <form class="simple_form form" id="new_topic" tb="edit-topic" novalidate="novalidate" action="/topics" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓">

                    <input type="hidden" name="topic[node_id]" id="topic_node_id">

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default" id="node-selector-button" data-toggle="modal" data-target="#node-selector">选择节点...</button>
                            </div>
                            <input class="form-control" placeholder="在这里填写标题" type="text" name="topic[title]" id="topic_title">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="topic-editor-dropzone dz-clickable">
                            <textarea id="post_body" class="topic-editor form-control closewarning" style="height:400px;">qediter</textarea>
                        </div>
                    </div>

                    <div class="editor-toolbar">
                        <div class="opts pull-right">
                            <a href="#" class="pickup-emoji"><i class="fa fa-smile-o"></i></a>
                            <span class="dropdown dropdown-small" id="editor-toolbar-insert-code">
      <a href="#editor-toolbar-insert-code" data-toggle="dropdown" title="插入代码"><i class="fa fa-code"></i></a>
      <ul class="dropdown-menu insert-codes" role="menu">
        <li><a data-lang="ruby" href="#">Ruby</a></li><li><a data-lang="erb" href="#">HTML / ERB</a></li><li><a data-lang="scss" href="#">CSS / SCSS</a></li><li><a data-lang="js" href="#">JavaScript</a></li><li><a data-lang="yml" href="#">YAML</a></li><li><a data-lang="coffee" href="#">CoffeeScript</a></li><li><a data-lang="conf" href="#">Nginx / Redis <i>(.conf)</i></a></li><li><a data-lang="python" href="#">Python</a></li><li><a data-lang="php" href="#">PHP</a></li><li><a data-lang="java" href="#">Java</a></li><li><a data-lang="erlang" href="#">Erlang</a></li><li><a data-lang="shell" href="#">Shell / Bash</a></li>
      </ul>
    </span>
                            <a id="editor-upload-image" rel="twipsy" title="" href="#" data-original-title="上传图片"><i class="fa fa-image"></i> </a>
                        </div>
                        <ul class="nav nav-pills" style="clear:none;">
                            <li class="edit active"><a href="#">编辑</a></li>
                            <li class="preview"><a href="#">预览</a></li>
                            <li>
                                <div class="nav reply-to" style="display:none;">
                                    <i class="fa fa-mail-reply" title="回复"></i>
                                    <a href="#" class="user"></a>
                                    <a href="#" class="close"><i class="fa fa-close"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div class="form-group">
                        <div class="topic-editor-dropzone dz-clickable"><textarea class="topic-editor form-control closewarning" rows="20" name="topic[body]" id="topic_body" style="height: 400px;"></textarea></div><div id="preview" class="markdown form-control" style="display: none;"></div>
                    </div>


                    <div class="form-group hide-ios">
                        <input type="submit" name="commit" value="保存" class="btn btn-primary col-xs-2" data-tb="save-topic" data-disable-with="正在保存">

                        <div class="pull-right hide-ios"><a href="/markdown" target="_blank"><i class="fa fa-tip"></i> 排版说明</a></div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="{{asset('js/jquery.qeditor.js')}}"></script>
    <script type="text/javascript">
        $("#post_body").qeditor({});

        $("#submit").click(function(){
            alert($("#post_body").val());
        });
    </script>
@endsection
