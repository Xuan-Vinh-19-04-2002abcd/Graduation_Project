<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\IPostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(
        private readonly IPostService $postService
    )
    {}
    public function createPost(Request $request)
    {
        $data = $request->all();
        if($request->hasFile("image")){
            $destinationPath = 'public/images/products';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destinationPath,$image_name);
            $data["image"] = 'storage/images/product/'.$image_name;
        }
        $result = $this->postService->createPost((array)$data);
        return response()->json([
            "message" => "Create Successfully",
        ]);
    }
    public function getAllPosts()
    {
        return response()->json(
            [
                "message" => "Successfully",
                "data" => $this->postService->getAllPosts()
            ]
        );
    }
}
