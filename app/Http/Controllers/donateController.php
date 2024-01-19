<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade; //Inline blade template


class donateController extends Controller
{
    function loadDonate(){
        $listDonation=["RM 1","RM 2","RM 3","RM 4","RM 5"];
        $totalList=count($listDonation);
        $html=Blade::render('Total list of donation: {{$totalList}}',['totalList'=>$totalList]);
        return view("donate",['donation'=>$listDonation,'html'=>$html]);
    }
}
