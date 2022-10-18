<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Bagian;
use App\Jabatan;
use App\RootJabatan;

class RootJabatanController extends Controller
{
    Public function GetRootJabatan()
    {
        $rootjab = DB::table('rootjabatans')
                ->get() ;
        return view('admin/rootjabatan',['rootjab'=>$rootjab]);
    }

    public function showRootJabatan($id)
    {
        $rootjab = DB::table('rootjabatans')
                    ->select('*')
                    ->where('id_rootJab',$id)
                    ->get();       
        
        return view('admin/detailbagianrootjab', compact('rootjab'));
    }

    Public function showCreateRootJabatan()
    {
     
        return view('admin/addjabatan');
    }

    Public function CreateRootJabatan(Request $request)
    {
        $rootjab = new RootJabatan;

        $rootjab->root_jab = $request->root_jabatan;

        $rootjab->save();
        return redirect('admin/get-rootjab');
    }

    public function showEditRootJabatan($id)
    {
        $rootjab = DB::table('rootjabatans')
                    ->select('*')
                    ->where('id_rootJab',$id)
                    ->get();       
        
        return view('admin/editbagianrootjab', compact('rootjab'));
    }

    public function updateRootJabatan(Request $request)
    {
       
        $rootjab = array(
            'root_jab' => $request->root_jabatan,
        );
        
        

        // return dd($bagian);
        // return dd($request->id_bagian);
        DB::table('rootjabatans')
            ->where('id_rootJab', $request->id)
            ->update($rootjab);
        
        return redirect('admin/get-rootjab');
    }
    
    public function deleteRootJabatan($id)
    {
        DB::table('rootjabatans')
            ->where('id_rootJab', $id)
            ->delete();
        
        return redirect('admin/get-rootjab');
    }
}
