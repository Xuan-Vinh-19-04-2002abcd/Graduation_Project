<?php
namespace App\Services\Interfaces;

interface IBookingService{
    public function createBooking(array $data):mixed;
    public function getAllBooking($user_id):mixed;
    public function detailBooking($booking_id): mixed;
    public function searchBooking($textsearch): mixed;
    public function mapSocer($booking_id,$user_id_away):mixed;
}