<?php

namespace App\Services\Channel;

use App\Core\ForumInterface;
use App\Repositories\Channel\ChannelRepository;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Channel;
use Illuminate\Http\JsonResponse;

class ChannelService implements ForumInterface
{
    protected $repository;

    public function __construct(ChannelRepository $channelRepository)
    {
        $this->repository = $channelRepository;
    }


    public function index(){

        return $this->repository->index();
}
    public function create(array $attributes, int $id=null){

            return $this->repository->create($attributes);
    }

    public function update(object $channel , array $attributes):bool {

        return $this->repository->update($channel,$attributes); 
}


public function destroy(object $channel):JsonResponse{

    return $this->repository->destroy($channel); 
}

}
