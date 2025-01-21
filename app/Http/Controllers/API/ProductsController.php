<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Http\Requests\SaveProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Http\Resources\ProductsResource;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Products::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return (new ProductsResource(Products::create($request->all())))
        ->additional(["mensaje"=> "Producto Registrado de forma correcta"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        return new ProductsResource($products);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        $products->update($request->all());
        return (new ProductsResource($products))
        ->additional(["mensaje"=> "Producto Actualizado de forma correcta"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        $products->delete();
        return (new ProductsResource($products))
        ->additional(["mensaje" => "Producto Eliminado de forma correcta"]);
    }
}
