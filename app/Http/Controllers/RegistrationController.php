<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function register(Request $request) {
        $inputFields = $request->validate(
            [
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => ['required', 'email'],
                'username' => ['required', 'min:5'], //minimun of 5 letters alphanumeric
                'password' => 'required',
                
            ]
        );

        $user = new User();
        $user->first_name = $inputFields['firstName'];
        $user->last_name = $inputFields['lastName'];
        $user->email = $inputFields['email'];
        $user->username = $inputFields['username'];
        $user->password = Hash::make($inputFields['password']);
        $user->role = 'Reader';
        $user->save();



        return  redirect('/login');
    }
}
