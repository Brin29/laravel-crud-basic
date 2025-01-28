<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests\SaveUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UsersResource;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Users::with(["product"])->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return (new UsersResource(Users::create($request->all())))
        ->additional(["mensaje"=> "Usuario Registrado de manera exitosa"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        return new UsersResource($users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, Users $users)
    {
        $users->update($request->all());
        return (new UsersResource($users))
        ->response()
        ->setStatusCode(202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        $users->delete();
        return (new UsersResource($users))
        ->additional(["mensaje" => "Usuario Eliminado de forma correcta"]);
    }
}
