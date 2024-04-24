<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piece;
use App\Models\Category;

class PieceController extends Controller
{
    public function index(){
        $pieces = Piece::with('category')->get()->all();
        return view('pieces.index', ['pieces' => $pieces], compact('pieces'));

    }

    public function create(){
        $categories = Category::all();

        return view('pieces.create', compact('categories'));
    }

    public function store(Request $request){
        $data = $request->all();

        $newPiece = Piece::create($data);

        return redirect((route('piece.index')));
    }

    public function edit(Piece $piece){
        $categories = Category::all();

        return view('pieces.edit', ['piece' => $piece], compact('categories'));
    }

    public function update(Piece $piece, Request $request){

        if ($piece->update($request->all())) {
            return redirect(route('piece.index'))->with('success', 'Piece modifier avec success');
        }
        return redirect()->back()->withInput();

        // $data = $request->validate([
        //     'system' => 'required',
        //     'sousorgane' => 'required',
        //     'element' => 'nullable',
        // ]);

        // $piece->update($data);
        // return redirect(route('piece.index'))->with('success', 'Pièce modifier avec success');
    }

    public function delete(Piece $piece){
        $piece->delete();
        return redirect(route('piece.index'))->with('success', 'Pièce supprimer avec success');
    }
}
