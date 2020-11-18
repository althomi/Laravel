<?php

namespace App\Http\Controllers;

use App\Models\Script;
use Illuminate\Http\Request;
use App\Exports\TestScripts;
//use Excel;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Collection;
//use Maatwebsite\Excel\Concerns\FromCollection,
class ScriptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scripts = Script::latest()->paginate(5);

        return view('scripts.index',compact('scripts'))
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'szenennr' => 'required',
        ]);

        Script::create($request->all());

        return redirect()->route('scripts.index')
            ->with('success','Script created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Script  $script
     * @return \Illuminate\Http\Response
     */
    public function show(Script $script)
    {
        return view('scripts.show',compact('script'));
    }

    public function objectAdd()
    {
        return view('scripts.objectAdd');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Script  $script
     * @return \Illuminate\Http\Response
     */
    public function edit(Script $script)
    {
        return view('scripts.edit',compact('script'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Script  $script
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Script $script)
    {
        $request->validate([
            'szenennr' => 'required',
        ]);

        $script->update($request->all());

        return redirect()->route('scripts.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Script  $script
     * @return \Illuminate\Http\Response
     */
    public function destroy(Script $script)
    {
        $script->delete();

        return redirect()->route('scripts.index')
            ->with('success','Script deleted successfully');
    }

    public function exportData(){
        return Excel::download(new TestScripts(), 'scripts.xlsx');    //return Script::all();returned alle Daten aus der DB
    }

}
/*class DataExport implements FromCollection{
    public function collection(){
        return Script::all();    //returned alle Daten aus der DB
    }
}*/
