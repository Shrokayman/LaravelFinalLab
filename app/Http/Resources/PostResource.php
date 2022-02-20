<?php

namespace App\Http\Resources;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'post_id'=>$this->id,
            'post_title' =>$this->title,
            'post_description' => $this->description,
            'creation_date' => $this->created_at,
            'Username' =>$this->user->name
        ];
    }
}
