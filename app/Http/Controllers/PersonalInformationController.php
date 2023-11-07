<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonalInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = DB::table("personal_information")->get();

        return view('profile', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $name = $request->input("name");
        $age = $request->input("age");
        $address = $request->input("address");

        $data = DB::table("personal_information")->insert(["name" => $name, "age" => $age,"address"=> $address]);

        return redirect()->route('create')->with('success', 'Successfully Uploaded');
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonalInformation $personalInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalInformation $personalInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalInformation $personalInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalInformation $personalInformation)
    {
        //
    }
}