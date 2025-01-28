<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(Request $request)
    {
        $idea = Idea::create([
            'content' => request()->get('idea', ''),
        ]);
        $idea->save();

        return redirect()->route('dashboard');
    }
}
