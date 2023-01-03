<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $cars = $user->car()->simplePaginate(5);

        return view('home', ['cars' => $cars]);
    }

    public function destroy()
    {
        $user = auth()->user();
        USer::findOrFail($user->id)->delete();

        return redirect('/');
    }
}
