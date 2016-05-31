<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request$request)
    {
        //$entry = $request->user()->tasks()->get();

        return view('entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        return redirect('/entry');
        // Create The Task...
    }

}
