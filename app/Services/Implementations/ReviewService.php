<?php
namespace App\Services\Implementations;

use App\Repositories\Interfaces\IReviewRepository;
use App\Services\Interfaces\IReviewService;

class ReviewService implements IReviewService {
    public function __construct(
        private readonly IReviewRepository $reviewRepository
    )
    {}

    public function getAllReview($pitch_id):array
    {
        return $this->reviewRepository->getAllReview($pitch_id)->toarray();
    }
        
}