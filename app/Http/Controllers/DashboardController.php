<?php
//php artisan make:controller DashboardController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("welcome");
    }
}
