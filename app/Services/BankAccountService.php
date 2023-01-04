<?php

namespace App\Services;

use App\Repositories\BankAccountRepository;

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

}
