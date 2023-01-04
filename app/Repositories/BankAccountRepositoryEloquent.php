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
            $BankAccount->counts = '2022'.rand(1000,9999);
            $BankAccount->balance = 0;
            $BankAccount->user_id = $user->id;
    
            $BankAccount->save();
 
         });
          
    }
    // public function edit($id){
        
    //     return Car::findOrFail($id);
          
    // }
    // public function update(Request $request){

    //     return  DB::transaction(function () use ($request) {
            
    //     $data = $request->all();
    //     Car::findOrFail($request->id)->update($data);
 
    //      });
          
    // }
    // public function destroy($id){
        
    //       Car::findOrFail($id)->delete();
          
    // }
 
        
       



    }