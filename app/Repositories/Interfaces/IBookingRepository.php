<?php

namespace App\Repositories\Interfaces;

use Illuminate\Foundation\Mix;

interface IBookingRepository extends IRepository
{
    public function searchBooking($textSearch): mixed;

    public function getInfoBooking($idPitch): mixed;

    public function detailBooking($booking_id): mixed;
    public function getAllBooking($user_id): mixed;
    public function adminAllBooking():mixed;

    public function Match($booking_id,$user_id_away):mixed;

    public function showMatch($user_id):mixed;
}