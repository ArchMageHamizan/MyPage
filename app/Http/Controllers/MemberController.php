<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;//Import model folder

class MemberController extends Controller
{
    function getData()
    {
        return Member::all();//fetch all data
    }
}
