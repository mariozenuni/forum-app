<?php

namespace App\Http\Controllers;
use App\Models\Reply;
use App\Http\Requests\Reply\StoreReplyRequest;
use App\Http\Requests\Reply\UpdateReplyRequest;
use App\Http\Resources\Reply\ReplyStoreResource;
use App\Http\Resources\Reply\ReplyUpdateResource;
class RepliesController extends Controller
{
    
    public function reply(StoreReplyRequest $request ,$discussion_id){

   
         return new ReplyStoreResource(Reply::create([
            'user_id'=>$request->user_id,
            'discussion_id'=> $discussion_id,
            'content'=>$request->content
         ]));
    }
    public function updateReply(UpdateReplyRequest $request ,Reply $reply){

        $reply->update([
            'user_id'=>$request->user_id,
            'discussion_id'=> $reply->discussion_id,
            'content'=>$request->content
        ]);

          return new ReplyUpdateResource($reply);
     }
     public function deleteReply(Reply $reply){
        $reply->delete();
        return response()->json(null,204);
     }
}
