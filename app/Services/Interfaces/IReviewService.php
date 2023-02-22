<?php
namespace App\Services\Interfaces;

interface IReviewService{
 
    public function getAllReview($pitch_id): array;
    
    public function adminAllReviews():mixed;
}