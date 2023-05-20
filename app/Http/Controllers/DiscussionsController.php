<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Discussion\DiscussionPostRequest;
use App\Http\Resources\Discussions\DiscussionPostResource;
class DiscussionsController extends Controller
{

    public function store(DiscussionPostRequest $request){

      
        return new DiscussionPostResource(Discussion::create([
            'user_id' => Auth::user()->id,
            'channel_id'=>$request->channel_id,
            'title'=>$request->title,
            'content'=>$request->content,
        ]));

    }
}
