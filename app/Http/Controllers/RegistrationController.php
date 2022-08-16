<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Monarobase\CountryList\CountryListFacade;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        $countries = CountryListFacade::getList('en');
        return view('registration.register', compact('countries'));
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        
        $user_exists = User::where('name', request()->email)->first();
        if(!$user_exists) {
            $user = User::create(request(['name', 'email', 'password', 'date_of_birth', 'country']));
            auth()->login($user);
            return redirect()->to('/users');
        }
    }
}
