<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
    public function update(Request $request, $id)
    {

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        User::findOrFail($id)->update($data);

        return redirect('/home')->with('msg', 'Cadastro atualizado com sucesso!');
    }

    public function destroy()
    {
        $user = auth()->user();
        User::findOrFail($user->id)->delete();

        return redirect('/');
    }
}
