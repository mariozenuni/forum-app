<?php

namespace App\Services\ChannelService;

use App\Repositories\ChannelRepository;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Channel;
use PhpParser\Node\Expr\Cast\Object_;

class ChannelService
{
    protected $repository;
    public function __construct(ChannelRepository $channelRepository)
    {
        $this->repository = $channelRepository;
    }


    public function index() : Channel{

        return $this->repository->index();
}
    public function create(array $attributes) : Channel{

            return $this->repository->create($attributes);
    }

    public function update(Channel $channel , array $attributes) {

        return $this->repository->update($channel,$attributes); 
}


public function destroy(Channel $channel) {

    return $this->repository->destroy($channel); 
}

}
