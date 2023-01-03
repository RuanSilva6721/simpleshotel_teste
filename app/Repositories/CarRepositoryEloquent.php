<?php
namespace App\Repositories;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarRepositoryEloquent implements CarRepository{

    public function store(Request $request){

        return  DB::transaction(function () use ($request) {
             $car = new Car;
             $user = auth()->user();
             $car->modelCar = $request->modelCar;
             $car->brandCar = $request->brandCar;
             $car->version = $request->version;
             $car->description = $request->description;
             $car->items = $request->items;
             $car->user_id = $user->id;
 
             $car->save();
 
         });
          
    }
    public function edit($id){
        
        return Car::findOrFail($id);
          
    }
    public function update(Request $request){

        return  DB::transaction(function () use ($request) {
            
        $data = $request->all();
        Car::findOrFail($request->id)->update($data);
 
         });
          
    }
    public function destroy($id){
        
          Car::findOrFail($id)->delete();
          
    }
 
        
       



    }