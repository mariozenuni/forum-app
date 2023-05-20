<?php

namespace App\Http\Controllers;

use App\Http\Resources\Channels\ChannelPostResource;
use App\Http\Resources\Channels\ChannelResource;
use App\Http\Resources\Channels\ChannelUpdateResource;
use Illuminate\Http\Request;
use App\Models\Channel;
use App\Http\Requests\Channel\StoreChannelRequest;
use App\Http\Requests\Channel\UpdateChannelRequest;
use App\Services\ChannelService\ChannelService;

use Illuminate\Http\Resources\Json\JsonResource;

class ChannelsController extends Controller
{
    public function index(ChannelService $channelService) : JsonResource {

         return ChannelResource::collection($channelService->index()); 
      }

      public function show(Channel $channel)
      {
        return new ChannelResource($channel);
      }

        public function store(StoreChannelRequest $request, ChannelService $channelService) : JsonResource{
                    
            return new ChannelResource($channelService->create($request->only(['title'])));
        }

  
        public function update(UpdateChannelRequest $request, Channel $channel):JsonResource{
          
                $channel->update($request->validated());
       
             return new ChannelUpdateResource($channel);
          
        }
        
        
    public function destroy(Channel $channel)
    {
            $channel->delete();

         return response()->json(null, 204);
    }
}
