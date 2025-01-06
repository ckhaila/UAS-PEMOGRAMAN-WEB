<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');  // Pastikan ada file view home.blade.php
    }

    public function timDeveloper()
    {
        return view('tim-developer');  // Pastikan ada file view tim-developer.blade.php
    }

    public function caraMenanam()
    {
        return view('cara-menanam');  // Pastikan ada file view cara-menanam.blade.php
    }

    public function kontak()
    {
        return view('kontak');  // Pastikan ada file view kontak.blade.php
    }
}

