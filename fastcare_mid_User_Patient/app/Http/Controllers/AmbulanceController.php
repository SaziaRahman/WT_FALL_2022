<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SearchAmbulanceModel;
use App\Models\DoctorModel;


class AmbulanceController extends Controller
{
    
    public function AmbulancePage()
    {
    	return view('booking');
    }

    function formSearch()
	{

        $search_text=$_REQUEST['search1'];
        $ambulance1=SearchAmbulanceModel::where('Availability','LIKE','%'.$search_text.'%')->get();
            return view('searchResult',compact('ambulance1'));
	}

    function formShow()
	{

        $showdata=DoctorModel::all();
            return view('doctors',['doctors'=>$showdata]);
	}
}
