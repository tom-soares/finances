<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class EntryController extends Controller
{
    protected $entryModel;

    public function __construct(Entry $entryModel)
    {
        $this->middleware('auth');
        $this->entryModel = $entryModel;
    }

    public function index(Request$request)
    {

        return view('entries.index');
    }

    public function store(Request $request)
    {
        $entryValue = $request->input('value');
        $entryname = $request->input('description');

        DB::table('entries')->insert(

            ['description'=> $entryname, 'value'=> $entryValue ]
        );

        return redirect('list');
    }

    public function list()
    {
       $entries = $this->entryModel->all();

        return view('entries.list', compact('entries'));
    }

}
