<?php
//php artisan make:controller DashboardController
namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $idea = new Idea([
            'content' => 'This is a test idea',
            'likes' => 0,
        ]);
        $idea->save();

        return view('dashboard', ['ideas' => Idea::orderBy('created_at', 'desc')->get()]);
    }
}
