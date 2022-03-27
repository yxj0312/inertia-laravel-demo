<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;

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

    public function only(...$attributes)
    {
        return Arr::only($this->resolve(), $attributes);
        // return collect($this->resolve())
        //     ->only($attributes)
        //     ->toArray();
    }
}
