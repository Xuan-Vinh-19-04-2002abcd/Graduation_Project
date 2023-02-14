<?php

namespace App\Http\Controllers;

use App\Models\Pitch;
use App\Services\Interfaces\IPitchService;
use Illuminate\Http\Request;

class PitchController extends Controller
{
    public function __construct(
        private readonly IPitchService $pitchService
    )
    {}
    public function getAllPitchs()
    {
        $allPitch = $this->pitchService->getAllPitchs();
        return response()->json([
            "message" => "Successfully",
            "data" => $allPitch
        ]);
    }
    public function getDetailPitch(Request $request) 
    {
        $idPitch = $request->input('id');
        $detailPitch = $this->pitchService->getDetailPitch($idPitch);
        return response()->json(
            [
                "message" =>"Detail successfully",
                "data" => $detailPitch->toarray()
            ]
        );
    }
    public function searchPitch(Request $request) {
        $textSearch = $request->input("textSearch");
        return response()->json(
            [
                "message" => "Search Successfully",
                "data" => $this->pitchService->searchPitch($textSearch)
            ]
        );
    }

//Admin
public function showPitchs(){
    $pitchs = $this->pitchService->getAllPitchs();
    return view('pages.pitchs.index',compact('pitchs'));
}
public function getAddForm(){
    return view('pages.pitchs.addPitch');
}
public function postAddForm(Request $request)
    {
        $pitch = new Pitch();
        $pitch->namepitch = $request->input("inputName");
        $pitch->address = $request->input("inputAddress");
        $pitch->phonenumber = $request->input("inputPnum");
        $pitch->price_hour = $request->input("inputPrice");
        if($request->hasFile("inputImage")){
            $destinationPath = 'public/images/pitchs';
            $image = $request->file('inputImage');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('inputImage')->storeAs($destinationPath,$image_name);
            $data["image"] = 'storage/images/pitchs/'.$image_name;
            $pitch->image = $data["image"];
        }
        $pitch->save();

        return redirect()->route('pitchs.index')->with('success','Create Successfully');
}

public function updateForm(Request $request,$id){
    $pitch = Pitch::find($id);

    $pitch->namepitch = $request->input("editName");
    $pitch->address = $request->input("editAddress");
    $pitch->phonenumber = $request->input("editPnum");
    $pitch->price_hour = $request->input("editPrice");
    if($request->hasFile("editImage")){
        $destinationPath = 'public/images/pitchs';
        $image = $request->file('editImage');
        $image_name = $image->getClientOriginalName();
        $path = $request->file('editImage')->storeAs($destinationPath,$image_name);
        $data["image"] = 'storage/images/pitchs/'.$image_name;
        $pitch->image = $data["image"];
    }
    $pitch->update();
    return redirect()->route('pitchs.index')->with('success','Updated Successfully');
}

public function editPitch($id){


        $pitch = Pitch::find($id);
        return view("pages.pitchs.editPitch",compact('pitch'));
    }

public function deletePitchs($id){
    $pitch = Pitch::find($id);
    $pitch->delete($id);
    // $this->pitchService->deletePitchs($id);
        //echo ("Delete successfully");
    return redirect()->route('pitchs.index')->with('success','Delete Successfully');
}
}
