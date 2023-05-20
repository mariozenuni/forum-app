<?php

namespace App\Http\Controllers;

use App\Http\Resources\Channels\ChannelPostResource;
use App\Http\Resources\Channels\ChannelResource;
use App\Http\Resources\Channels\ChannelUpdateResource;
use Illuminate\Http\Request;
use App\Models\Channel;
use App\Http\Requests\Channel\StoreChannelRequest;
use App\Http\Requests\Channel\UpdateChannelRequest;
use Illuminate\Http\Resources\Json\JsonResource;

class ChannelsController extends Controller
{
    public function index() : JsonResource {

         return ChannelResource::collection(Channel::paginate(5)); 
      }

      public function show(Channel $channel)
      {
        return new ChannelResource($channel);
      }

        public function store(StoreChannelRequest $request) : JsonResource{
                    
            return new ChannelPostResource(Channel::create($request->validated())); 
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
