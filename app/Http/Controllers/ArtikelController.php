<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index(){
        $artikels = ArtikelModel::getAll();
        return view('medium.index', compact('artikels'));
    }

    public function create(){
        return view('medium.form');
    }
    
    public function store(Request $request){
        // dd($request->all());
        $slug = strtolower($request->judul);
        $data = $request->all();
        $data['slug'] = str_replace(' ','-', $slug);
        // dd($data);
        unset($data["_token"]);
        $question = ArtikelModel::save($data);
        if($question){
            return redirect('/artikel')->with('sukses', 'Data berhasil diinput');
        }
    }

    public function show($id){
        $artikel = ArtikelModel::findById($id);
        $tags = ArtikelModel::findTagById($id);
        $tagku = explode(";", $tags->tag);
        // dd($tagku);

        return view('medium.show', compact(['artikel','tagku']));
    }

    public function edit($id){
        $artikel = ArtikelModel::findById($id);

        return view('medium.edit', compact('artikel'));
    }

    public function update($id, Request $request){
        $slug = strtolower($request->judul);
        $data = $request->all();
        $data['slug'] = str_replace(' ','-', $slug);
        
        $artikel = ArtikelModel::update($id, $data);

        return redirect('/artikel')->with('sukses', 'Data berhasil diinput');
    }

    public function destroy($id){
        $artikel = ArtikelModel::destroy($id);

        return redirect('/artikel');
    }
}
