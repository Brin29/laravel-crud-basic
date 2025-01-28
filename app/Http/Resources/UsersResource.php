<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class UsersResource extends JsonResource
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
            "Id" => $this->id,
            "Nombre" => $this->name,
            "Producto" => new ProductsResource($this->whenLoaded("product")) 
            // "Productos Comprados" => ProductsResource::collection($this->whenLoaded("products"))
        ];
    }
}
