<?php
//home控制器
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return 'this is home.index';
    }
}