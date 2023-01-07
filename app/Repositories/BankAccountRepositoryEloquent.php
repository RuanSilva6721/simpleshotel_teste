<?php
namespace App\Repositories;
use App\Models\BankAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Log;
class BankAccountRepositoryEloquent implements BankAccountRepository{

    public function store(){

        return  DB::transaction(function () {
            $BankAccount = new BankAccount;
            $user = auth()->user();
            $BankAccount->counts = '2023'.rand(10000,99999);
            $BankAccount->balance = 0;
            $BankAccount->user_id = $user->id;

            $BankAccount->save();

         });

    }
    // public function edit($id){

    //     return Car::findOrFail($id);

    // }
    public function depositConfirm(Request $request, $id){
        $user = auth()->user();

        return DB::transaction(function () use ($request, $id, $user) {

            $log = new Log();
        $BankAccount = BankAccount::find($id);
        $data = $request->all();
        if($data['MoneyDeposit']< 0){
                $data['MoneyDeposit'] = 0;
        }
        $log->action = "depósito";
        $log->date = date("Y/m/d");
        $log->value =$data['MoneyDeposit'];
        $log->user_id = $user->id;
            $log->save();
        $BankAccount->balance = $data['MoneyDeposit'] + $BankAccount->balance;
        $BankAccount->update();

         });

    }
    public function withdrawConfirm(Request $request, $id){
        $user = auth()->user();

        return  DB::transaction(function () use ($request, $id, $user) {
            $log = new Log();
        $BankAccount = BankAccount::find($id);
        $data = $request->all();

        if($data['MoneyWithdraw'] > $BankAccount->balance  || $data['MoneyWithdraw']< 0){
            DB::rollBack();
            return redirect()->route('home')->with('msg2', 'Saldo insuficiente na conta!');

        }else{
            $log->action = "saque";
            $log->date = date("Y/m/d");
            $log->value =$data['MoneyWithdraw'];
            $log->user_id = $user->id;
                $log->save();

            $BankAccount->balance =  $BankAccount->balance - $data['MoneyWithdraw'];
            $BankAccount->update();
            DB::commit();
            return redirect()->route('home')->with('msg', 'Saque realizado com sucesso!');
        }



         });

    }
    // public function destroy($id){

    //       Car::findOrFail($id)->delete();

    // }






    }
