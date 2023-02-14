<?php
namespace App\Services\Implementations;

use App\Repositories\Interfaces\IPitchRepository;
use App\Services\Interfaces\IPitchService;

class PitchService implements IPitchService {
    public function __construct(
        private readonly IPitchRepository $pitchRepository
    )
    {}
    public function getAllPitchs(): mixed
    {
        $allPitch = $this->pitchRepository->all($toArray = false);
        foreach($allPitch as $value){
            $value->image= config("app.url").'/'.$value->image;
        }  
        return $allPitch;

    }
    public function getDetailPitch($id): mixed
    {
        $detailPitch = $this->pitchRepository->findById($id);
        $detailPitch->image = config('app.url').'/'.$detailPitch->image;
        return $detailPitch;
    }   


    public function searchPitch($textSearch): mixed
    {
        $searchResult = $this->pitchRepository->searchPitch($textSearch);
        foreach($searchResult as $value){
            $value->image= config("app.url").'/'.$value->image;
        } 
        return $searchResult;
    }

    public function deletePitchs($id):mixed
    {
        return $this->pitchRepository->delete($id);
    }
}