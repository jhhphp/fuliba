<?php
/**
 * Created by PhpStorm.
 * User: jhh
 * Date: 2018/3/8 0008
 * Time: 10:19
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function topic (Request $request)
    {
        return view('topics.index');
    }

    public function detail (Request $request)
    {
        return view('topics.detail');

    }


    public function add (Request $request)
    {
        return view('topics.add');
    }
}