<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

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
            'id' => $this->id,
            'name' => $this->name,
            'created_at' => $this->created_at,
            // 'posts' => PostResource::collection($this->posts),
            // 'posts' => PostResource::collection($this->whenLoaded('posts')),
            // 'follows' => $this->follows()->pluck('id'),
            'can' => [
                'edit' => Auth::user()->can('edit', $this->resource)
            ],
            'links' => [
                'profile' => url('/profiles/'. $this->id)
            ]
            // $this->mergeWhen(Auth::user()->is($this->resource), [
            //     'email' => $this->email
            // ]) 
        ];
    }
}
