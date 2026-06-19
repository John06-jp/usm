<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Services\AdminActivityLogger;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'comments' => 'required|string',
        ]);
    
        Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'comments' => $request->comments, 
        ]);

        $preview = \Illuminate\Support\Str::limit($request->comments, 120);
        AdminActivityLogger::feedback($preview);
    
        return redirect()->back()->with('success', 'Thank you! Your feedback has been submitted.');
    }
    
    public function index()
    {
        $feedbacks = Feedback::latest()->paginate(10);
        return view('feedbacks.index', compact('feedbacks'));
    }

}
