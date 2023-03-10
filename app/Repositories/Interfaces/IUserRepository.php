<?php

namespace App\Repositories\Interfaces;

interface IUserRepository extends IRepository
{
    public function getInfo(string $userId): mixed;

    public function updateUser($data):mixed;
}