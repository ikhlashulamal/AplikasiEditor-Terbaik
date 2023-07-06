<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index() {
        return view('dataalternatif', [
            'users' => Alternatif::all(),
            'title' => 'Data alternatif'
        ]);
    }
    public function add() {
        return view('adddataalternatif',[
            'title' => 'Tambah Data alternatif'
        ]);
    }
    public function edit($id){
        
        // $alternatif = Alternatif::where('id', $id)->first();

        // return view('editalternatif', [
        //     'alternatif' => $alternatif,
        //     'title' => 'Edit Data alternatif'
        // ]);
        return view('editalternatif')->with([
            'alternatif' => Alternatif::find($id),
        ]);

    }

    public function update(Request $request, $id) {
        $alternatif1      = $request->input('alternatif');
        $peringkat1   = $request->input('peringkat');
        $ukuran1 = $request->input('ukuran');
        $unduhan1 = $request->input('unduhan');
        $aktif1 = $request->input('aktif');
        $manfaat1 = $request->input('manfaat');
        $kelebihan1 = $request->input('kelebihan');
        
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->alternatif    = $alternatif1;
        $alternatif->peringkat = $peringkat1;
        $alternatif->ukuran = $ukuran1;
        $alternatif->unduhan = $unduhan1;
        $alternatif->aktif = $aktif1;
        $alternatif->manfaat = $manfaat1;
        $alternatif->kelebihan = $kelebihan1;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }


    public function dashboard(){
        $alternatif= Alternatif::count();

        return view('main', compact('alternatif'));

    }

    public function store(Request $request) {
        $alternatif1 = $request->input('alternatif');
        $peringkat1 = $request->input('peringkat');
        $ukuran1 = $request->input('ukuran');
        $unduhan1 = $request->input('unduhan');
        $aktif1 = $request->input('aktif');
        $manfaat1 = $request->input('manfaat');
        $kelebihan1 = $request->input('kelebihan');

        $alternatif = new Alternatif;
        $alternatif->alternatif    = $alternatif1;
        $alternatif->peringkat = $peringkat1;
        $alternatif->ukuran = $ukuran1;
        $alternatif->unduhan = $unduhan1;
        $alternatif->aktif = $aktif1;
        $alternatif->manfaat = $manfaat1;
        $alternatif->kelebihan = $kelebihan1;


        $alternatif->save();

        return redirect()->to('/alternatif');
    }
    public function delete($id) {
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->delete();
        return redirect()->back();
    }
}
