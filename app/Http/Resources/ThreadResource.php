<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ThreadResource extends JsonResource
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
            'author' => UserResource::make($this->author),
            // 'author' => [
            //     'name' => $this->author->name
            // ],
            'title' => $this->title,
            'body' => $this-> body,
        ];
    }
}
