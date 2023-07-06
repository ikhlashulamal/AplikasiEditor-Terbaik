<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class HitungController extends Controller
{

    public function hitung(Request $request){

        $kriteria = Kriteria::sum('bobot');

        $bobot1 = 10/$kriteria;
        $bobot2 = 25/$kriteria;
        $bobot3 = 25/$kriteria;
        $bobot4 = 30/$kriteria;
        $bobot5 = 10/$kriteria;
        $bobot6 = 10/$kriteria;

        $widget1 = [
            'kriteria' => $bobot1,
        ];
        $widget2 = [
            'kriteria' => $bobot2,
        ];
        $widget3 = [
            'kriteria' => $bobot3,
        ];
        $widget4 = [
            'kriteria' => $bobot4,
        ];
        $widget5 = [
            'kriteria' => $bobot5,
        ];
        $widget6 = [
            'kriteria' => $bobot6,
        ];


        $Alternatif = Alternatif::get();
        $data = Alternatif::orderby('alternatif', 'asc')->get();

        $minC1 = Alternatif::min('peringkat');
        $maxC1 = Alternatif::max('peringkat');
        $minC2 = Alternatif::min('ukuran');
        $maxC2 = Alternatif::max('ukuran');
        $minC3 = Alternatif::min('unduhan');
        $maxC3 = Alternatif::max('unduhan');
        $minC4 = Alternatif::min('aktif');
        $maxC4 = Alternatif::max('aktif');
        $minC5 = Alternatif::min('manfaat');
        $maxC5 = Alternatif::max('manfaat');
        $minC6 = Alternatif::min('kelebihan');
        $maxC6 = Alternatif::max('kelebihan');



        $C1min =[
            'alternatif' => $minC1,
        ];
        $C1max =[
            'alternatif' => $maxC1,
        ];
        $C2min =[
            'alternatif' => $minC2,
        ];
        $C2max =[
            'alternatif' => $maxC2,
        ];
        $C3min =[
            'alternatif' => $minC3,
        ];
        $C3max =[
            'alternatif' => $maxC3,
        ];
        $C4min =[
            'alternatif' => $minC4,
        ];
        $C4max =[
            'alternatif' => $maxC4,
        ];
        $C5min =[
            'alternatif' => $minC5,
        ];
        $C5max =[
            'alternatif' => $maxC5,
        ];
        $C6min =[
            'alternatif' => $minC6,
        ];
        $C6max =[
            'alternatif' => $maxC6,
        ];






        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'alternatif' => $hasil,
        ];

        return view('hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5','widget6', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max','C5min', 'C5max','C6max'));
    }

}
