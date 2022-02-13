<?php

namespace App\Http\Resources\CtegoryRS;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class CategoriesResource extends JsonResource
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
            'name' =>$this->name,
            // 'med_name' => Str::limit($this->name, 3, '...')
        ];
    }
}
