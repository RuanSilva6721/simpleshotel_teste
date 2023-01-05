<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Http\Requests\StoreBankAccountRequest;
use App\Http\Requests\UpdateBankAccountRequest;
use App\Services\BankAccountService;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class BankAccountController extends Controller
{
    private $BankAccountService;
    public function __construct(BankAccountService $BankAccountService)
    {
        $this->BankAccountService = $BankAccountService;

        $this->middleware('auth');

    }

    public function store()
    {
        try {
            $this->BankAccountService->store();
            return redirect()->route('home')->with('msg', 'Conta adicionada com sucesso!');

        } catch (Exception $e) {
            return redirect()->route('home')->with('msg2', 'Falha ao tentar adicionar a conta!');
        }

    }
    public function sacar()
    {
        return view('bank.withdraw');
    }


    public function depositar()
    {
        return view('bank.deposit');
    }

    public function depositConfirm(Request $request)
    {
        try {
            $this->BankAccountService->depositConfirm($request);
            return redirect()->route('home')->with('msg', 'Depósito adicionado com sucesso!');

        } catch (Exception $e) {
            return redirect()->route('home')->with('msg2', 'Falha ao tentar depositar na conta!');
        }
    }

    public function withdrawConfirm(Request $request)
    {
        try {
            $this->BankAccountService->withdrawConfirm($request);
            return redirect()->route('home')->with('msg', 'Saque realizado com sucesso!');

        } catch (Exception $e) {
            return redirect()->route('home')->with('msg2', 'Falha ao tentar saque na conta!');
        }
    }





    public function destroy(BankAccount $bankAccount)
    {

    }
}
