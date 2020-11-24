<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        //$users = DB::table("users")->get();
        return view('index', compact('users'));
    }
}
