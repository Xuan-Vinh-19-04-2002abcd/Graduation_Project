<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StatisticalController extends Controller {

    public function statistical() {
        $countCustommers = DB::table('users')->count();
        $countBookings = DB::table('bookings')->count();
        $countPitchs = DB::table('pitchs')->count();
        return view('pages.index', [
            'countCustommer' => $countCustommers,
            'countBookings' => $countBookings,
            'countPitchs' => $countPitchs
        ]);

    }
}