<?php

namespace App\Http\Controllers;

use App\Model\Like;
use Illuminate\Http\Request;
use App\Model\Reply;

class LikeController extends Controller
{
    public function likeIt(Reply $reply)
    {
        $reply->like()->create([
            'user_id'=>'1'
            ]);
    }

    public function UnlikeIt(Reply $reply)
    {
        $reply->like()->where('user_id','1')->first()->delete();
    }
}
