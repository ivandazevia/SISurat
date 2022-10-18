<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    Public function index()
    {
        if(session()->get('userSession')['authority'] == "admin")
        {
            $id_user = session()->get('userSession')['id_user'];
            $user = User::where('id_user',$id_user)->first();
            
            $bagian = DB::table('bagians')->where('id_bagian', $user->id_bagians)->value('nama_bagian');
            
            $jabatan = DB::table('jabatans')->where('id_jabatan', $user->id_jabatans)->value('nama_jabatan');

            $datas = array(
                'nama' => $user->name,
                'bagian' => $bagian,
                'jabatan' => $jabatan,
                'last_login' => $user->last_login
            );
            //  return dd($datas);
            return view('admin/home')->with('datas', $datas );
        }
        else
        {
            return redirect('sign-in');
        }
    }
}
