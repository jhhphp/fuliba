@extends('layouts.app')
@section('content')
@if($errors->any())
<div class="alert alert-warning" style="text-align: center"><a class="close" href="#" data-dismiss="alert"><i class="fa fa-close"></i></a>{{ $errors->all()[0]}}</div>
@endif
<div id="main" class="main-container container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">注册新用户</div>
                <div class="panel-body">
                    <form class="simple_form " id="new_user" novalidate="novalidate" action="{{route('reg')}}" accept-charset="UTF-8" data-remote="true" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="账号" hint="谨慎填写，以后不可修改" name="username" value="{{ old('username') }}" id="user_login">
                        </div>
                        <div class="form-group">
                            <input class="form-control input-lg" placeholder="昵称" type="text" name="nickname" id="user_name" value="{{ old('nickname') }}">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-lg" placeholder="Email" name="email" id="user_email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label for="user_email_public" class="checkbox"><input name="email_public" type="hidden" value="0"><input type="checkbox" value="1" checked="checked" name="email_public" value="{{ old('email_public') }}" id="user_email_public"> 公开 Email</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control input-lg" placeholder="密码" type="password" name="password" id="user_password" value="{{ old('password') }}">
                        </div>
                        <div class="form-group">
                            <input class="form-control input-lg" placeholder="确认密码" type="password" name="password_confirmation" id="user_password_confirmation"  value="{{ old('password_confirmation') }}">
                        </div>
                        <!--<div class="form-group">
                            <div class="input-group">
                                <input class="form-control input-lg" placeholder="验证码" name="_rucaptcha" type="text" autocorrect="off" autocapitalize="off" pattern="[a-zA-Z]*" maxlength="5" autocomplete="off">
                                <span class="input-group-addon input-group-captcha"><a class="rucaptcha-image-box" href="#"><img class="rucaptcha-image" src="https://ruby-china.org/rucaptcha/"></a></span>
                            </div>
                        </div>-->

                        <div class="form-group">
                            <input type="submit" name="commit" value="提交注册信息" class="btn btn-lg btn-primary" data-disable-with="正在提交">
                            <a class="btn btn-lg btn-default hide-ios" href="/login">登录</a>
                        </div>
                    </form>      </div>
            </div>
        </div>
    </div>

</div>
@endsection