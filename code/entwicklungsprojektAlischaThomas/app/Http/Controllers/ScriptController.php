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
class ScriptController extends Controller
{
    public function index()
    {
        $scripts = Script::latest()->paginate(5);

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
        $request->validate([
            'szenennr' => 'required',
            'einstellungsnr'=>'required',
            'bildbeschreibung'=>'nullable|string',
            'kamera'=>'nullable|string',
            'ort'=>'nullable|string',
            'ton'=>'nullable|string',
            'effekt'=>'nullable|string'
        ]);

        Script::create($request->all());

        return redirect()->route('scripts.index')
            ->with('success', 'Dein Eintrag wurde erfolgreich angelegt');
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
            'szenennr' => 'required',
            'einstellungsnr'=>'required',
            'bildbeschreibung'=>'nullable|string',
            'kamera'=>'nullable|string',
            'ort'=>'nullable|string',
             'ton'=>'nullable|string',
            'effekt'=>'nullable|string'
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
