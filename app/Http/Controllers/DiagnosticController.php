<?php

namespace App\Http\Controllers;

use App\Models\Anomalie;
use Illuminate\Http\Request;
use App\Models\Diagnostic;
use App\Models\Employee;

class DiagnosticController extends Controller
{
    public function index(){
        $diagnostics = Diagnostic::with('anomalie')->get()->all();
        return view('diagnostics.index', ['diagnostics' => $diagnostics], compact('diagnostics'));

    }

    public function create(){
        $diagnostics = Diagnostic::with('anomalie')->get();
        $anomalies = Anomalie::all();
        $employees = Employee::all();
        return view('diagnostics.create', compact('anomalies', 'diagnostics', 'employees'));
    }

    public function store(Request $request){
        // dd($request);
        $data = $request->all();

        $newDiagnostic = Diagnostic::create($data);

        return redirect((route('diagnostic.index')));
    }

    public function edit(Diagnostic $diagnostic){
        $anomalies = Anomalie::all();
        $employees = Employee::all();
        return view('diagnostics.edit', ['diagnostic' => $diagnostic], compact('anomalies','diagnostics', 'employees'));
    }

    public function update(Diagnostic $diagnostic, Request $request){

        if ($diagnostic->update($request->all())) {
            return redirect(route('diagnostic.index'))->with('success', 'Diagnostique modifier avec success');
        }
        return redirect()->back()->withInput();

        // $data = $request->validate([
        //     'intervenant' => 'required',
        //     'commentaire' => 'nullable',
        //     'situation' => 'required',
        //     'file_path' => 'nullable',
        // ]);

        // $diagnostic->update($data);
        // return redirect(route('diagnostic.index'))->with('success', 'Diagnostic modifier avec success');
    }

    public function delete(Diagnostic $diagnostic){
        $diagnostic->delete();
        return redirect(route('diagnostic.index'))->with('success', 'Diagnostic supprimer avec success');
    }
}
