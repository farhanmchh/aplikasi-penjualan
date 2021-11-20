<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
  public function index()
  {
    return view('auth.sign_in', [
      'title' => 'Sign In',
    ]);
  }

  public function sign_up()
  {
    return view('auth.sign_up', [
      'title' => 'Sign Up'
    ]);
  }

  public function registration(Request $request)
  {
    // return response()->json($request);
    $user_data = $request->validate([
      'username' => ['required', 'max:255', 'unique:users,username'],
      'email' => ['required', 'max:255', 'email', 'unique:users,email'],
      'password' => ['required', 'min:5', 'same:repeat_password']
    ]);

    $user_data['role'] = 'user';
    $user_data['password'] = bcrypt($request->password);

    User::create($user_data);

    return redirect('/')->with('success', 'Create account successful');
  }

  public function authenticate(Request $request)
  {
    $user = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($user)) {
      // return response()->json('berhasil login');
      $request->session()->regenerate();

      return redirect('/product');
    }

    return back()->with('error', 'Login error');
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
