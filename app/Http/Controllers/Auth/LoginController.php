<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($data, $request->filled('remember'))) {
            $request->session()->regenerate();
            /**
             * @var User $user
             */
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->intended('client.home');
        }
        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không chính xác!',
        ])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        /**
         * @var User $user
         * */

        $user = Auth::user();
        Auth::logout();

        // Đặt remember_token thành null và lưu lại người dùng
        $user->setRememberToken(null);
        $user->save();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


}
