<?php
/**
 * Created by PhpStorm.
 * User: jhh
 * Date: 2018/3/8 0008
 * Time: 10:51
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Request $request,$name)
    {
        $user = ['name'=> $name];
        return view('member.index',['user'=>$user]);
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