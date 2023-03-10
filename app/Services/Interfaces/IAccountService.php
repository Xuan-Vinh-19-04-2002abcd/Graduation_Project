<?php
namespace App\Services\Interfaces;
use Illuminate\Http\Request;

interface IAccountService {
    public function register(array $data):array;
    public function forgotPassword($email,$newPassword);
    public function validateForgotPasswordToken(Request $request);
    public function updateInformation();

    public function getAllCustommer(): mixed;
    public function getUser($user_id):mixed;
    
    public function updateUser($data):mixed;
}
