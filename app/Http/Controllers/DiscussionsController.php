<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Discussion\DiscussionPostRequest;
use App\Http\Requests\Discussion\DiscussionUpdateRequest;
use App\Http\Resources\Discussions\DiscussionPostResource;
use App\Http\Resources\Discussions\DiscussionResource;
use App\Http\Resources\Discussions\DiscussionUpdateResource;

use Illuminate\Http\Resources\Json\JsonResource;

class DiscussionsController extends Controller
{

    public function index() : JsonResource{
        return DiscussionResource::collection(Discussion::paginate(5)); 
     }


    public function store(DiscussionPostRequest $request){

      
        return new DiscussionPostResource(Discussion::create([
            //'user_id' => Auth::user()->id,
            'user_id' => Auth::user()->id,
            'channel_id'=>$request->channel_id,
            'title'=>$request->title,
            'content'=>$request->content,
        ]));

    }
    public function update(DiscussionUpdateRequest $request, Discussion $discussion){

        $discussion->update([
            'user_id' => Auth::user()->id,
            'channel_id'=>$request->channel_id,
            'title'=>$request->title,
            'content'=>$request->content,
        ]);

        return new DiscussionUpdateResource($discussion);

    }

    public function destroy(Discussion $discussion)
    {
            $discussion->delete();

         return response()->json(null, 204);
    }

    /**
     * Search for a discussion
     * 
     * @param str $title
     * @return \Illuminate\Http\Resources\Json\JsonResource;
     * 
     */

     public function search($title){

        return Discussion::where('title','like','%'.$title.'%')->get();

     }


}
