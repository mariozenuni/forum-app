<?php

namespace App\Http\Controllers\Channels;

use App\Http\Resources\Channels\ChannelPostResource;
use App\Http\Resources\Channels\ChannelResource;
use App\Http\Resources\Channels\ChannelUpdateResource;
use Illuminate\Http\Request;
use App\Models\Channel;
use App\Http\Requests\Channel\StoreChannelRequest;
use App\Http\Requests\Channel\UpdateChannelRequest;
use App\Services\Channel\ChannelService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;

 /**
     * @group Channels Management
     * 
     * APIs to manage the channel CRUD
     * 
     */
class ChannelsController extends Controller
{
    public function index(ChannelService $channelService) : JsonResource {

         return ChannelResource::collection($channelService->index()); 
      }

        public function store(StoreChannelRequest $request, ChannelService $channelService) : JsonResource{
                    
            return new ChannelResource($channelService->create($request->only(['title'])));
        }

  
        public function update(UpdateChannelRequest $request, ChannelService $channelService,Channel $channel):JsonResource{
          
              $channelService->update($channel,$request->only(['title']));

             return new ChannelUpdateResource($channel);
          
        }
        
        
    public function destroy(Channel $channel, ChannelService $channelService)
    {
            return $channelService->destroy($channel);    
    }
}
