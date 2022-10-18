<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Bagian;

class BagianController extends Controller
{
    Public function GetBagian()
    {
        $bagian = DB::table('bagians')
                ->get() ;
        return view('admin/bagian',['bagian'=>$bagian]);
    }

    Public function showCreateBagian()
    {
        return view('admin/addjabatan');
    }

    Public function CreateBagian(Request $request)
    {
        $bagian = new Bagian;

        $bagian->kode_bagian = $request->kodebag;
        $bagian->nama_bagian = $request->namabag;
        $bagian->keterangan = $request->ketbag;

        $bagian->save();
        return redirect('admin/get-bagian');
    }

    public function showEditBagian($id)
    {
        $bagian = DB::table('bagians')
                    ->select('*')
                    ->where('id_bagian',$id)
                    ->get();       
        
        $data = array(
            'view' => "bagian"
        );
        return view('admin/editbagianrootjab', compact('bagian', 'data'));
    }

    public function updateBagian(Request $request)
    {
        $bagian = array(
            'kode_bagian' => $request->kodebag,
            'nama_bagian' => $request->namabag,
            'keterangan' => $request->ketbag,
        );

        

        // return dd($bagian);
        // return dd($request->id_bagian);
        DB::table('bagians')
            ->where('id_bagian', $request->id_bagian)
            ->update($bagian);
        
        return redirect('admin/get-bagian');
    }
    
    public function deleteBagian($id)
    {
        DB::table('bagians')
            ->where('id_bagian', $id)
            ->delete();
        
        return redirect('admin/get-bagian');
    }

    public function showBagian($id)
    {
        $bagian = DB::table('bagians')
                    ->select('*')
                    ->where('id_bagian',$id)
                    ->get();       
        
        $data = array(
            'view' => "bagian"
        );
        return view('admin/detailbagianrootjab', compact('bagian', 'data'));
    }
}
