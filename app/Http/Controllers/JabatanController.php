<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Bagian;
use App\Jabatan;
use App\RootJabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    Public function GetJabatan()
    {
        $jabatan = DB::table('jabatans')
                ->get() ;
        return view('admin/jabatan',['jabatan'=>$jabatan]);
    }

    Public function showCreateJabatan()
    {
        $bagian = Bagian::all();
        $rootjab = RootJabatan::all();

        return view('admin/addjabatan', compact('bagian','rootjab'));
    }

    Public function CreateJabatan(Request $request)
    {
        $jabatan = new Jabatan;

        $jabatan->nama_jabatan = $request->jabatan;
        $jabatan->id_bagians = $request->bagian;
        $jabatan->level = $request->level;
        $jabatan->parent_jabatan = $request->parent_jabatan;
        $jabatan->id_rootJabs = $request->rootjabatan;
        $jabatan->keterangan = $request->keterangan;

        $jabatan->save();
        return redirect('admin/get-jabatan');
    }

    public function showEditJabatan($id)
    {
        $jabatan = DB::table('jabatans')
                    ->join('bagians', 'jabatans.id_bagians' ,'=', 'bagians.id_bagian')
                    ->join('rootjabatans', 'jabatans.id_rootJabs' ,'=', 'rootjabatans.id_rootJab')
                    ->select('jabatans.*', 'bagians.nama_bagian', 'rootjabatans.root_jab')
                    ->where('id_jabatan',$id)
                    ->get();       
        
        $bagian = Bagian::all();
        $rootjab = RootJabatan::all();

        return view('admin/editbagianrootjab', compact('jabatan', 'bagian', 'rootjab'));
    }

    public function updateJabatan(Request $request)
    {
       
        $jabatan = array(
            'nama_jabatan' => $request->jabatan,
            'id_bagians' => $request->bagian,
            'level' => $request->level,
            'parent_jabatan' => $request->parent_jabatan,
            'id_rootJabs' => $request->rootjabatan,
            'keterangan' => $request->keterangan,
        );
        
        

        // return dd($bagian);
        // return dd($request->id_bagian);
        DB::table('jabatans')
            ->where('id_jabatan', $request->id)
            ->update($jabatan);
        
        return redirect('admin/get-jabatan');
    }

    public function showJabatan($id)
    {
        $jabatan = DB::table('jabatans')
                    ->join('bagians', 'jabatans.id_bagians' ,'=', 'bagians.id_bagian')
                    ->join('rootjabatans', 'jabatans.id_rootJabs' ,'=', 'rootjabatans.id_rootJab')
                    ->select('jabatans.*', 'bagians.nama_bagian', 'rootjabatans.root_jab')
                    ->where('id_jabatan',$id)
                    ->get();       
        
        $bagian = Bagian::all();
        $rootjab = RootJabatan::all();

        return view('admin/detailbagianrootjab', compact('jabatan', 'bagian', 'rootjab'));
    }
    
    public function deleteJabatan($id)
    {
        DB::table('jabatans')
            ->where('id_jabatan', $id)
            ->delete();
        
        return redirect('admin/get-jabatan');
    }
}
