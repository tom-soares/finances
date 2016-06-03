<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;
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

    public function validatorCheckBox($checkReceita, $checkDespesa)
    {
        if($checkReceita == 'true')
        {
            $checkReceita = 1;
            return $checkReceita;
        }else
                $checkDespesa = 2;
                return $checkDespesa;

    }

    public function store(Request $request)
    {
        var_dump($request->all());
        $entryReceita = $request->input('receita');
        $entryDespesa = $request->input('despesa');

        $entryCheck = $this->validatorCheckBox($entryReceita, $entryDespesa);
        $entryValue = $request->input('value');
        $entryname = $request->input('description');


        DB::table('entries')->insert(

            ['description'=> $entryname, 'value'=> $entryValue, 'id_category'=> $entryCheck]
        );

        return redirect('list');
    }

    public function list()
    {
       //$entries = $this->entryModel->all();
        //return view('entries.list', compact('entries'));

        $listagem = DB::table('entries')
            ->join('categories', 'entries.id_category', '=', 'categories.id_category')
            ->select('entries.*', 'categories.name')
            ->get();
        return view('entries.list', compact('listagem'));
    }

    public function destroy($id)
    {
        $this->entryModel->destroy($id);

        return redirect()->route('entries.list');
    }

    public function editView($id)
    {
      $myentry = Entry::find($id);
      //var_dump($myentry);

      return view('entries.edit', compact('id','myentry'));
    }

    public function edit(Request $request)
    {
      $entryReceita = $request->input('receita');
      $entryDespesa = $request->input('despesa');

      $entryCheck = $this->validatorCheckBox($entryReceita, $entryDespesa);
      $entryValue = $request->input('value');
      $entryname = $request->input('description');
      $entryid = $request->input('id_entry');

      $myentry = Entry::find($entryid);
      $myentry->description = $entryname;
      $myentry->value = $entryValue;
      $myentry->id_category = $entryCheck;
      $myentry->save();

      return redirect()->route('entries.list');
    }

}
