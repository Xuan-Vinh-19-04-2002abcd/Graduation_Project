<?php

namespace App\Repositories\Implementations;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository implements \App\Repositories\Interfaces\IUserRepository
{

    public function getModel(): string
    {
        return User::class;
    }


    public function getInfo(string $userId): mixed
    {
        $info = $this->model->find($userId, ["id", "full_name", "email"]);
        return $info ? $info : null;
    }

    public function updateUser($data):mixed
    {
        $update = DB::table('users')->where("id",$data[0]["userId"])->update( [ 'fullname' => $data[0]['fullname'], 'phonenumber' => $data[0]['phonenumber'], 'email' => $data[0]['email']]);
        return $this->model->find($data[0]["userId"],["id", "fullname", "phonenumber","email"]);
    }
}
