<?php

namespace App\Http\Controllers;

use App\Models\Script;
use Illuminate\Http\Request;
use App\Exports\Export;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Collection;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class ScriptController extends Controller
{


    public function starten(){
        return view('scripts.starten');

    }

/*$items = Item::where('author_id', Auth::user()->id)->orderBy('id','DESC')->with('author')->paginate(5);
return view('items.index',compact('items'))
->with('i', ($request->input('page', 1) - 1) * 5);*/

    public function index()
    {
        $scripts = Script::latest()->paginate(2);


        return view('scripts.index', compact('scripts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scripts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $script = new Script;
        $script->Szenennr = $request->input('Szenennr');
        $script->Einstellungsnr = $request->input('Einstellungsnr');
        $script->Bildbeschreibung = $request->input('Bildbeschreibung');
        $script->Kamera = $request->input('Kamera');
        $script->Ort = $request->input('Ort');
        $script->Ton = $request->input('Ton');
        $script->Effekt = $request->input('Effekt');
        $script->user_id = auth()->user()->id;
        $script->save();
        return redirect('/scripts')->with('success', 'Dein Eintrag wurde erfolgreich deinem Drehbuch hinzugefügt.');

        $request->validate([
            'Szenennr' => 'required',
            'Einstellungsnr' => 'required',
            'Bildbeschreibung' => 'nullable',
            'Kamera' => 'nullable',
            'Ort' => 'nullable',
            'Ton' => 'nullable',
            'Effekt' => 'nullable',
            'user_id' => 'nullable'

        ]);
    }



        /*Script::create($request->all());



        return redirect()->route('scripts.index')
            ->with('success', 'Dein Eintrag wurde erfolgreich angelegt');/*
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Script $script
     * @return \Illuminate\Http\Response
     */
    public function show(Script $script)
    {
        return view('scripts.show', compact('script'));
    }

    /* public function objectAdd()
     {
         return view('scripts.objectAdd');
     }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Script $script
     * @return \Illuminate\Http\Response
     */
    public function edit(Script $script)
    {
        return view('scripts.edit', compact('script'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Script $script
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Script $script)
    {
        $request->validate([
            'Szenennr' => 'required',
            'Einstellungsnr'=>'required',
            'Bildbeschreibung'=>'nullable',
            'Kamera'=>'nullable',
            'Ort'=>'nullable',
             'Ton'=>'nullable',
            'Effekt'=>'nullable',
            'user_id'=>'nullable'


        ]);

        $script->update($request->all());

        return redirect()->route('scripts.index')
            ->with('success', 'Dein Eintrag wurden erfolgreich aktualisiert.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Script $script
     * @return \Illuminate\Http\Response
     */
    public function destroy(Script $script)
    {
        $script->delete();

        return redirect()->route('scripts.index')
            ->with('success', 'Dein Eintrag wurder erfolgreich aus dem Drehbuch entfernt');
    }

    public function exportData()
    {
        return Excel::download(new Export(), 'scripts.xlsx');    //return Script::all();returned alle Daten aus der DB
    }

    public function deleteScript($id){
        $script = Script::find($id);
        $script->delete();
        return response()->json(['success'=>'Dein Eintrag wurde erfolgreich aus dem Drehbuch entfernt.']);

    }

}
