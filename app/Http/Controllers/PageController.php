<?php
# @Author: izzy
# @Date:   2019-12-06T16:27:09+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T16:32:18+00:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
      return view('welcome');
    }
    public function about()
    {
      return view('about');
    }
}
