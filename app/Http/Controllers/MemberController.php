<?php
/**
 * Created by PhpStorm.
 * User: jhh
 * Date: 2018/3/8 0008
 * Time: 10:51
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class MemberController extends Controller
{
    public function index(Request $request,$name,$forward="replies")
    {
        if(!in_array($forward,['replies','article','collection','following','follower']))
            $forward = 'replies';
        $member = User::query()->where('username',$name)->first();
        if(!$member){
            return view('common.error2');
        }
        return view('member.'.$forward,['user'=>$member->toArray()]);
    }

    public function setting(Request $request, $name='base')
    {
        if(!in_array($name,['base','profile','password','reward'])){
            return view('common.error2');
        }
        $params = [
            'menu'  =>  $name
        ];
        return view('setting.'.$name,$params);
    }
}