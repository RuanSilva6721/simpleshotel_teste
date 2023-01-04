<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function edit()
    {
        $user = auth()->user();
        return view('users.edit', ['user' => $user]);
    }

    public function destroy()
    {
        $user = auth()->user();
        User::findOrFail($user->id)->delete();

        return redirect('/');
    }
}
