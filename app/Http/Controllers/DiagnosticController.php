<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnostic;

class DiagnosticController extends Controller
{
    public function index(){
        $diagnostics = Diagnostic::all();
        return view('diagnostics.index', ['diagnostics' => $diagnostics]);
        
    }

    public function create(){
        return view('diagnostics.create');
    }

    public function store(Request $request){
        // dd($request);
        $data = $request->validate([
            'intervenant' => 'required',
            'commentaire' => 'nullable',
            'situation' => 'required',
            'file_path' => 'nullable',
        ]);

        $newDiagnostic = Diagnostic::create($data);

        return redirect((route('diagnostic.index')));
    }

    public function edit(Diagnostic $diagnostic){
        return view('diagnostics.edit', ['diagnostic' => $diagnostic]);
    }

    public function update(Diagnostic $diagnostic, Request $request){
        $data = $request->validate([
            'intervenant' => 'required',
            'commentaire' => 'nullable',
            'situation' => 'required',
            'file_path' => 'nullable',
        ]);
        
        $diagnostic->update($data);
        return redirect(route('diagnostic.index'))->with('success', 'Diagnostic modifier avec success');
    }

    public function delete(Diagnostic $diagnostic){
        $diagnostic->delete();
        return redirect(route('diagnostic.index'))->with('success', 'Diagnostic supprimer avec success');
    }
}
