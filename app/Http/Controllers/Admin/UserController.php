<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\IAccountService;

class UserController extends Controller
{
    public function __construct(
        private readonly IAccountService $accountService,
    ) {}
    public function getAllCustommer(){
        $customers = $this->accountService->getAllCustommer();
        return view('pages.customers.index',compact('customers'));
    }
}
