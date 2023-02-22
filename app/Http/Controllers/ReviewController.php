<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\IReviewService;
class ReviewController extends Controller
{
    public function __construct(
        private readonly IReviewService $reviewService
    )
    {}

    public function getallReviews(Request $request)
    {
        $pitch_id = $request->input("pitch_id");
        return response()->json([
            "message" => "Successfully",
            "data" => $this->reviewService->getAllReview($pitch_id)
        ]);
    }

      //Admin
      public function showReviews(){
        $reviews = $this->reviewService->adminAllReviews();
        return view('pages.reviews.index',compact('reviews'));
    }
}
