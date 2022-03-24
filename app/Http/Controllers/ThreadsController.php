<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ThreadsController extends Controller
{
    public function index()
    {
        return Inertia::render('Thread/Index', [
            'threads' => Thread::with('author')->take(50)->latest()->get()
        ]);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }
}
