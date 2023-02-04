<?php

namespace App\Repositories\Interfaces;

interface IReviewRepository extends IRepository
{
    public function getAllReview($pitch_id): mixed;
}