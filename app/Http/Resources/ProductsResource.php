<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
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
            "Descripcion" => $this->description,
            "Imagen" => $this->image,
            "Precio" => $this->price,
            "Activo" => $this->is_active,
            "Descuento" => $this->discount,
            "Colores" => $this->colors,
            "Tallas" => $this->sizes
        ];
    }
}
