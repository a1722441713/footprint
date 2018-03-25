<?php

namespace App\Http\Controllers\Frontend\Web;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	/**
	 *  网站首页
	 */
    public function index()
    {
//        dd(\App\Models\Type::byModel('banners')->get()->toArray());
        return view(THEME_NP . 'index');
    }
}
