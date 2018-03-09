<?php
/**
 * Created by PhpStorm.
 * User: jhh
 * Date: 2018/3/8 0008
 * Time: 10:51
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }
}