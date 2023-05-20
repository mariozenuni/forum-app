<?php

namespace App\Http\Resources\Reply;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReplyStoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user_id'=>$this->user_id,
            'discussion_id'=>$this->discussion_id,
            'content'=>$this->content,
            'success'=>true,
            'message'=>'Reply Successfully saved',
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at

        ];
    }
}
