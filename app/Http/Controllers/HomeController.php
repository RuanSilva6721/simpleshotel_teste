<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $LogController =  new LogController();
        $log = $LogController->show($user);

        if($user->BankAccount->count() <= 0){

            $BankAccountController->store();
            return redirect()->route('home', ['user' => $user])->with('msg', 'Conta adicionada com sucesso!');

        }else{
            return view('home', ['log' => $log]);
        }

    }

}
