<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anomalie;
use App\Models\Employee;
use App\Models\Material;

class AnomalieController extends Controller
{
    public function index(){
        $anomalies = Anomalie::with('employee', 'material')->get()->all();
        return view('anomalies.index', ['anomalies' => $anomalies], compact('anomalies'));

    }

    public function create(){
        $anomalies = Anomalie::with('employee')->get();
        $materials = Material::doesntHave('anomalie')->get();
        $employees = Employee::all();

        return view('anomalies.create', compact('anomalies', 'employees', 'materials'));
    }

    public function store(Request $request){
        // dd($request);
        $data = $request->all();

        $newAnomalie = Anomalie::create($data);

        return redirect((route('anomalie.index')));
    }

    public function edit(Anomalie $anomalie){
        $employees = Employee::all();
        $materials = Material::doesntHave('anomalie')->get();

        return view('anomalies.edit', ['anomalie' => $anomalie], compact('materials', 'employees'));
    }

    public function update(Anomalie $anomalie, Request $request){

        if ($anomalie->update($request->all())) {
            return redirect(route('anomalie.index'))->with('success', 'Materiel modifier avec success');
        }
        return redirect()->back()->withInput();

        // $data = $request->validate([
        //     'name' => 'required',
        //     'datedebut' => 'required',
        //     'materiel' => 'required',
        //     // 'chauffeur' => 'required',
        //     'commentaire' => 'nullable',
        //     'file_path' => 'nullable',
        //     'datefin' => 'nullable',
        // ]);

        // $anomalie->update($data);
        // return redirect(route('anomalie.index'))->with('success', 'Anomalie modifier avec success');
    }

    public function delete(Anomalie $anomalie){
        $anomalie->delete();
        return redirect(route('anomalie.index'))->with('success', 'Anomalie supprimer avec success');
    }
}
