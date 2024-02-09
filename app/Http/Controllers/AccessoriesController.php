<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facades\DB; //using DB class

class AccessoriesController extends Controller
{
    function dbNoModel(){
        return DB::table('accessories');//fetch accessories table using table function from DB class;
    }
}
