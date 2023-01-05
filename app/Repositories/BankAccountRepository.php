<?php
namespace App\Repositories;
use App\Models\BankAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

interface BankAccountRepository{

    public function store();
    public function depositConfirm(Request $request, $id);
    public function withdrawConfirm(Request $request, $id);

}
