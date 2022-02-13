<?php

namespace App\Http\Resources\MenuItemRS;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuItemsResource extends JsonResource
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
            'name' => $this-> name,
            'description' => $this-> description,
            'ingredients' => $this-> ingredients,
            'recipe' => $this-> recipe,
            'price' => $this-> price,
            // 'active' => $this-> active,
            // 'category' => $this->category->name,
            // 'created_at' => $this->created_at->format('Y-m-d H:i:s')
        ];
    }
}
