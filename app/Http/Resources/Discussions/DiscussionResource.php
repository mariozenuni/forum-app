<?php

namespace App\Http\Resources\Discussions;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
class DiscussionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'user_id'=>$this->user_id,
            'channel_id'=>$this->channel_id,
            'title'=>$this->title,
            'content'=>$this->content,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at
        ];
    }
}
