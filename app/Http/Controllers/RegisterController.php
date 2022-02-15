<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register',
            'roles' => Role::select(['id','role_desc'])->get()
        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'first_name' => 'required|max:25|regex:/^[a-zA-Z\s]+$/',
            'middle_name' => 'nullable|max:25|regex:/^[a-zA-Z\s]+$/',
            'last_name' =>  'required|max:25|regex:/^[a-zA-Z\s]+$/',
            'gender_id' => 'required',
            'email' => 'required|email:dns',
            'role_id' => 'required',
            'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z\s])(?=.*\d).+$/',
            'display_picture' => 'required|image'
        ]);

        if($request->file('display_picture')){
            $validatedData['display_picture'] = $request->file('display_picture')->store('user-images');
        }

        // Enkripsi Password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Memasukkan data ke tabel User
        User::create($validatedData);

        // Balik ke login
        return redirect('/login')->with('Success','Your Registration is successfully !! Please login');
    }
}
