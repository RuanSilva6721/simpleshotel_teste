<?php
namespace App\Repositories;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

interface CarRepository{

    public function store(Request $request);
    public function edit($id);
    public function update(Request $request);
    public function destroy($id);
    
}