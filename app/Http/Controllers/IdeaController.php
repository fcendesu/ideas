<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{

    public function show(Idea $idea)
    {
        return view('ideas.show', compact('idea'));
    }
    public function store(Request $request)
    {
        $validated = request()->validate([
            'content' => 'required|min:3|max:255',
        ]);

        $validated['user_id'] = auth()->id();

        Idea::create($validated);


        return redirect()->route('dashboard')->with('success', 'Idea created successfully!');
    }

    public function destroy(Idea $idea)
    {

        if ($idea->user_id !== auth()->id()) {
            abort(403);
        }

        $idea->delete();

        return redirect()->route('dashboard')->with('success', 'Idea deleted successfully!');
    }

    public function edit(Idea $idea)
    {
        if ($idea->user_id !== auth()->id()) {
            abort(403);
        }

        $editing = true;
        return view('ideas.show', compact('idea', 'editing'));
    }

    public function update(Idea $idea)
    {

        if ($idea->user_id !== auth()->id()) {
            abort(403);
        }
        $validated = request()->validate([
            'content' => 'required|min:3|max:255',
        ]);
        $idea->update($validated);

        return redirect()->route('ideas.show', $idea->id)->with('success', 'Idea updated successfully!');

    }
}
