@extends('layouts.app')
@section('content')

    <div id="main" class="main-container container">
        <div class="row">
            <div class="col-sm-2 col-md-offset-1 setting-menu">
                <div class="panel panel-default">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="{{$menu == 'base'?'active':''}}"><a href="/setting"><i class="fa fa-user-circle"></i> <span>基本信息</span></a></li>
                        <li class="{{$menu == 'profile'?'active':''}}"><a class="hide-ios" href="/setting/profile"><i class="fa fa-address-card"></i> <span>详细资料</span></a></li>
                        <li class="{{$menu == 'password'?'active':''}}"><a class="hide-ios" href="/setting/password"><i class="fa fa-keyboard-o"></i> <span>登陆密码</span></a></li>
                        <li class="{{$menu == 'reward'?'active':''}}"><a class="hide-ios" href="/setting/reward"><i class="fa fa-qrcode"></i> <span>打赏设置</span></a></li>
                        <!-- <li class=""><a class="hide-ios" href="/setting/account"><i class="fa fa-gear"></i> <span>账户设置</span></a></li>-->
                        <!-- <li class=""><a class="hide-ios" href="/oauth/applications"><i class="fa fa-cube"></i> <span>管理我的应用</span></a></li>-->
                    </ul>
                </div>
            </div>


            @yield('name')

        </div>

    </div>

@endsection
