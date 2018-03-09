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
}