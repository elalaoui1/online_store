<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
public function index()
{
$data = [];
$data["title"] = "Home Page - Online Store";
return view('home.index')->with("data", $data);
}

public function check()
{

return view('cart.check');
}


// public function about()
// {
// $data1 = "About us - Online Store";
// $data2 = "About us";
// $description = "This is an about page ...";
// $author = "Developed by: Your Name";
// return view('home.about')->with("title", $data1)
// ->with("subtitle", $data2)
// ->with("description", $description)
// ->with("author", $author);


// }

public function about () {
    $data = array();
    $data["title"] = "About us - Online Store";
    $data["subtitle"] = "About us";
    $data["description"] = "This is an about page ...";
    $data["author"] = "Developed by: Your Name";
    return view('home.about')->with("data", $data);

}

}
