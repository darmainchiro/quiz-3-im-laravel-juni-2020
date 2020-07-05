<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel {
    public static function getAll() {
        $artikels = DB::table('artikels')->get();
        return $artikels;
    }

    public static function save($data) {
        $new_artikel = DB::table('artikels')->insert($data);
        return $new_artikel;
    }

    public static function findById($id) {
        $artikel = DB::table('artikels')->where('id', $id)->first();
        return $artikel;
    }

    public static function findTagById($id) {
        $artikel = DB::table('artikels')->select('tag')->where('id', $id)->first();
        return $artikel;
    }


    public static function update($id, $request) {
        $artikel = DB::table('artikels')
                        ->where('id', $id)
                        ->update([
                            'judul' => $request['judul'],
                            'isi' => $request['isi'],
                            'slug' => $request['slug'],
                            'tag' => $request['tag']
                        ]);
        return $artikel;
    }

    public static function destroy($id) {
        $deleted = DB::table('artikels')->where('id', $id)->delete();
        return $deleted;
    }

}