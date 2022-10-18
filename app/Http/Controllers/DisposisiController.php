<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Disposisi;

class DisposisiController extends Controller
{
    public function index($id)
    {
        $surat = DB::table('surats')
                    ->where('id_surat',$id)
                    ->get();
        date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d', time());
        $waktu = date('Y-m-d H:i:s', time());
        
        return view('user/createdisposisi', compact('surat','time','waktu'));
    }

    public function getDisposisi()
    {
        if( (session()->get('userSession')['authority'] == "admin") )
        {
            $disposisi = DB::table('disposisi_surats')
                        ->select('disposisi_surats.*','surats.no_surat')
                        ->join('surats', 'surats.id_surat','=','disposisi_surats.id_surats')
                        ->get();
        }
        else
        {
            $name = session()->get('userSession')['name'];
            $disposisi = DB::table('disposisi_surats')
                        ->select('disposisi_surats.*','surats.no_surat')
                        ->join('surats', 'surats.id_surat','=','disposisi_surats.id_surats')
                        ->where('disposisi_surats.disposisi_status','disposisi')
                        ->orWhere('disposisi_surats.disposisi_status','diterima')
                        ->where('disposisi_surats.untuk',$name)
                        ->get();
        }
        

        return view('user/disposisi', compact('disposisi'));
    }

    public function showDisposisi($id)
    {
        $disposisi = DB::table('disposisi_surats')
                        ->select('disposisi_surats.*','surats.no_surat')
                        ->join('surats', 'surats.id_surat','=','disposisi_surats.id_surats')
                        ->where('surats.id_surat',$id)
                        ->get();

        return view('user/detaildisposisi', compact('disposisi'));
    }

    public function store(Request $request)
    {
        $disposisi = new Disposisi;

        $disposisi->id_surats = $request->idsurat;
        $disposisi->dari = $request->dari;
        $disposisi->untuk = $request->untuk;
        $disposisi->disposisi_status = 'un_disposisi';
        $disposisi->status_surat_disposisi = 'read';
        $disposisi->tipe_surat_disposisi = $request->tipesurat;
        $disposisi->tanggal_disposisi = $request->tgl;
        $disposisi->waktu_disposisi = $request->waktu;
        $disposisi->catatan = $request->catatan;

        $disposisi->save();
        return redirect('user/get-disposi-surat');
        
    }

    public function verif($id)
    {
        $surat = DB::table('surats')
                ->where('id_surat', $id)
                ->get();
        if (session()->get('userSession')['authority'] == "admin")
        {
            $disposisi = array(
                'disposisi_status' => 'disposisi',
            );
        }
        elseif (session()->get('userSession')['authority'] == "admin")
        {
            $disposisi = array(
                'disposisi_status' => 'diterima',
            );
        }
        

        DB::table('disposisi_surats')
            ->where('id_disposisi', $id)
            ->update($disposisi);
        return redirect('user/get-disposisi-surat');
        
    }

    public function deleteDisposisi($id)
    {
        DB::table('disposisi_surats')
            ->where('id_disposisi', $id)
            ->delete();
        
        return redirect('/user/get-disposisi-surat');
    }
}
