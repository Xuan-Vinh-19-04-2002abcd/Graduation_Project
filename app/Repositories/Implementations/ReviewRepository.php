<?php

namespace App\Repositories\Implementations;

use App\Models\Review;
use Illuminate\Support\Facades\DB;
class ReviewRepository extends BaseRepository implements \App\Repositories\Interfaces\IReviewRepository
{

    public function getModel(): string
    {
        return Review::class;
    }
    public function getAllReview($pitch_id): mixed
    {
        return  DB::table('reviews')
        ->select('users.id as user_id','users.fullname','users.avatar','reviews.title')
        ->join('users','users.id','=','reviews.user_id')
        ->where('reviews.pitch_id',$pitch_id)
        ->get();
    }

    public function adminAllReview():mixed
    {
        return  DB::table('reviews')
        ->select('users.id as user_id','users.fullname','users.avatar','pitchs.namepitch','reviews.title')
        ->join('pitchs','pitchs.id','=','reviews.pitch_id')
        ->join('users','users.id','=','reviews.user_id')
        ->get();
    }
}