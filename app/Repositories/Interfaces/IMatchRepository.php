<?php

namespace App\Repositories\Interfaces;

interface IMatchRepository extends IRepository
{
    public function createMatch($data): mixed;
}