<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Http\Requests\StoreBankAccountRequest;
use App\Http\Requests\UpdateBankAccountRequest;
use App\Services\BankAccountService;
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
            return view('home')->with('msg', 'Conta adicionada com sucesso!');

        } catch (Exception $e) {
            return view('home')->with('msg2', 'Falha ao tentar adiconar a conta carro!');
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

    public function update(UpdateBankAccountRequest $request, BankAccount $bankAccount)
    {
        //
    }

    public function destroy(BankAccount $bankAccount)
    {

    }
}
