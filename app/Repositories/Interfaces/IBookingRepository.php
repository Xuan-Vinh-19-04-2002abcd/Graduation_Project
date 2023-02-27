<?php

namespace App\Repositories\Interfaces;

interface IBookingRepository extends IRepository
{
    public function searchBooking($textSearch): mixed;

    public function getInfoBooking($idPitch): mixed;

    public function detailBooking($booking_id): mixed;
    public function getAllBooking($user_id): mixed;
    public function adminAllBooking():mixed;
}