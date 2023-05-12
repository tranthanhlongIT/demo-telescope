<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DemoController extends Controller
{
    public function throwException()
    {
        throw new \Exception('This is a sample exception');
    }

    public function getAllUser()
    {
        $data = DB::table('users')->get();

        return response()->json($data);
    }

    public function getUser(User $user)
    {
        return response()->json($user);
    }
}
