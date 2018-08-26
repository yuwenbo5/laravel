<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/25/025
 * Time: 0:51
 */
namespace App\Http\Controllers\Admin;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

    public function login(Request $request)
    {
        $admin = new Admin();
        if(!$admin->first()){
            $admin->username = 'admin';
            $admin->password = md5('123456');
            $admin->create_user = 'admin';
            $admin->create_time = date('Y-m-d H:i:s');
            $admin->operate_time = date('Y-m-d H:i:s');
            $admin->save();
        }

        if($request->isMethod('POST')){

            $data = $request->input('Admin');
            $username = $data['username'];
            $password = md5($data['password']);
            $admin = Admin::where(['username'=>$username,'password'=>$password])->first();
            if($admin && $admin->user_id){
                $request->session()->put([
                    'user_id'=>$admin->user_id,
                    'username'=>$username,
                    'nickname'=>$admin->nickname,
                    'create_time'=>$admin->create_time,
                    'expired_time'=>strtotime('+24 hours')
                ]);
                return redirect('admin/index');
            }else{

                return redirect('admin/login')->with('errMsg', '用户名或密码错误');
            }
        }

//        var_dump(session()->all());die;

        return view('admin/login');
    }

    public function logout()
    {
        session()->flush();
        return redirect('admin/login');
    }

}