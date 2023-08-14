<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    //

public function index()
{
    $viewData = [];
    $viewData["title"] = "Admin Page - Admin - Online Store";
    return view('admin.home.index')->with("viewData", $viewData);
}


}
