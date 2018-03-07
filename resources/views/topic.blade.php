<html>
<head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>社区 · Ruby China</title>
    <meta name="apple-mobile-web-app-capable" content="no">
    <meta content='True' name='HandheldFriendly' />
    <link rel="alternate" type="application/rss+xml" title="订阅最新帖" href="https://ruby-china.org/topics/feed" />
    <link rel="stylesheet" media="screen" href="{{asset('css/app-476.css')}}" data-turbolinks-track="reload" />


    <meta name="action-cable-url" content="/cable" />
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="h+r9WAqUWc6gL4M41Zw1FJguQCAr4DUH92VPPKdYvWCvf+9LunLtJ13OrKCWhSWZThd21KQVaBazk5jIB4GQxg==" />
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
<body class="page-topics" data-controller-name="topics">
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
                        <li class="active"><a href="/topics">社区</a></li><li class=""><a href="/jobs">招聘</a></li><li class=""><a href="/wiki">Wiki</a></li><li class=""><a href="/sites">酷站</a></li>
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

<div class="sub-navbar node-header hide-ios">
    <div class="container">
        <div class="modal" id="node-selector" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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

                    </div>
                </div>
            </div>
        </div>

        <ul class="filter nav nav-pills">
            <li><a href="#" class="all-nodes" data-toggle="modal" data-target="#node-selector">所有节点 <span class="caret-right"></span></a></li>
            <li class=" active">
                <a href="/topics" data-turbolinks-action="replace">默认</a>
            </li>
            <li class="">
                <a href="/topics/popular" data-turbolinks-action="replace"><i class="fa fa-diamond"></i> 优质帖子</a>
            </li>
            <li class="">
                <a data-turbolinks-action="replace" href="/topics/no_reply">无人问津</a>
            </li>
            <li class="">
                <a data-turbolinks-action="replace" href="/topics/last">最新发布</a>
            </li>
        </ul>
    </div>
</div>


