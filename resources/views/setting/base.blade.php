@extends('setting.common')
@section('name')
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="simple_form edit_user" id="edit_user_34612" enctype="multipart/form-data" novalidate="novalidate" action="/member/update" accept-charset="UTF-8" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group string optional user_name"><label class="string optional control-label" for="user_name">昵称</label><input class="form-control string optional" style="width: 200px" type="text" value="{{Auth::user()->nickname}}" name="base[nickname]" id="user_name"></div>
                            <div class="form-group email optional user_email"><label class="email optional control-label" for="user_email">Email</label><input class="form-control string email optional" {{empty(Auth::user()->email)? '':'disabled="disabled"'}} type="email" value="{{Auth::user()->email}}" name="base[email]" id="user_email"><p class="help-block">保存以后就不可以改了哦！</p></div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label for="user_email_public" class="checkbox"><input name="base[email_public]" type="hidden" value="0"><input type="checkbox" {{Auth::user()->email_public ? 'checked="checked"':''}} value="1" name="base[email_public]" id="user_email_public"> 公开 Email</label>
                                </div>
                            </div>
                            <div class="form-group file optional user_avatar"><label class="file optional control-label" for="user_avatar">头像</label><input class="form-control file optional" type="file" name="logo" id="user_avatar"></div>
                            <div class="form-group text optional user_bio"><label class="text optional control-label" for="user_bio">个人介绍</label><textarea class="form-control text optional xxlarge" rows="6" name="base[intro]" id="user_bio"></textarea></div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group avatar-preview" style="text-align: center;">
                                <img class="media-object avatar-96" src="https://ruby-china.org/system/letter_avatars/2/J/82_188_137/192.png">
                            </div>
                        </div>
                    </div>
                    <div class="form-actions hide-ios">
                        <button type="submit" class="btn btn-lg btn-primary" data-disable-with="正在保存">更新资料</button>
                    </div>
                </form>      </div>
        </div>
    </div>
@endsection
