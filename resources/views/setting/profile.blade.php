@extends('setting.common')
@section('name')
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="simple_form edit_user" id="edit_user_34612" enctype="multipart/form-data" novalidate="novalidate" action="/member/update" accept-charset="UTF-8" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="by" value="profile">
                    <div class="form-group string optional user_location"><label class="string optional control-label" for="user_location">城市</label><input class="form-control string optional" style="width: 200px" type="text" name="profile[city]" id="user_location"><p class="help-block">请用中文填写所在城市</p></div>
                    <div class="form-group string optional user_company"><label class="string optional control-label" for="user_company">公司</label><input class="form-control string optional" style="width: 400px" type="text" name="profile[company]" id="user_company"></div>
                    <div class="form-group">
                        <label class="string optional control-label control-label" for="user_github">GitHub</label>
                        <div class="input-group">
                            <span class="input-group-addon">https://github.com/</span>
                            <input class="form-control" placeholder="帐号" type="text" name="profile[github]" id="user_github">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="string optional control-label control-label" for="user_twitter">Twitter</label>
                        <div class="input-group">
                            <span class="input-group-addon">https://twitter.com/</span>
                            <input class="form-control" placeholder="帐号" type="text" name="profile[twitter]" id="user_twitter">
                        </div>
                    </div>
                    <div class="form-group string optional user_website"><label class="string optional control-label" for="user_website">个人主页</label><input class="form-control string optional" placeholder="http://" type="text" name="user[website]" id="user_website"></div>

                    <div class="form-group form-group-profile-field-alipay">
                        <label class="control-label" for="user_profile_alipay">支付宝</label>
                        <input class="form-control" type="text" value="" name="profile[qr][alipay_qr]" id="user_profile_alipay">

                    </div>
                    <div class="form-group form-group-profile-field-wechat">
                        <label class="control-label" for="user_profile_wechat">微信</label>
                        <input class="form-control" type="text" value="" name="profile[qr][wxpay_qr]" id="user_profile_wechat">

                    </div>

                    <div class="form-group string optional user_tagline"><label class="string optional control-label" for="user_tagline">签名</label>
                        <input class="form-control string optional" type="text" name="profile[motto]" id="user_tagline"></div>
                    <div class="form-actions hide-ios">
                        <button type="submit" class="btn btn-lg btn-primary" data-disable-with="正在保存">更新资料</button>
                    </div>
                </form>      </div>
        </div>
    </div>
@endsection
