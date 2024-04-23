<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    public function index(){
        $materials = Material::with('employee', 'category')->get()->all();
        return view('materials.index', ['materials' => $materials], compact('materials',));

    }

    public function create(){
        $materials = Material::with('employee')->get();
        $categories = Category::all();
        $employees = Employee::doesntHave('materials')->get();

        return view('materials.create', compact('materials', 'employees', 'categories'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'numParc' => 'required',
            // 'type' => 'required',
            'marque' => 'nullable',
            'modele' => 'nullable',
            'immatriculation' => 'required',
            'numChassis' => 'nullable',
            'dateAquisition' => 'required',
            'etatAquisition' => 'required',
        ]);

        $newMaterial = Material::create($data);

        return redirect((route('material.index')));
    }

    public function edit(Material $material){
        $categories = Category::all();
        $employees = Employee::doesntHave('materials')->get();

        return view('materials.edit', compact('categories','material','employees'));
    }

    public function update(Material $material, Request $request){
        if ($material->update($request->all())) {
            return redirect(route('material.index'))->with('success', 'Materiel modifier avec success');
        }
        return redirect()->back()->withInput();
    }

    public function delete(Material $material){
        $material->delete();
        return redirect(route('material.index'))->with('success', 'Materiel supprimer avec success');
    }
}
