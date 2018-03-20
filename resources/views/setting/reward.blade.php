@extends('setting.common')
@section('name')
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <form class="simple_form edit_user" id="edit_user_34612" enctype="multipart/form-data" novalidate="novalidate" action="/setting" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="put"><input type="hidden" name="authenticity_token" value="Oxd+crOj4wNvC0UT8nxQCnixLgsp0z0+ejTl2lfjj1mPvBfKNfRDEXd/BH6dd/fGL6CC8tztUujtWhITUPy4Uw==">

                            <input type="hidden" name="by" value="reward">

                            <div class="form-group form-group-reward-field-alipay">
                                <label class="control-label" for="user_reward_alipay">支付宝</label>
                                <input class="form-control" type="file" name="user[rewards][alipay]" id="user_reward_alipay">
                                <p class="help-block">
                                    打开支付宝客户端：右上角 “+” -&gt; 我要收款 -&gt; 设定金额 -&gt; 保存二维码图片
                                </p>
                            </div>

                            <div class="form-group form-group-reward-field-wechat">
                                <label class="control-label" for="user_reward_wechat">微信</label>
                                <input class="form-control" type="file" name="user[rewards][wechat]" id="user_reward_wechat">
                                <p class="help-block">
                                    打开微信手机客户端：右上角 “+” -&gt; 收付款 -&gt; 我要收款 -&gt; 保存二维码图片
                                </p>
                            </div>


                            <div class="form-actions hide-ios">
                                <button type="submit" class="btn btn-lg btn-primary" data-disable-with="正在保存">更新资料</button>
                            </div>
                        </form>          </div>
                    <div class="col-md-4">
                        <div class="markdown">
                            <h3 id=":gift: 关于打赏">
                                <img title=":gift:" alt="🎁" src="https://cdn.bootcss.com/twemoji/2.5.0/2/svg/1f381.svg" class="twemoji"> 关于打赏</h3>
                            <p>打赏功能为了鼓励分享而设计。</p>

                            <p>上传你的微信、支付宝 <strong>收款二维码</strong>，之后打赏按钮将会出现在 “个人主页” 和 “文章末尾” 显示。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
