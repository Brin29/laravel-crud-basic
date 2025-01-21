<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("products", [ProductsController::class, "index"]);
Route::post("products", [ProductsController::class, "store"]);
Route::get("products/{products}", [ProductsController::class, "show"]);
Route::put("products/{products}", [ProductsController::class, "update"]);
Route::delete("products/{products}", [ProductsController::class, "destroy"]);