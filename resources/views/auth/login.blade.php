@extends('layouts.app')
@section('content')
    @if(session('msg'))
        <div class="alert alert-warning" style="text-align: center"><a class="close" href="#" data-dismiss="alert"><i class="fa fa-close"></i></a>{{ session('msg')}}</div>
    @endif
    <div id="main" class="main-container container">
        <div class="row">
            <div class="col-md-5 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">登录</div>
                    <div class="panel-body">
                        <form class="simple_form " id="new_user" novalidate="novalidate" action="/login" accept-charset="UTF-8" data-remote="true" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" placeholder="用户名 / Email" name="account" id="user_login" value="{{old('account')}}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control input-lg" placeholder="密码" name="password" id="user_password" value="{{old('password')}}">
                            </div>

                            <div class="from-group checkbox">
                                <label for="user_remember_me">
                                    <input name="remember" type="hidden" value="0"><input type="checkbox" value="1" checked="checked" name="remember" id="user_remember_me"> 记住登录状态
                                </label>
                            </div>
                            <div class="form-actions">
                                <input type="submit" name="commit" value="登录" class="btn btn-primary btn-lg btn-block" data-disable-with="正在登录">
                            </div>
                        </form>      </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">用其他平台的帐号登录</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a class="btn btn-default btn-lg btn-block" href="/account/auth/github"><i class="fa fa-github"></i> GitHub</a> </li>
                    </ul>
                </div>

                <div class="panel panel-default">
                    <ul class="list-group">

                        <li class="list-group-item"><a href="{{route('reg')}}">注册</a></li>

                        <li class="list-group-item"><a href="{{route('reg')}}">忘记了密码?</a></li>


                        <li class="list-group-item"><a href="{{route('reg')}}">未收到解锁邮件?</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <script>
            $('#new_user').on('ajax:error', function(event, xhr, status, error) {
                App.alert(xhr.responseText, '#main');
            })
        </script>

    </div>
@endsection
