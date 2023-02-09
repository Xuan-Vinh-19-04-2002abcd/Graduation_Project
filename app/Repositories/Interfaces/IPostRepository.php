<?php

namespace App\Repositories\Interfaces;

interface IPostRepository extends IRepository
{
    public function allPosts(): mixed;
}