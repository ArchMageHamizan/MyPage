<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller

{
    // normal way to fetch data from table
    function userData()
    {
        return DB::select("select * from users");
    }
}
