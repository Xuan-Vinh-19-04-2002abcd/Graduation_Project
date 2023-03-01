<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function getAdmin()
    {
        return view('pages.login');
    }
    public function loginAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|exists:admins,username',
            'password' => 'required',
        ], [
            "username.required" => "Tài khoản đăng nhập không được để trống!",
            "username.exists" => "Tài khoản không tồn tại! Vui lòng thử lại.",
            "password.required" => "Mật khẩu rỗng! Vui lòng thử lại."
        ]);
  
        $adminInfo = $validator->validated();
        $isAdmin = Admin::where("username", $adminInfo['username'])->where("password",$adminInfo['password'])->exists();
        if ($isAdmin) {
            return redirect()->route("dashboard")->with('success', 'Bạn đã đăng nhập thành công!');
        } else {
            return back()->with('error', 'Tên đăng nhập và mật khẩu khong hợp lệ. Xin hãy nhập lại!');;
        }
    }
    public function logout(){
        return view("pages.login");
    }
        
    //     if(auth()->guard('admin')->attempt(['username' => $request->input('username'),  'password' => $request->input('password')])){
    //         $admin = auth()->guard('admin');
    //         if($admin->is_admin == 1){
    //             return redirect()->route("home.index")->with('success', 'You are Logged in sucessfully.');
    //         }
    //     }else {
    //         return view("pages.login")->with('error', 'Whoops! invalid email and password.');;
    //     }
    // }
 
    // public function logout(Request $request)
    // {
    //     auth()->guard('admin')->logout();
    //     Session::flush();
    //     Session::put('success', 'You are logout sucessfully');
    //     return view("pages.login");
    // }
 
}
