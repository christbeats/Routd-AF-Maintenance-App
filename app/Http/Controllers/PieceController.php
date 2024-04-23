<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piece;

class PieceController extends Controller
{
    public function index(){
        $pieces = Piece::all();
        return view('pieces.index', ['pieces' => $pieces]);
        
    }

    public function create(){
        return view('pieces.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'system' => 'required',
            'sousorgane' => 'required',
            'element' => 'nullable',
        ]);

        $newPiece = Piece::create($data);

        return redirect((route('piece.index')));
    }

    public function edit(Piece $piece){
        return view('pieces.edit', ['piece' => $piece]);
    }

    public function update(Piece $piece, Request $request){
        $data = $request->validate([
            'system' => 'required',
            'sousorgane' => 'required',
            'element' => 'nullable',
        ]);
        
        $piece->update($data);
        return redirect(route('piece.index'))->with('success', 'Pièce modifier avec success');
    }

    public function delete(Piece $piece){
        $piece->delete();
        return redirect(route('piece.index'))->with('success', 'Pièce supprimer avec success');
    }
}
