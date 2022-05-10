<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }


    public function order( Request $request )
    {
      $data = new order;

      $data->name = $request->name;
      $data->number = $request->number;
      $data->address = $request->address;
      $data->order = $request->order;
      
      $data->save();
      return redirect()->back();

    }

}
