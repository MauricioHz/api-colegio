<?php

namespace App\Http\Controllers;

use App\UserDevice;
use Illuminate\Http\Request;

class UserDeviceController extends Controller
{

    public function index()
    {
        return "UserDevice ... ....ok";
    }

    public function store(Request $request)
    {
        $userDevice = new UserDevice();
        $userDevice->user_id = 1;
        $userDevice->user_id_device = $request->user_id_device;
        $userDevice->push_token = $request->push_token;
        $userDevice->vigente = '1';
        $resultado = $userDevice->save();

        //return "id: " . $userDevice->id;
        return response()->json($resultado, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserDevice  $userDevice
     * @return \Illuminate\Http\Response
     */
    public function show(UserDevice $userDevice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserDevice  $userDevice
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDevice $userDevice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserDevice  $userDevice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDevice $userDevice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserDevice  $userDevice
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDevice $userDevice)
    {
        //
    }
}
