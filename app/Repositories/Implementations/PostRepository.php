<?php

namespace App\Repositories\Implementations;

use App\Models\Post;
use Illuminate\Support\Facades\DB;  
class PostRepository extends BaseRepository implements \App\Repositories\Interfaces\IPostRepository
{

    public function getModel(): string
    {
        return Post::class;
    }
    public function allPosts(): mixed
    {
        return  DB::table('posts')
        ->select('users.id as user_id','users.fullname','users.avatar','posts.content','posts.image')
        ->join('users','users.id','=','posts.user_id')
        ->get();
    }
}