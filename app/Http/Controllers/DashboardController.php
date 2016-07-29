<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farmer;
use App\Agro;
use App\Donor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //

    public function index()
    {
    	$title="Formers Connect:Admin";
    	return view("admin.dashboard",compact('title'));
    }

    public function listFarmer()
    {
        $farmers = Farmer::all();
       
        $title="Formers Connect:List Farmers";
        return view('admin.list',compact('title','farmers'));
    }    

    public function listAgro()
    {
        $farmers = Agro::all();
       
        $title="Formers Connect:List Agrodealer";
        return view('admin.agro',compact('title','farmers'));
    }    

    public function listDonor()
    {
    	$farmers = Donor::all();

        $title="Formers Connect:List Donors";
    	return view('admin.donor',compact('title','farmers'));
    }

    public function showSchedule()
    {
         $title="Formers Connect:Assign Schedule";
        return view('admin.showSchedule',compact('title'));
    }

    public function viewFarmer()
    {
        $title="Formers Connect:Register Farmer";
       return view('admin.regfarmer', compact('title'));
    }

    public function uploadFarmer()
    {
        $title="Formers Connect:Upload Farmer by CSV";
       return view('admin.upload_farmer', compact('title'));
    }

    public function schemafarmer()
    {
                $farmers = Farmer::all();

        $title="Formers Connect:Assign Farmer Schema";
        return view('admin.assign_farmer',compact('title','farmers'));
       
    }

    public function createSchema()
    {
        $farmers = Farmer::all();

        $title="Formers Connect:Assign Farmer Schema";
        return view('admin.create_schema',compact('title','farmers'));
    }   

    public function viewSchema()
    {
       

        $title="Formers Connect:Assign Farmer Schema";
        return view('admin.view_schema',compact('title'));
    }
}
