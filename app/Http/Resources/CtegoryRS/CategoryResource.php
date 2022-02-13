<?php

namespace App\Http\Resources\CtegoryRS;

use Illuminate\Http\Resources\Json\JsonResource;

use Illuminate\Support\Str;

class CategoryResource extends JsonResource
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
            'name' => $this->name,
            'med_name' => Str::limit($this->name, 3, '...'),
            'created_at' => $this->created_at->format('Y-m-d H:i:s')
        ];
    }
}
