<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class BankAccount extends Model
{
    use HasFactory;
    protected $table = "bank_accounts";
    protected $fillable = ["counts","balance","user_id"];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
