<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Services\CarService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PHPUnit\Exception;
use function PHPUnit\Framework\throwException;

class CarController extends Controller
{

    public function __construct()
    {
       
        $this->middleware('auth');

    }

    public function create()
    {
        return view('cars.create');
    }


    public function store(Request $request, CarService $carService)
    {
        try {
            $carService->store($request);
            return redirect()->route('home')->with('msg', 'Carro adicionado com sucesso!');

        } catch (Exception $e) {
            return redirect()->route('home')->with('msg2', 'Falha ao tentar adiconar o carro carro!');
        }
        
    }
    public function edit($id, CarService $carService)
    {
        try {
             $car = $carService->edit($id);
            return view('cars.edit', ['car' => $car]);

        } catch (Exception $e) {
            return redirect()->route('home')->with('msg2', 'Carro não encontrado!');
        }
        
    }

    public function update(Request $request, CarService $carService)
    {
        try {
            $carService->update($request);
            return redirect()->route('home')->with('msg', 'Carro atualizado com sucesso!');

        } catch (Exception $e) {
            return redirect()->route('home')->with('msg2', 'Falha ao tentar atualizar o carro carro!');
        }

    }


    public function destroy($id , CarService $carService)
    {
        try {
             $carService->destroy($id);
             return redirect()->route('home')->with('msg', 'Carro deletado com sucesso!');

       } catch (Exception $e) {
           return redirect()->route('home')->with('msg2', 'Falha ao tentar deletar o carro carro!');
       }   

    }
}
