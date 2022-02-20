<?php

namespace App\Http\Resources;
use App\Models\Post;
use App\Models\User;


use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'Username' =>$this->name,
            'UserEmail' =>$this->email,
            'UserPosts' =>$this->posts,
        ];
    }
}
