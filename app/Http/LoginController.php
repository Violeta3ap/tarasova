<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// pievienot:
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
//reģistrācijai
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            //'email' => ['required', 'email'],
            'name' => ['required'],
            'password' => ['required'],
        ]);
        
       // dd($credentials);
        
        $username = $request->input('name');
        $password = $request->input('password');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        
        return back()->withErrors([
                 'name' => 'Nepareizi ievadīts lietotājvārds vai parole.',
          ])->onlyInput('name');
        
        
        }


        public function register(Request $request)
    {
        
        $credentials = $request->validate([
            //'email' => ['required', 'email'],
            'name' => ['required'],
            'password' => ['required'],
        ]);
        
      //  dd($credentials);

       $user = User::create([
        'name' => $credentials['name'],
        'password' => Hash::make($credentials['password']),
        'email' => 'aaa' . uniqid() . '@example.lv' // pagaidu vērtība

        ]);

        return back()->with('success', 'Reģistrācija veiksmīga! Tagad varat pieslēgties.');

    }

    
}
