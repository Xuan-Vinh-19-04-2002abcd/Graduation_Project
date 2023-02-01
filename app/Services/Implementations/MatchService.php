<?php
namespace App\Services\Implementations;

use App\Repositories\Interfaces\IMatchRepository;
use App\Services\Interfaces\IMatchService;

class MatchService implements IMatchService {
    public function __construct(
        private readonly IMatchRepository $matchRepository
    )
    {}

    public function createMatch(array $data): array
    {

        $abc = $this->matchRepository->createMatch($data);


        return [];
    }
}