<div id="main" class="main-container container">



    <!-- @suggest_topics maybe nil or ActiveRecord::Relation, but we need an array -->



    <div class="row">
        <div class="col-md-9">
            <div class="topics topics-index panel panel-default">

                <div class="panel-body item-list">
                    <div class="topic media topic-35052">
                        <div class="avatar media-left">
                            <a title="ryudoawaru (Mu-Fan teng)" href="/ryudoawaru"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/5841.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="RubyElixirConf Taiwan 2018 售票开始！" href="/topics/35052">
                                    <span class="node">RubyConf</span>
                                    RubyElixirConf Taiwan 2018 售票开始！
                                </a>        <i class="fa fa-angle-double-up" title="置顶"></i>


                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Mu-Fan teng" href="/ryudoawaru">ryudoawaru</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="qq1695381214" href="/qq1695381214">qq1695381214</a> 回复于 <abbr class="timeago" title="2018-03-06T21:03:26+08:00">2018年03月06日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35052#reply-338942">6</a>
                        </div>
                    </div>


                    <div class="topic media topic-35106">
                        <div class="avatar media-left">
                            <a title="dmycnm" href="/dmycnm"><img class="media-object avatar-48" src="https://ruby-china.org/system/letter_avatars/2/D/149_114_207/96.png" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="如何用 Ruby 写一个图片上传到服务器的方法" href="/topics/35106">
                                    <span class="node">新手问题</span>
                                    如何用 Ruby 写一个图片上传到服务器的方法
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="dmycnm" href="/dmycnm">dmycnm</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="dmycnm" href="/dmycnm">dmycnm</a> 回复于 <abbr class="timeago" title="2018-03-07T09:33:04+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35106#reply-338976">5</a>
                        </div>
                    </div>
                    <div class="topic media topic-35189">
                        <div class="avatar media-left">
                            <a title="apkbus (寂小桦)" href="/apkbus"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/23882.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="求点评下我做的 Markdown 编辑器，支持序列图、甘特图、Mermaid 流程图以及 LaTeX 公式" href="/topics/35189">
                                    <span class="node">产品控</span>
                                    求点评下我做的 Markdown 编辑器，支持序列图、甘特图、Mermaid 流程图以及 LaTeX 公式
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="寂小桦" href="/apkbus">apkbus</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="yfractal" href="/yfractal">yfractal</a> 回复于 <abbr class="timeago" title="2018-03-07T22:48:48+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35189#reply-339032">6</a>
                        </div>
                    </div>
                    <div class="topic media topic-35190">
                        <div class="avatar media-left">
                            <a title="OrderSun (Di.Diao)" href="/OrderSun"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/31774/757211.jpeg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[求助] Grape 如何查看生成的 URI？" href="/topics/35190">
                                    <span class="node">Gem</span>
                                    [求助] Grape 如何查看生成的 URI？
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Di.Diao" href="/OrderSun">OrderSun</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="yfractal" href="/yfractal">yfractal</a> 回复于 <abbr class="timeago" title="2018-03-07T22:44:19+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35190#reply-339031">2</a>
                        </div>
                    </div>
                    <div class="topic media topic-35184">
                        <div class="avatar media-left">
                            <a title="wfwdex (wfwdex)" href="/wfwdex"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/19842.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="服务器负载过高怎样优化？" href="/topics/35184">
                                    <span class="node">Rails</span>
                                    服务器负载过高怎样优化？
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="wfwdex" href="/wfwdex">wfwdex</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="Rei" href="/Rei">Rei</a> 回复于 <abbr class="timeago" title="2018-03-07T20:33:38+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35184#reply-339026">17</a>
                        </div>
                    </div>
                    <div class="topic media topic-35188">
                        <div class="avatar media-left">
                            <a title="Iacob" href="/Iacob"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/664/4e285f.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[天津] 颐博数码科技有限公司诚聘区块链应用开发工程师，区块链专家，以太坊合约开发工程师，硅谷级薪资，有搬家费" href="/topics/35188">
                                    <span class="node">招聘</span>
                                    [天津] 颐博数码科技有限公司诚聘区块链应用开发工程师，区块链专家，以太坊合约开发工程师，硅谷级薪资，有搬家费
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="" href="/Iacob">Iacob</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="zhou1_zhen2" href="/zhou1_zhen2">zhou1_zhen2</a> 回复于 <abbr class="timeago" title="2018-03-07T20:40:57+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35188#reply-339028">2</a>
                        </div>
                    </div>
                    <div class="topic media topic-35185">
                        <div class="avatar media-left">
                            <a title="rocLv (rocLv)" href="/rocLv"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/14099/3a5cee.png!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[郑州] 河南百川环境科技有限公司招聘 Rails 工程师" href="/topics/35185">
                                    <span class="node">招聘</span>
                                    [郑州] 河南百川环境科技有限公司招聘 Rails 工程师
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="rocLv" href="/rocLv">rocLv</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="zhou1_zhen2" href="/zhou1_zhen2">zhou1_zhen2</a> 回复于 <abbr class="timeago" title="2018-03-07T20:39:21+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35185#reply-339027">10</a>
                        </div>
                    </div>
                    <div class="topic media topic-35135">
                        <div class="avatar media-left">
                            <a title="cqcn1991 (子珂)" href="/cqcn1991"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/3873.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="想问下，这 2 个东西怎么实现？" href="/topics/35135">
                                    <span class="node">瞎扯淡</span>
                                    想问下，这 2 个东西怎么实现？
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="子珂" href="/cqcn1991">cqcn1991</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="cqcn1991" href="/cqcn1991">cqcn1991</a> 回复于 <abbr class="timeago" title="2018-03-07T19:58:16+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35135#reply-339023">16</a>
                        </div>
                    </div>
                    <div class="topic media topic-35154">
                        <div class="avatar media-left">
                            <a title="Yicheng (Yicheng Technology)" href="/Yicheng"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/34456/c52f6a.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[深圳] 壹成科技招聘 Ruby 初级工程师 / 实习生 (3 名)" href="/topics/35154">
                                    <span class="node">招聘</span>
                                    [深圳] 壹成科技招聘 Ruby 初级工程师 / 实习生 (3 名)
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Yicheng Technology" href="/Yicheng">Yicheng</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="houchuanhao" href="/houchuanhao">houchuanhao</a> 回复于 <abbr class="timeago" title="2018-03-07T17:14:40+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35154#reply-339015">2</a>
                        </div>
                    </div>
                    <div class="topic media topic-35111">
                        <div class="avatar media-left">
                            <a title="runye-meta (明明泡)" href="/runye-meta"><img class="media-object avatar-48" src="https://ruby-china.org/system/letter_avatars/2/R/143_164_175/96.png" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[上海 / 浦东] 交大创业公司迈科技-MetaLab 招聘 Ruby 后端工程师" href="/topics/35111">
                                    <span class="node">招聘</span>
                                    [上海 / 浦东] 交大创业公司迈科技-MetaLab 招聘 Ruby 后端工程师
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="明明泡" href="/runye-meta">runye-meta</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="babyhai" href="/babyhai">babyhai</a> 回复于 <abbr class="timeago" title="2018-03-07T13:57:12+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35111#reply-339007">5</a>
                        </div>
                    </div>
                    <div class="topic media topic-35139">
                        <div class="avatar media-left">
                            <a title="hooopo (Hooopo)" href="/hooopo"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/8.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[北京] 星起招聘 Ruby 工程师" href="/topics/35139">
                                    <span class="node">招聘</span>
                                    [北京] 星起招聘 Ruby 工程师
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Hooopo" href="/hooopo">hooopo</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="hooopo" href="/hooopo">hooopo</a> 回复于 <abbr class="timeago" title="2018-03-07T13:08:46+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35139#reply-339005">13</a>
                        </div>
                    </div>
                    <div class="topic media topic-35181">
                        <div class="avatar media-left">
                            <a title="warmwind (姜鹏)" href="/warmwind"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/7754.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[成都 / 西安] 金数据招聘 Rails 工程师" href="/topics/35181">
                                    <span class="node">招聘</span>
                                    [成都 / 西安] 金数据招聘 Rails 工程师
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="姜鹏" href="/warmwind">warmwind</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="lhy20062008" href="/lhy20062008">lhy20062008</a> 回复于 <abbr class="timeago" title="2018-03-07T13:04:57+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35181#reply-339004">7</a>
                        </div>
                    </div>
                    <div class="topic media topic-35138">
                        <div class="avatar media-left">
                            <a title="westbon (西游帮)" href="/westbon"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/18654.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[美国芝加哥 / 中国上海] 西游帮诚聘全栈工程师 2 名" href="/topics/35138">
                                    <span class="node">招聘</span>
                                    [美国芝加哥 / 中国上海] 西游帮诚聘全栈工程师 2 名
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="西游帮" href="/westbon">westbon</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="hrz3424-github" href="/hrz3424-github">hrz3424-github</a> 回复于 <abbr class="timeago" title="2018-03-07T12:44:09+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35138#reply-339003">3</a>
                        </div>
                    </div>
                    <div class="topic media topic-35101">
                        <div class="avatar media-left">
                            <a title="saberma (saberma)" href="/saberma"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/216.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[深圳] DJI 大疆创新招聘 Ruby 工程师 (saberma 内推 15-40k)" href="/topics/35101">
                                    <span class="node">招聘</span>
                                    [深圳] DJI 大疆创新招聘 Ruby 工程师 (saberma 内推 15-40k)
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="saberma" href="/saberma">saberma</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="saberma" href="/saberma">saberma</a> 回复于 <abbr class="timeago" title="2018-03-07T11:59:36+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35101#reply-339000">8</a>
                        </div>
                    </div>
                    <div class="topic media topic-35178">
                        <div class="avatar media-left">
                            <a title="jl5161 (未央客)" href="/jl5161"><img class="media-object avatar-48" src="https://ruby-china.org/system/letter_avatars/2/J/82_188_137/96.png" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="如何调整已经创建的 model 的 column 的顺序" href="/topics/35178">
                                    <span class="node">Rails</span>
                                    如何调整已经创建的 model 的 column 的顺序
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="未央客" href="/jl5161">jl5161</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="jl5161" href="/jl5161">jl5161</a> 回复于 <abbr class="timeago" title="2018-03-07T11:56:48+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35178#reply-338999">14</a>
                        </div>
                    </div>
                    <div class="topic media topic-35131">
                        <div class="avatar media-left">
                            <a title="falm (Jason)" href="/falm"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/3400/e0fcf5.jpeg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[上海] 薄荷科技 2018 诚聘 Ruby 工程师" href="/topics/35131">
                                    <span class="node">招聘</span>
                                    [上海] 薄荷科技 2018 诚聘 Ruby 工程师
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Jason" href="/falm">falm</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="stormzhang" href="/stormzhang">stormzhang</a> 回复于 <abbr class="timeago" title="2018-03-07T11:51:09+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35131#reply-338998">16</a>
                        </div>
                    </div>
                    <div class="topic media topic-35057">
                        <div class="avatar media-left">
                            <a title="gztheknot (广州诺特)" href="/gztheknot"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/11451.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[广州] Ruby on Rails 急招 (各位狗年大吉，事业旺旺旺)" href="/topics/35057">
                                    <span class="node">招聘</span>
                                    [广州] Ruby on Rails 急招 (各位狗年大吉，事业旺旺旺)
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="广州诺特" href="/gztheknot">gztheknot</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="harris_rubychina" href="/harris_rubychina">harris_rubychina</a> 回复于 <abbr class="timeago" title="2018-03-07T11:07:07+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35057#reply-338995">2</a>
                        </div>
                    </div>
                    <div class="topic media topic-35187">
                        <div class="avatar media-left">
                            <a title="huyuan17 (毛皮熊酋长)" href="/huyuan17"><img class="media-object avatar-48" src="https://ruby-china.org/system/letter_avatars/2/H/69_208_226/96.png" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[上海] 牛牛汽车招聘 Ruby 工程师 15-35K" href="/topics/35187">
                                    <span class="node">Ruby</span>
                                    [上海] 牛牛汽车招聘 Ruby 工程师 15-35K
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="毛皮熊酋长" href="/huyuan17">huyuan17</a>
                                <span class="hidden-mobile">
      •
        发布于 <abbr class="timeago" title="2018-03-07T11:05:57+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                        </div>
                    </div>
                    <div class="topic media topic-35186">
                        <div class="avatar media-left">
                            <a title="zhangzitao (zitao)" href="/zhangzitao"><img class="media-object avatar-48" src="https://ruby-china.org/system/letter_avatars/2/Z/173_214_125/96.png" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="练手做的一个 Rails 5 项目 Airoom，开源中" href="/topics/35186">
                                    <span class="node">Rails</span>
                                    练手做的一个 Rails 5 项目 Airoom，开源中
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="zitao" href="/zhangzitao">zhangzitao</a>
                                <span class="hidden-mobile">
      •
        发布于 <abbr class="timeago" title="2018-03-07T10:48:40+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                        </div>
                    </div>
                    <div class="topic media topic-35183">
                        <div class="avatar media-left">
                            <a title="ceclinux-github (ceclinux)" href="/ceclinux-github"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/32084/43585f.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="是不是我学习的姿势不对？Rails 路由我总是理解不好" href="/topics/35183">
                                    <span class="node">Rails</span>
                                    是不是我学习的姿势不对？Rails 路由我总是理解不好
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="ceclinux" href="/ceclinux-github">ceclinux-github</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="glz1992" href="/glz1992">glz1992</a> 回复于 <abbr class="timeago" title="2018-03-07T10:05:01+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35183#reply-338983">6</a>
                        </div>
                    </div>
                    <div class="topic media topic-35141">
                        <div class="avatar media-left">
                            <a title="yuxin" href="/yuxin"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/33186/7c5e50.jpeg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="用 Bear Note 专心写博客" href="/topics/35141">
                                    <span class="node">分享</span>
                                    用 Bear Note 专心写博客
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="" href="/yuxin">yuxin</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="yuxin" href="/yuxin">yuxin</a> 回复于 <abbr class="timeago" title="2018-03-07T10:01:27+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35141#reply-338982">4</a>
                        </div>
                    </div>
                    <div class="topic media topic-35130">
                        <div class="avatar media-left">
                            <a title="Aiken00" href="/Aiken00"><img class="media-object avatar-48" src="https://ruby-china.org/system/letter_avatars/2/A/226_95_81/96.png" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="Netflix 發佈的 JSON Serializer，比 Active Model Serializer 的快二十多倍" href="/topics/35130">
                                    <span class="node">Gem</span>
                                    Netflix 發佈的 JSON Serializer，比 Active Model Serializer 的快二十多倍
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="" href="/Aiken00">Aiken00</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="lulalala" href="/lulalala">lulalala</a> 回复于 <abbr class="timeago" title="2018-03-07T09:54:34+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35130#reply-338981">9</a>
                        </div>
                    </div>
                    <div class="topic media topic-35010">
                        <div class="avatar media-left">
                            <a title="tq0fqeu (石神)" href="/tq0fqeu"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/10919/909f12.jpeg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[杭州 / 北京] 阿里巴巴研发协同平台招聘 Java/Ruby/ 全栈 / 实习生 / 校招 研发工程师" href="/topics/35010">
                                    <span class="node">招聘</span>
                                    [杭州 / 北京] 阿里巴巴研发协同平台招聘 Java/Ruby/ 全栈 / 实习生 / 校招 研发工程师
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="石神" href="/tq0fqeu">tq0fqeu</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="tq0fqeu" href="/tq0fqeu">tq0fqeu</a> 回复于 <abbr class="timeago" title="2018-03-07T09:36:14+08:00">2018年03月07日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35010#reply-338979">17</a>
                        </div>
                    </div>
                    <div class="topic media topic-35054">
                        <div class="avatar media-left">
                            <a title="hanluner" href="/hanluner"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/4209.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title=" [北京] 新春开工招聘第一波，计算机视觉人工智能公司 Linkface 招聘 Ruby 工程师 2-3 名和前端工程师 2 名" href="/topics/35054">
                                    <span class="node">招聘</span>
                                    [北京] 新春开工招聘第一波，计算机视觉人工智能公司 Linkface 招聘 Ruby 工程师 2-3 名和前端工程师 2 名
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="" href="/hanluner">hanluner</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="wuguzaliang" href="/wuguzaliang">wuguzaliang</a> 回复于 <abbr class="timeago" title="2018-03-06T22:59:40+08:00">2018年03月06日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35054#reply-338950">13</a>
                        </div>
                    </div>
                    <div class="topic media topic-35182">
                        <div class="avatar media-left">
                            <a title="fresh_fish (jimmy)" href="/fresh_fish"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/395.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[北京] 店秀科技招聘 Ruby 工程师" href="/topics/35182">
                                    <span class="node">招聘</span>
                                    [北京] 店秀科技招聘 Ruby 工程师
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="jimmy" href="/fresh_fish">fresh_fish</a>
                                <span class="hidden-mobile">
      •
        发布于 <abbr class="timeago" title="2018-03-06T21:18:12+08:00">2018年03月06日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                        </div>
                    </div>
                    <div class="topic media topic-35046">
                        <div class="avatar media-left">
                            <a title="a112121788 (高帅朋)" href="/a112121788"><img class="media-object avatar-48" src="https://l.ruby-china.org/user/avatar/29068.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[上海] 康保信息 招 后台开发工程师" href="/topics/35046">
                                    <span class="node">招聘</span>
                                    [上海] 康保信息 招 后台开发工程师
                                </a>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="高帅朋" href="/a112121788">a112121788</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="a112121788" href="/a112121788">a112121788</a> 回复于 <abbr class="timeago" title="2018-03-06T21:07:29+08:00">2018年03月06日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/35046#reply-338943">3</a>
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

            <!--div class="panel panel-default">
              <div class="panel-body" style="padding:0;">
                <a href="https://www.upyun.com/solutions/wechat?utm_source=ruby&utm_medium=Referral&utm_content=ad" target="_blank" title="又拍云小程序解决方案"><img src="https://l.ruby-china.org/photo/2018/88b504a3-e0ea-45df-b734-b423a4a978e8.jpg!large" style="width: 100%;" /></a>
              </div>
            </div-->

            <!--div class="panel panel-default">
              <div class="panel-body" style="padding:0;">
                <a href="https://ruby-china.org/topics/33101" target="_blank" title="彩程招聘"><img src="https://l.ruby-china.org/photo/2017/b9f1a286-23b3-4723-b4e9-289d170a8de9.png" style="max-width: 100%;" /></a>
              </div>
            </div-->

            <!--div class="panel panel-default">
              <div class="panel-body" style="padding:0;">
                <a href="http://click.dji.com/AIJJg_CBhb8KTNldmSQN" target="_blank" title="DJI Spark"><img src="https://l.ruby-china.org/photo/2017/ed190b28-fe32-4627-b8d5-fe3bc5892749.jpg" style="max-width: 100%;" /></a>
              </div>
            </div-->

            <!--div class="panel panel-default">
              <div class="panel-body" style="padding:0;">
                <a href="https://cn.100offer.com/how-it-works/?utm_source=rubychina&utm_medium=display&utm_campaign=rubychina_20170210&utm_content=find_new_job&campaign_code=rubychina" target="_blank"><img src="//l.ruby-china.org/photo/2017/1c62f73effde5d238d9dc5ba2d8bd2c2.png" style="width: 100%;" /></a>
              </div>
            </div-->

            <!--div class="panel panel-default">
              <div class="panel-body" style="padding:0;">
                <a href="https://www.upyun.com/https.html?utm_source=ruby&utm_medium=Referral&utm_content=httpsad" target="_blank"><img src="//l.ruby-china.org/photo/2017/92296916a6570160aa0c49fd75c4a5f1.jpg" style="width: 100%;" /></a>
              </div>
            </div-->

            <!--div class="panel panel-default">
              <div class="panel-body" style="padding:0;">
                <a href="https://eggman.tv/serials?adsr=rubychina&ad=4bunxlsb" target="_blank"><img src="//l.ruby-china.org/photo/2017/4f71b619c026096cac933dfd8dcc4624.png" style="width: 100%;" /></a>
              </div>
            </div-->


            <!--<div class="panel panel-default">
              <div class="panel-body" style="padding:0;">
                <a href="//ruby-china.org/topics/33466" title="RubyConf China 2017"><img src="//l.ruby-china.org/photo/2017/86a069c9-4259-411a-b5ee-f2405b1f19a0.png" style="width: 100%;" /></a>
              </div>
            </div>-->

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