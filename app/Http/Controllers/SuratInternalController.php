<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Faker\Provider\File;
use App\User;
use App\Surat;
use App\Exports\SuratInternalExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class SuratInternalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSuratInternal()
    {
        if( (session()->get('userSession')['authority'] == "admin") )
        {
            $surat = DB::table('surats')
                    ->join('users', 'surats.id_users', '=', 'users.id_user')
                    ->where('tipe_surat','internal')
                    ->get();
        }
        elseif (session()->get('userSession')['authority'] == "sekretaris")
        {
            $name = session()->get('userSession')['id_user'];
            $surat = DB::table('surats')
                    ->join('users', 'surats.id_users', '=', 'users.id_user')
                    ->where('tipe_surat','internal')
                    ->where('surats.id_users',$name)
                    ->get();
        }
        else
        {
            $name = session()->get('userSession')['name'];
            $surat = DB::table('surats')
                    ->join('users', 'surats.id_users', '=', 'users.id_user')
                    ->join('disposisi_surats', 'disposisi_surats.id_surats', '=', 'surats.id_surat')
                    ->where('disposisi_surats.disposisi_status','disposisi')
                    ->where('tipe_surat','internal')
                    ->where('surats.tujuan_surat_keluar',$name)
                    ->get();
        }
        return view('user/suratinternal', compact('surat'));
    }

    public function getSuratInternalSearch(Request $request)
    {
        $cari = $request->cari;
        $mulai = $request->mulai;
        $sampai = $request->sampai;
        if($mulai != null or $sampai != null)
        {
            if( (session()->get('userSession')['authority'] == "admin") )
            {
                $surat = DB::table('surats')
                        ->join('users', 'surats.id_users', '=', 'users.id_user')
                        ->where('tipe_surat','internal')
                        ->where('dari', 'LIKE', "%{$cari}%")
                        ->where('surats.tanggal_entry', '>=', $mulai)
                        ->where('surats.tanggal_entry', '<=', $sampai)
                        ->orWhere('surats.tujuan_surat_keluar', 'LIKE', "%{$cari}%")
                        ->get();
            }
            elseif (session()->get('userSession')['authority'] == "sekretaris")
            {
                $name = session()->get('userSession')['id_user'];
                $surat = DB::table('surats')
                        ->join('users', 'surats.id_users', '=', 'users.id_user')
                        ->where('tipe_surat','internal')
                        ->where('surats.id_users',$name)
                        ->where('surats.dari', 'LIKE', "%{$cari}%")
                        ->where('surats.tanggal_entry', '>=', $mulai)
                        ->where('surats.tanggal_entry', '<=', $sampai)
                        ->orWhere('surats.tujuan_surat_keluar', 'LIKE', "%{$cari}%")
                        ->get();
            }
            else
            {
                $name = session()->get('userSession')['name'];
                $surat = DB::table('surats')
                        ->join('users', 'surats.id_users', '=', 'users.id_user')
                        ->join('disposisi_surats', 'disposisi_surats.id_surats', '=', 'surats.id_surat')
                        ->where('disposisi_surats.disposisi_status','disposisi')
                        ->where('tipe_surat','internal')
                        ->where('surats.tujuan_surat_keluar',$name)
                        ->where('surats.dari', 'LIKE', "%{$cari}%")
                        ->where('surats.tanggal_entry', '>=', $mulai)
                        ->where('surats.tanggal_entry', '<=', $sampai)
                        ->orWhere('surats.tujuan_surat_keluar', 'LIKE', "%{$cari}%")
                        ->get();
            }
        }
        else
        {
            if( (session()->get('userSession')['authority'] == "admin") )
            {
                $surat = DB::table('surats')
                        ->join('users', 'surats.id_users', '=', 'users.id_user')
                        ->where('tipe_surat','internal')
                        ->where('surats.dari', 'LIKE', "%{$cari}%")
                        ->orWhere('surats.tujuan_surat_keluar', 'LIKE', "%{$cari}%")
                        ->get();
            }
            elseif (session()->get('userSession')['authority'] == "sekretaris")
            {
                $name = session()->get('userSession')['id_user'];
                $surat = DB::table('surats')
                        ->join('users', 'surats.id_users', '=', 'users.id_user')
                        ->where('tipe_surat','internal')
                        ->where('surats.id_users',$name)
                        ->where('surats.dari', 'LIKE', "%{$cari}%")
                        ->orWhere('surats.tujuan_surat_keluar', 'LIKE', "%{$cari}%")
                        ->get();
            }
            else
            {
                $name = session()->get('userSession')['name'];
                $surat = DB::table('surats')
                        ->join('users', 'surats.id_users', '=', 'users.id_user')
                        ->join('disposisi_surats', 'disposisi_surats.id_surats', '=', 'surats.id_surat')
                        ->where('disposisi_surats.disposisi_status','disposisi')
                        ->where('tipe_surat','internal')
                        ->where('surats.tujuan_surat_keluar',$name)
                        ->where('surats.dari', 'LIKE', "%{$cari}%")
                        ->orWhere('surats.tujuan_surat_keluar', 'LIKE', "%{$cari}%")
                        ->get();
            }
        }
            
        
        return view('user/suratinternal', compact('surat'));
    }

    public function showSuratInternal($id)
    {
        $surat = DB::table('surats')
                ->join('users','surats.id_users','=','users.id_user')
                ->select('surats.*','users.name')
                ->where('id_surat',$id)
                ->get();
        $user = User::all();
        return view('user/detailsuratinternal', compact('surat','user'));
    }

    public function showCreateSuratInternal()
    {
        $get_nosurat=DB::table('surats')
                    ->select('no_surat')
                    ->where('tipe_surat','internal')
                    ->orderBy('id_surat', 'desc')
                    ->first();
        if ($get_nosurat == null)
        {
            $firsts = '01';
        }
        else
        {
            $no_surat = $get_nosurat->no_surat;
            $arr = explode("/", $no_surat);
            $first = $arr[0]+1;    
            
            if($first < 10)
            {
                $firsts = '0' . $first;
            }
        }
        
        $tipe = 'A';
        $nama = 'SEMEN BATURAJA';
        $array_bln = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $bln = $array_bln[date('n')];
        
        $tahun = date('Y');
        $create_nosurat = "$firsts"."/".$tipe."/".$nama."/".$bln."/".$tahun;
        
        $id_user = session()->get('userSession')['id_user'];
        $user = User::where('id_user',$id_user)->first();
        
        return view('user/addsuratinternal', compact('create_nosurat', 'user'));
    }

    public function createSuratInternal(Request $request)
    {
        $surat = new Surat;

        $surat->no_surat = $request->nosurat;
        $surat->tanggal_surat = $request->tglsurat;
        $surat->jenis_surat = $request->jenissurat;
        $surat->tipe_surat = 'internal';
        $surat->asal_surat = $request->dari;
        $surat->dari = $request->dari;
        $surat->id_users = $request->id_entry;
        $surat->tujuan_surat_keluar = $request->untuk;
        $surat->perihal = $request->perihal;
        $surat->tembusan = $request->tembusan;
        $surat->no_berkas = $request->noberkas;
        $surat->status_surat = 'un_read';
        $surat->status_disposisi = 'un_disposisi';
        
        $file_surat = $request->file('filesurat');
        $surat->file_surat = $file_surat->getClientOriginalName();
        $surat->file_path = $file_surat->store('/storage/files');
        $nama_file = $file_surat->store('public/files');

        $surat->keterangan = $request->keterangan;
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y/m/d', time());
        $time = date('Y-m-d H:i:s', time());
        $surat->tanggal_entry = $date;
        $surat->waktu_entry = $time;

        
        $surat->save();
        return redirect('user/get-surat-internal');
    }

    public function csv()
    {
        date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d', time());
        $filename = "Laporan Surat Internal per".$time.".xlsx";
        return Excel::download(new SuratInternalExport(), $filename);
    }

    public function downloadSuratInternal($id)
    {
        $surat = DB::table('surats')->where('id_surat', $id)
            ->first();
        $file = public_path() . '/' . $surat->file_path;
        // dd($surat->file_path);
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, $surat->file_surat, $headers);
    }

    public function showEditSuratInternal($id)
    {
        $surat = DB::table('surats')
                    ->join('users', 'surats.id_users' ,'=', 'users.id_user')
                    ->select('surats.*', 'users.name', 'users.id_user')
                    ->where('surats.id_surat',$id)
                    ->get();       
        
        return view('user/editsuratinternal', compact('surat'));
    }

    public function editSuratInternal(Request $request)
    {
        $file_surat = $request->file('filesurat');
        $nama_file = $file_surat->store('public/files');

        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y/m/d', time());
        $time = date('Y-m-d H:i:s', time());

        $surat = array(
            'no_surat' => $request->nosurat,
            'tanggal_surat' => $request->tglsurat,
            'jenis_surat' => $request->jenissurat,
            'tipe_surat' => 'internal',
            'asal_surat' => $request->dari,
            'dari' => $request->dari,
            'id_users' => $request->id_entry,
            'tujuan_surat_keluar' => $request->untuk,
            'perihal' => $request->perihal,
            'tembusan' => $request->tembusan,
            'no_berkas' => $request->noberkas,
            'status_surat' => $request->statussurat,
            'status_disposisi' => $request->statusdisposisi,
            'file_surat' => $file_surat->getClientOriginalName(),
            'file_path' => $file_surat->store('/storage/files'),
            'keterangan' => $request->keterangan,
            'tanggal_entry' => $date,
            'waktu_entry' => $time,
        );
        DB::table('surats')
            ->where('id_surat', $request->id)
            ->update($surat);

        return redirect('user/get-surat-internal');
    }

    public function deleteSuratInternal($id)
    {
        DB::table('surats')
            ->where('id_surat', $id)
            ->delete();
        
        return redirect('user/get-surat-internal');
    }
}
