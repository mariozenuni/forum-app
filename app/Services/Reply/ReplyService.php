<?php

namespace App\Services\Reply;

use App\Core\ForumInterface;
use App\Models\Reply;
use App\Repositories\Reply\ReplyRepository;
use Illuminate\Http\JsonResponse;
class ReplyService implements ForumInterface{

    protected $repository;

    public function __construct(ReplyRepository $replyRepository)
    {
            $this->repository = $replyRepository;
    }
    public function index(){
        return $this->repository->index();
}
    public function create(array $attributes, int $dicssussion_id){
            return $this->repository->create($attributes,$dicssussion_id);
    }

    public function update(object $reply,array $attributes):bool{
        return $this->repository->update($reply,$attributes);
}
    public function destroy(object $reply):JsonResponse{
        
        $this->repository->destroy($reply);

        return response()->json(null,204);
    }
}
