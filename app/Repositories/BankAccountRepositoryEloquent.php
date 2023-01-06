<?php
namespace App\Repositories;
use App\Models\BankAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return  DB::transaction(function () use ($request, $id) {


        $BankAccount = BankAccount::find($id);
        $data = $request->all();
        if($data['MoneyDeposit']< 0){
                $data['MoneyDeposit'] = 0;
        }

        $BankAccount->balance = $data['MoneyDeposit'] + $BankAccount->balance;
        $BankAccount->update();

         });

    }
    public function withdrawConfirm(Request $request, $id){
        

        return  DB::transaction(function () use ($request, $id) {

        $BankAccount = BankAccount::find($id);
        $data = $request->all();

        if($data['MoneyWithdraw'] > $BankAccount->balance  || $data['MoneyWithdraw']< 0){
            DB::rollBack();
            return redirect()->route('home')->with('msg2', 'Saldo insuficiente na conta!');

        }else{

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
