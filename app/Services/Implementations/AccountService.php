<?php
namespace App\Services\Implementations;

use App\Models\User;
use App\Repositories\Interfaces\IUserRepository;
use App\Services\Interfaces\IAccountService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AccountService implements  IAccountService {
    
    public function __construct(
        private readonly IUserRepository $userRepository
    )
    {}

    public function register(array $data): array
      {
        $array_avatar = [
          "https://i.imgur.com/NfQbd4y.png",
          "https://i.imgur.com/f8jwkKz.png",
          "https://i.imgur.com/lCNy07I.png",
          "https://i.imgur.com/mQCDQF8.png",
          "https://i.imgur.com/jt0fEmR.png",
          "https://i.imgur.com/NfQbd4y.png",
      ];
        $randomUrl = $array_avatar[rand(0,6)];
        $data["avatar"] = $randomUrl;
        $password = Hash::make($data['password']);
        $data['password'] = $password;

        $this->userRepository->create($data);

        return ['fullName' => $data['fullname'], 'email' => $data['email']];
      }
      public function forgotPassword($email,$newPassword)
      {

        $isExit = User::select("*")->where('email', $email)->exists();
        if($isExit){
            $newPassword = Hash::make($newPassword);
            User::where('email', $email)->update(['password' => $newPassword]);
            $user =User::where('email', $email)->first();
            return $user;
          }
        return "fail";

      }
      public function validateForgotPasswordToken(Request $request)
      {
          // TODO: Implement validateForgotPasswordToken() method.
      }

      public function  updateInformation()
      {
          // TODO: Implement updateInformation() method.
      }

      public function getAllCustommer():mixed
      {
          return $this->userRepository->all($toArray = false);
      }

      public function getUser($user_id):mixed
      {
          return $this->userRepository->findById($user_id);
      }
}
