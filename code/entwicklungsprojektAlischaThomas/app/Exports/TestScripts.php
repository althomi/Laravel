<?php

namespace App\Exports;

//use App\TestScripts;
use App\Models\Script;
use Maatwebsite\Excel\Concerns\FromCollection;
//use APP\Http\Controller\ScriptController,

class TestScripts implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Script::all();
    }
}
