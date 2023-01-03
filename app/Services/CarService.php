<?php

namespace App\Services;

use App\Repositories\CarRepository;

class CarService
{
    private $carRepository;
    public function __construct(CarRepository $carRepository)
    {

        $this->carRepository = $carRepository;
    }

    public function store($request)
    {
        
        return $this->carRepository->store($request);
    }
    public function edit($id)
    {
        
        return $this->carRepository->edit($id);
    }
    public function update($request)
    {
        
        return $this->carRepository->update($request);
    }
    public function destroy($id)
    {
        
        return $this->carRepository->destroy($id);
    }
}
