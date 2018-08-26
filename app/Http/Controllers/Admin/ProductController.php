<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/25/025
 * Time: 22:57
 */
namespace App\Http\Controllers\Admin;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        return view('admin/product_list');
    }

    public function add()
    {

        return view('admin/product_add');
    }

    public function detail()
    {

        return view('admin/product_detail');
    }

    public function recycle()
    {

        return view('admin/product_recycle');
    }
}