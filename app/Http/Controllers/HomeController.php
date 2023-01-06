<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Controllers\BankAccountController;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(BankAccountController $BankAccountController)
    {
        $user = auth()->user();
        //Log::channel('main')->info('houve um login');
        if($user->BankAccount->count() <= 0){

            $BankAccountController->store();
            return redirect()->route('home')->with('msg', 'Conta adicionada com sucesso!');

        }else{
            return view('home');
        }

    }

}
