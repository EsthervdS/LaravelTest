<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function show() {

    return view('user')->withUser(Auth::user());
  }
  public function update(Request $request)
    {
      dd();
        $user = Auth::user();
        $user->name=$request->input('name');
        $user->email=$request->input('email');

        $user->save();
        return Redirect::route('user');
    }
}
