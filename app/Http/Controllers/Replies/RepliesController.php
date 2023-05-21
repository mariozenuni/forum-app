<?php

namespace App\Http\Controllers\Replies;
use App\Models\Reply;
use App\Http\Requests\Reply\StoreReplyRequest;
use App\Http\Requests\Reply\UpdateReplyRequest;
use App\Http\Resources\Reply\ReplyStoreResource;
use App\Http\Resources\Reply\ReplyUpdateResource;
use App\Services\Reply\ReplyService;
use Illuminate\Routing\Controller;
class RepliesController extends Controller
{
    
    public function reply(StoreReplyRequest $request ,$discussion_id,ReplyService $replyService){

         return new ReplyStoreResource($replyService->create($request->only([ 'user_id',
         'discussion_id',
         'content']),$discussion_id));
    }
    public function updateReply(UpdateReplyRequest $request ,Reply $reply,ReplyService $replyService){

            $replyService->update($reply,$request->only(['user_id','discussion_id','content']));

          return new ReplyUpdateResource($reply);
     }
     
     public function deleteReply(Reply $reply,ReplyService $replyService){
          return $replyService->destroy($reply);
     }
}
