<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //using DB class

class AccessoriesController extends Controller
{
    function dbNoModel(){
        return DB::table('accessories')->get();//fetch accessories table using table function from DB class;
                                               // must include get function also.
    }
}
