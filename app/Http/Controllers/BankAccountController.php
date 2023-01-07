<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Http\Requests\StoreBankAccountRequest;
use App\Http\Requests\UpdateBankAccountRequest;
use App\Services\BankAccountService;
use Illuminate\Http\Request;
use PHPUnit\Exception;
use Illuminate\Support\Facades\DB;
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
            return $this->BankAccountService->withdrawConfirm($request);


        } catch (Exception $e) {
            return redirect()->route('home')->with('msg2', 'Falha ao tentar saque na conta!');
        }
    }





    public function destroy(BankAccount $bankAccount)
    {

    }
    public function report()
    {
        $user = auth()->user();
        $LogController =  new LogController();
        $log = $user->Log()->get();
        return view('report', ["log" => $log]);
    }
    public function reportPost(Request $request)
    {
        if($request->de_data){
            $inicio = $request->de_data;
        }else{
            $inicio = '';
        }
        if($request->a_data){
            $fim = $request->a_data;
        }else{
            $fim = '';  
        }


        $log = DB::table('logs')
            ->where('date', '>=', $inicio)
            ->orWhere('date', '<=', $fim)
            ->get();
        return view('report', ["log" => $log]);
    }

}
