<?php

namespace App\Services\ChannelService;

use App\Repositories\ChannelRepository;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Channel;
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

}
