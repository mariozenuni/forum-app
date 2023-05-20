<?php

namespace App\Http\Resources\Channels;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChannelResource extends JsonResource
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
          'created_at' => $this->created_at,
          'updated_at' =>$this->updated_at,
          
        ];
    }
}
