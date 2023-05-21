<?php

namespace App\Http\Controllers\Discussions;

use App\Core\ForumInterface;
use App\Models\Discussion;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Discussion\DiscussionPostRequest;
use App\Http\Requests\Discussion\DiscussionUpdateRequest;
use App\Http\Resources\Discussions\DiscussionPostResource;
use App\Http\Resources\Discussions\DiscussionResource;
use App\Http\Resources\Discussions\DiscussionUpdateResource;
use App\Services\Discussion\DiscussionService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;
use Illuminate\Http\JsonResponse;

 /**
     * @group Discussion Management
     * 
     * APIs to manage the discussion CRUD
     * 
     */

class DiscussionsController extends Controller
{
  
    public function index(DiscussionService $discussionService){
        return DiscussionResource::collection($discussionService->index()); 
     }

   
    public function store(DiscussionPostRequest $request, DiscussionService $discussionService){


        return new DiscussionPostResource($discussionService->create($request->only([
            'user_id',
            'channel_id',
            'title',
            'content'
        ])));

    }
    
    public function update(DiscussionUpdateRequest $request, Discussion $discussion,DiscussionService $discussionService) : JsonResource{

                $discussionService->update($discussion,$request->only([ 'user_id',
                'channel_id',
                'title',
                'content']));

        return new DiscussionUpdateResource($discussion);

    }

    public function destroy(Discussion $discussion,DiscussionService $discussionService) : JsonResponse
    {
        return $discussionService->destroy($discussion);
    }

 

     public function search(string $title,DiscussionService $discussionService) : Collection{

        return $discussionService->search($title);

     }
     


}
