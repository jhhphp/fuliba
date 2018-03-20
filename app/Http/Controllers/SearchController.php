<?php
/**
 * Created by PhpStorm.
 * User: jhh
 * Date: 2018/3/20 0020
 * Time: 17:28
 */

namespace App\Http\Controllers;


class SearchController extends Controller
{
    public function index()
    {
        return view('search.result');
    }

}