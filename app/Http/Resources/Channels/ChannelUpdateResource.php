<?php

namespace App\Http\Resources\channels;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChannelUpdateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    /**
     * removing data 
     *
     * @var [type]
     */


    public function toArray(Request $request): array
    {
        return [

          'id' => $this->id,
          'title' => $this->title,
          'success'=>true,
          'msessage'=>'Channel succesfully updated',
          'created_at' => $this->created_at,
          'updated_at' =>$this->updated_at,
          
        ];
    }
}
