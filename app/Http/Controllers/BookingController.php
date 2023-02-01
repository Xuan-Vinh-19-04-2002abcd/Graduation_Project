<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\IBookingService;
class BookingController extends Controller
{
    public function __construct(
        private readonly IBookingService $bookingService
    )
    {} 

    public function createBooking(Request $request)
    {
        $data = $request->all();
        $result = $this->bookingService->createBooking((array)$data);
        return response()->json([
            "message" => "Create Successfully",
            "data" => $result
        ]);
    }
    public function getAllBookings(Request $request)
    {
        $user_id = $request->input("user_id");
        return response()->json(
            [
                "message" => "Successfully",
                "data" => $this->bookingService->getAllBooking($user_id)
            ]
        );
    }

    public function searchBooking(Request $request){

        $textSearch = $request->input("textSearch");

        return response()->json(
            [
                "message" => "Search Successfully",
                "data" => $this->bookingService->searchBooking($textSearch)
            ]
        );
    }

    public function detailBooking(Request $request)
    {
        $booking_id = $request->input("booking_id");
        return response()->json(
            [
                "message" => "Detail Successfully",
                "data" => $this->bookingService->detailBooking($booking_id)
            ]
        );
    }

}
