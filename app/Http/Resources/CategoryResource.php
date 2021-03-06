<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "article(s) count" => $this->articles_count,
            "tag(s) count" => $this->tags_count,
            "tags" => $this->tags,
            "articles" => $this->articles
        ];
    }
}
