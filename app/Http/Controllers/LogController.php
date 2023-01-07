<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Http\Requests\StoreLogRequest;
use App\Http\Requests\UpdateLogRequest;
use App\Models\User;

class LogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($user)
    {
        return json_encode($user->Log()->get());
    }


}
