<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\IMatchService;

class MatchController extends Controller
{
    public function __construct(
        private readonly IMatchService $matchService
    )
    {}
    public function matchSocer(Request $request)
    {
        $data = $request->all();
        $this->matchService->createMatch($data);
        return response()->json(
            [
                "message" => "Matched Successfully",
            ]
        );
    }
}
