<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\IAccountService;
use App\Services\Interfaces\IMailService;
class UserController extends Controller
{
    public function __construct(
        private readonly IAccountService $accountService,
        private readonly IMailService $iMailService
    ) {}
    public function getAllCustommer(){
        $customers = $this->accountService->getAllCustommer();
        return view('pages.customers.index',compact('customers'));
    }

    public function contactForm(Request $request){
        $name= $request->input("name");
        $address= $request->input("address");
        $phonenumber= $request->input("phone");
        $array["name"] = $name;
        $array["address"] = $address;
        $array["phonenumber"] = $phonenumber;

        $this->iMailService->contactAdmin($array);
        
        return redirect()->route('landingPage')->with('success','You connected');
    }

}
