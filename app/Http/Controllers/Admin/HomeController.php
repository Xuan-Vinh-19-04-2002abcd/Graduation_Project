<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
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
            return redirect()->route("home.index")->with('success', 'You are Logged in sucessfully.');
        } else {
            return view("pages.login")->with('error', 'Whoops! invalid email and password.');;
        }
    }
}
