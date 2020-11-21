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

    public function index()
    {
        $scripts = Script::latest()->paginate(10);
        return view('scripts.index', compact('scripts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('scripts.create');

    }

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
            'Szenennr' => 'nullable|integer',
            'Einstellungsnr' => 'nullable|integer',
            'Bildbeschreibung' => 'nullable|string',
            'Kamera' => 'nullable|string',
            'Ort' => 'nullable|string',
            'Ton' => 'nullable|string',
            'Effekt' => 'nullable|string',
            'user_id' => 'nullable'

        ]);
    }

    public function show(Script $script)
    {
        return view('scripts.show', compact('script'));
    }

    public function edit(Script $script)
    {
        return view('scripts.edit', compact('script'));
    }

    public function update(Request $request, Script $script)
    {
        $request->validate([
            'Szenennr' => 'nullable|integer',
            'Einstellungsnr' => 'nullable|integer',
            'Bildbeschreibung' => 'nullable|string',
            'Kamera' => 'nullable|string',
            'Ort' => 'nullable|string',
            'Ton' => 'nullable|string',
            'Effekt' => 'nullable|string',
            'user_id' => 'nullable'
        ]);

        $script->update($request->all());
        return redirect()->route('scripts.index')
            ->with('success', 'Dein Eintrag wurden erfolgreich aktualisiert.');
    }

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

    public function getUsername(){
        $username = Auth::user()->getAuthIdentifierName();
    }
}
