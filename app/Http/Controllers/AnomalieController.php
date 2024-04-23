<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anomalie;
use App\Models\Employee;

class AnomalieController extends Controller
{
    public function index(){
        $anomalies = Anomalie::with('employee', 'material')->get()->all();
        return view('anomalies.index', ['anomalies' => $anomalies], compact('anomalies'));

    }

    public function create(){
        $anomalies = Anomalie::with('employee', 'material')->get();

        return view('anomalies.create', compact('anomalies'));
    }

    public function store(Request $request){
        // dd($request);
        $data = $request->validate([
            'name' => 'required',
            'datedebut' => 'required',
            'materiel' => 'required',
            // 'chauffeur' => 'required',
            'commentaire' => 'nullable',
            'file_path' => 'nullable',
            'datefin' => 'nullable',
        ]);

        $newAnomalie = Anomalie::create($data);

        return redirect((route('anomalie.index')));
    }

    public function edit(Anomalie $anomalie){
        return view('anomalies.edit', ['anomalie' => $anomalie]);
    }

    public function update(Anomalie $anomalie, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'datedebut' => 'required',
            'materiel' => 'required',
            // 'chauffeur' => 'required',
            'commentaire' => 'nullable',
            'file_path' => 'nullable',
            'datefin' => 'nullable',
        ]);

        $anomalie->update($data);
        return redirect(route('anomalie.index'))->with('success', 'Anomalie modifier avec success');
    }

    public function delete(Anomalie $anomalie){
        $anomalie->delete();
        return redirect(route('anomalie.index'))->with('success', 'Anomalie supprimer avec success');
    }
}
