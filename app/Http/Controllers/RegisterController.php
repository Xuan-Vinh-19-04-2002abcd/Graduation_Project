<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateRequest;
use App\Services\Interfaces\IAccountService;
use App\Services\Interfaces\IMailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function __construct(
        private readonly IAccountService $accountService,
        private readonly IMailService $mailService
    ) {}
    public function register(RegisterRequest $request){

        $user = $request->validated();

        $accData = $this->accountService->register((array)$user);
        
        return response()->json([
            "message" => 'Create Successfully',
            "data" => $accData
        ],201);


        
    }

    public function fogotPassword(Request $request){

        $email = $request->input('email');
        $newPassword = $request->input('newpassword');

        $user = $this->accountService->forgotPassword($email, $newPassword);
        
        if($user!="fail"){
            $user->password = $newPassword;
            $this->mailService->sendMail($user);
            return response()->json([
                "message" => 'Change password Successfully',
                "data" => $user
            ],201);
        }
        return response()->json(
            [
                "message" => 'Email not sign up'
            ],
            203
        );
    }

    public function getUser(Request $request)

    {
        $user_id = $request->input("user_id");
        return response() ->json(
            [
                "message" => "Find Successfully",
                "data" => $this->accountService->getUser($user_id)
            ]
            );
    }

    public function updateUser(UpdateRequest $request)

    {
            $data = $request->all();

            return response() ->json(
                [
                    "message" => "Updatewq Successfully",
                    "data" => $this->accountService->updateUser(array($data))
                ]
                );
    }
}
