<?php

namespace App\Services;

use App\Repositories\BankAccountRepository;
use Illuminate\Http\Request;

class BankAccountService
{
    private $BankAccountRepository;
    public function __construct(BankAccountRepository $BankAccountRepository)
    {

        $this->BankAccountRepository = $BankAccountRepository;
    }

    public function store()
    {

        return $this->BankAccountRepository->store();
    }
    public function depositConfirm(Request $request)
    {
        $data = json_encode(auth()->user()->BankAccount()->get());
        $obj = json_decode($data);

        return $this->BankAccountRepository->depositConfirm($request, $obj[0]->id);
    }

    public function withdrawConfirm(Request $request)
    {
        $data = json_encode(auth()->user()->BankAccount()->get());
        $obj = json_decode($data);

        return $this->BankAccountRepository->withdrawConfirm($request, $obj[0]->id);
    }

}
