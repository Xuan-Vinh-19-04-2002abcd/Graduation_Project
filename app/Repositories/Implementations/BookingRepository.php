<?php

namespace App\Repositories\Implementations;

use App\Models\Booking;
use App\Models\Pitch;
use Illuminate\Support\Facades\DB;
class BookingRepository extends BaseRepository implements \App\Repositories\Interfaces\IBookingRepository
{

    public function getModel(): string
    {
        return Booking::class;
    }
    public function searchBooking($textSearch): mixed
    {
        return  DB::table('bookings')
        ->select('bookings.id','pitchs.namepitch','bookings.time_start','bookings.time_end','bookings.day','bookings.contact','bookings.description')
        ->join('pitchs','pitchs.id','=','bookings.pitch_id')
        ->Where("pitchs.namepitch", "LIKE","%$textSearch")
        ->orWhere("pitchs.address", "LIKE","%$textSearch%")
        ->get();
        
    }
    public function getInfoBooking($idPitch):mixed
    {
        return  DB::table('bookings')
        ->select('bookings.id','pitchs.namepitch','bookings.day','bookings.time','bookings.contact','bookings.description')
        ->join('pitchs','pitchs.id','=','bookings.pitch_id')
        ->Where("bookings.pitch_id",$idPitch)
        ->get();
    }

    public function getAllBooking($user_id):mixed
    {
        return  DB::table('bookings')
        ->select('bookings.id','users.fullname','bookings.user_id','pitchs.namepitch','bookings.day','bookings.time','bookings.contact','bookings.description')
        ->join('pitchs','pitchs.id','=','bookings.pitch_id')
        ->join('users','users.id','=','bookings.pitch_id')
        ->where('bookings.user_id','<>',$user_id)
        ->whereNull('bookings.user_id_away')
        ->get();       
    }
    public function detailBooking($booking_id):mixed
    {
        return  DB::table('bookings')
        ->select('bookings.id','users.fullname','bookings.user_id','pitchs.namepitch','bookings.day','bookings.time','bookings.day','bookings.contact','bookings.description')
        ->join('pitchs','pitchs.id','=','bookings.pitch_id')
        ->join('users','users.id','=','bookings.pitch_id')
        ->where('bookings.id',$booking_id)
        ->get(); 
    }
    public function Match($booking_id,$user_id_away):mixed
    {
        DB::table('bookings')
        -> where('id',$booking_id)
        ->update(array('user_id_away'=> $user_id_away,'status'=>"done"));
        return "Match successfully";
    }
}