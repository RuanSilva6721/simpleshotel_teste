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

    public function index(BankAccountController $BankAccountController)
    {
        $user = auth()->user();
        ;
        if($user->BankAccount->count() <= 0){

            $BankAccountController->store();

        }else{
            return view('home', ['user' => $user]);
        }

    }

}
