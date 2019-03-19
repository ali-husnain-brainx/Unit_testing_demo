<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestController extends Controller
{
    public function userList()
    {
        $user = User::where('id', 4)->with('donations')->first();
        dd( $user->donations[0]->amount );
    }
}
