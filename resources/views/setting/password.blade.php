@extends('setting.common')
@section('name')
    <div class="col-md-8">
        <div class="alert alert-warning">注意！更新密码以后需要重新登陆。</div>

        <div class="panel panel-default">
            <div class="panel-body">
                <form class="simple_form edit_user" id="edit_user_34612" novalidate="novalidate" action="/setting" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="put"><input type="hidden" name="authenticity_token" value="89Nwk/+42MP2suYKAGWmn1VZbgbqsUI8Ggu5KFoCUw5HeBkree940e7Gp2dvbgFTAkjC/x+PLeqNZU7hXR1kBA==">

                    <input type="hidden" name="by" value="password">
                    <div class="form-group password optional user_current_password"><label class="password optional control-label" for="user_current_password">旧密码</label><input class="form-control password optional" type="password" name="user[current_password]" id="user_current_password"></div>
                    <div class="form-group password optional user_password"><label class="password optional control-label" for="user_password">密码</label><input class="form-control password optional" type="password" name="user[password]" id="user_password"></div>
                    <div class="form-group password optional user_password_confirmation"><label class="password optional control-label" for="user_password_confirmation">确认密码</label><input class="form-control password optional" type="password" name="user[password_confirmation]" id="user_password_confirmation"></div>
                    <div class="form-actions hide-ios">
                        <input type="submit" name="commit" value="修改密码" class="btn btn-lg btn-success" data-disable-with="正在保存">
                    </div>
                </form>      </div>
        </div>
    </div>
@endsection
