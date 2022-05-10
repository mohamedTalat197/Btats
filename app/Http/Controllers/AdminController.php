<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;


class AdminController extends Controller
{
    public function adminorder()
    {

        $data = order::all();
        return view("admin",compact("data"));
    }
}
