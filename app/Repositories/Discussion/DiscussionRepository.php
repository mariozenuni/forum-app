<?php

namespace App\Repositories\Discussion;

use App\Core\ForumInterface;
use App\Models\Discussion;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
class DiscussionRepository 
{

    public function index(){
        try{
           $getDiscussionList = Discussion::paginate(5);
           
        }catch(Exception $e){

            throw new Exception('Something wernt wrong while gettin the discussion list '. $e->getMessage());
        }

       return $getDiscussionList;
    }

    public function create(array $attrinutes){

        try{
            $createdDiscussion = Discussion::create([
                'user_id' => Auth::user()->id,
                'channel_id'=>data_get($attrinutes,'channel_id'),
                'title'=>data_get($attrinutes,'title'),
                'content'=>data_get($attrinutes,'content'),
           ]);

        }catch(Exception $e){
            throw new Exception('Something went wrong while creating a discussion '. $e->getMessage());
        }
            return  $createdDiscussion;
    }

    public function update(Discussion $collection, array $attributes) {

        try{

            $updatedDiscussion = $collection->update([
                'user_id' => Auth::user()->id,
                'channel_id'=>data_get($attributes,'channel_id'),
                'title'=>data_get($attributes,'title'),
                'content'=>data_get($attributes,'content'),
            ]);

        }catch(Exception $e){

            throw new Exception('Something went wrong while updating a discussion '. $e->getMessage());
        }
            return $updatedDiscussion;
    }

    public function destroy(Discussion $collection) : JsonResponse{

            try{
                $collection->delete();

            }catch(Exception $e){

                throw new Exception('Something went wrong while deliting a discussion '. $e->getMessage());
            }
       
        return response()->json(null,204);
    
    }

    public function search(string $title):Collection{

        try{

            $filteredTile = Discussion::where('title','like','%'.$title.'%')->get();

        }catch(Exception $e){

            throw new Exception('Something went wrong while deliting a discussion '. $e->getMessage());
        }

       return $filteredTile;
    }
    
}

