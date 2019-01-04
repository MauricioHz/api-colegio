<?php

namespace App\Http\Controllers;


use App\School;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\SchoolRequest;

class SchoolController extends Controller
{

    public function index()
    {
        return response()->json(['colegios' => School::all()], Response::HTTP_OK);
    }

    public function store(SchoolRequest $request)
    {
        $validated = $request->validated();


        return response()->json(['colegio' => $request->name], Response::HTTP_OK);
    }

    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
