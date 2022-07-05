<?php

namespace App\Http\Resources;

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
            "id"=>$this->id,
            "title"=>$this->title,
            "subtitle"=>$this->subtitle,
            "description"=>$this->description,
            "views"=>$this->views,
            "image"=>asset($this->image),
            "categories"=>MenuResource::collection($this->categories),
        ];
    }
}
