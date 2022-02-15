<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('content.profile.index',[
            'title' => 'Edit Profile',
            'user' => $user,
            'roles' => Role::select(['id','role_desc'])->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'first_name' => 'required|max:25|regex:/^[a-zA-Z\s]+$/',
            'middle_name' => 'nullable|max:25|regex:/^[a-zA-Z\s]+$/',
            'last_name' =>  'required|max:25|regex:/^[a-zA-Z\s]+$/',
            'gender_id' => 'required',
            'email' => 'required|email:dns',
            'role_id' => 'required',
            'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z\s])(?=.*\d).+$/',
            'display_picture' => 'required|image'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('display_picture')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }

            $validatedData['display_picture'] = $request->file('display_picture')->store('user-images');
        }

        // Ambil id nya
        $validatedData['id'] = auth()->user()->id;

        // Enkripsi Password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Data dimasukkan ke dalam User
        User::where('id', auth()->user()->id)
            ->update($validatedData);

        //Redirect ke halaman profile
        return redirect('/profile/success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
