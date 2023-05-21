<?php

namespace App\Repositories\Reply;

use App\Models\Reply;
use Illuminate\Support\Facades\Auth;
use App\Models\Discussion;
use Exception;

class ReplyRepository {

    public function index(){
        try{
               $replyList = Reply::paginate(5);

        }catch(Exception $e){
            throw new Exception('Something went wrong while creating a reply '.$e->getMessage());
        }

        return $replyList;
    }

    public function create(array $attributes,int $id):Reply{
        try{
             $createdReply =Reply::create([
                'user_id'=> Auth::user()->id,
                'discussion_id'=> Discussion::findOrFail($id)->id,
                'content'=>data_get($attributes,'content')
            ]);
        }catch(Exception $e){
            throw new Exception('Something went wrong while creating a reply '.$e->getMessage());
        }
        return $createdReply;
    }   

    public function update(Reply $reply,array $attributes){
        try{
             $updatedReply = $reply->update([
                'user_id'=>Auth::user()->id,
                'discussion_id'=> data_get($attributes,'discussion_id'),
                'content'=>data_get($attributes,'content')
            ]);

        }catch(Exception $e){
            throw new Exception('Something went wrong while updating a reply '.$e->getMessage());
        }
        
      return $updatedReply;
    }

    public function destroy(Reply $reply){
        try{
            $reply->delete();
            
        }catch(Exception $e){
            throw new Exception('Something went wrong while updating a reply '.$e->getMessage());
        }

        return response()->json(null,204);
    
    }
}