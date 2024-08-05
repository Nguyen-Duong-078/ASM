<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function showFormRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = User::query()->create($data);

        Auth::login($user);

        $request->session()->regenerate();
        return redirect()->route('client.home');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

}
