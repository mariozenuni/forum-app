<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChannelResource;
use Illuminate\Http\Request;
use App\Models\Channel;

class ChannelsController extends Controller
{
    
        public function store(Request $request ){
            
            $channel = Channel::create([
                'title'=>$request->title,
            ]);
            
            return new ChannelResource($channel); 
        }
}
