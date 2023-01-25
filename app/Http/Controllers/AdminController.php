<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //Login
    function login()
    {
        return view('index');
    }
    // submit Login
    function submit_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        } else {
            return redirect('login')->with('error', 'Invalid username or password!');
        }
        function dashboard()
        {
            return 'dashboard';
        }
    }
}