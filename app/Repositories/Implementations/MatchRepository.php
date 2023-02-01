<?php

namespace App\Repositories\Implementations;

use App\Models\SocerMatch;

class MatchRepository extends BaseRepository implements \App\Repositories\Interfaces\IMatchRepository
{

    public function getModel(): string
    {
        return SocerMatch::class;
    }

    public function createMatch($data):mixed
    {
        $user_1  = array();
        $user_1["user_id"] = $data["user_id_1"];
        $user_1["booking_id"] = $data["booking_id"];
        $user_1["status"] = "done";

        $user_2  = array();
        $user_2["user_id"] = $data["user_id_2"];
        $user_2["booking_id"] = $data["booking_id"];
        $user_2["status"] = "done";

        $this->model->create($user_1);
        $this->model->create($user_2);

        return ["status" => "ok"];
    }
}