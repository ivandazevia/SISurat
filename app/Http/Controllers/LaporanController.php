<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Faker\Provider\File;
use App\User;
use App\Surat;
use App\Exports\LaporanExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class LaporanController extends Controller
{
    public function index()
    {
        return view('user/laporansurat');
    }

    public function csv(Request $request)
    {
        $tipe = $request->tipesurat;
        $mulai = $request->dari;
        $sampai = $request->sampai;
        
        $filename = "Laporan Surat".$tipe." Tanggal ".$mulai." Sampai ".$sampai.".xlsx";
        $exporter = app()->makeWith(LaporanExport::class, compact('tipe','mulai','sampai'));   
        return $exporter->download($filename);
    }
}
