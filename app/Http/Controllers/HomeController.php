<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Controllers\BankAccountController;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $BankAccountController = new BankAccountController;
        // dd($user->BankAccount());
  
        ;
        if($user->BankAccount->count() <= 0){

            $BankAccountController->store();

            return view('home',['user' => $user]);
        }else{
            return view('home', ['user' => $user]);
        }
     
    }

}
