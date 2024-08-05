<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    const PATH_VIEW = 'admin.';
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
