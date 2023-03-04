<?php
namespace App\Services\Implementations;

use App\Repositories\Interfaces\IBookingRepository;
use App\Services\Interfaces\IBookingService;

class BookingService implements IBookingService {
    public function __construct(
        private readonly IBookingRepository $bookingRepository
    )
    {}

    public function createBooking(array $data): mixed
    {

        $abc = $this->bookingRepository->create($data);


        return $this->bookingRepository->getInfoBooking($data['pitch_id']);
    }
    public function getAllBooking($user_id): mixed
    {
        return $this->bookingRepository->getAllBooking($user_id);


    }
    public function searchBooking($textsearch):mixed
    {
        return $this->bookingRepository->searchBooking($textsearch);
    }

    public function detailBooking($booking_id):mixed
    {
        return $this->bookingRepository->detailBooking($booking_id);
    }

    public function adminAllBookings():array
    {
        $data = $this->bookingRepository->adminAllBooking()->toarray();
         
        return $data;
    }

    public function mapSocer($booking_id,$user_id_away):mixed
    {
        return $this->bookingRepository->Match($booking_id,$user_id_away);
    }


    public function showMap($user_id):mixed
    {
        $matchs = $this->bookingRepository->showMatch($user_id);
        foreach($matchs as $value){
            $value->image= config("app.url").'/'.$value->image;
        } 
        return $matchs;
    }
}