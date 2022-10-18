<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Bagian;
use App\Jabatan;
use App\RootJabatan;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')
                ->join('jabatans', 'id_jabatans', '=', 'jabatans.id_jabatan')
                ->select('users.*','jabatans.nama_jabatan')
                ->get() ;
        return view('admin/user',['user'=>$user]);
    }

    public function showUser($id)
    {
        $user = DB::table('users')
                    ->join('jabatans', 'users.id_jabatans','=','jabatans.id_jabatan')
                    ->join('bagians', 'users.id_bagians','=','bagians.id_bagian')
                    ->join('rootjabatans', 'users.id_rootJabs','=','rootjabatans.id_rootJab')
                    ->select('users.*','jabatans.nama_jabatan', 'bagians.nama_bagian', 'rootjabatans.root_jab')
                    ->where('users.id_user',$id)
                    ->get();
        $jabatan = Jabatan::all();
        $bagian = Bagian::all();
        $rootjabatan = RootJabatan::all();
        
        return view('admin/detailuser', compact('user','jabatan', 'bagian', 'rootjabatan'));
    }

    Public function showCreateUser()
    {
        $jabatan = Jabatan::all();
        $bagian = Bagian::all();
        $rootjabatan = RootJabatan::all();
        
        return view('admin/adduser', compact('jabatan', 'bagian', 'rootjabatan'));
    }

    Public function createUser(Request $request)
    {
        $user = new User;

        $user->username = $request->username;
        $user->nik = $request->nik;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->tanggal_lahir = $request->tgllahir;
        $user->handphone = $request->hp;
        $user->alamat = $request->alamat;
        $user->id_jabatans = $request->jabatan;
        $user->id_bagians = $request->bagian;
        $user->id_rootJabs = $request->rootjabatan;
        $user->authority = $request->authority;

        $user->save();

        return redirect('admin/get-user');
    }

    public function showEditUser($id)
    {
        $user = DB::table('users')
                    ->join('jabatans', 'users.id_jabatans','=','jabatans.id_jabatan')
                    ->join('bagians', 'users.id_bagians','=','bagians.id_bagian')
                    ->join('rootjabatans', 'users.id_rootJabs','=','rootjabatans.id_rootJab')
                    ->select('users.*','jabatans.nama_jabatan', 'bagians.nama_bagian', 'rootjabatans.root_jab')
                    ->where('users.id_user',$id)
                    ->get();
        $jabatan = Jabatan::all();
        $bagian = Bagian::all();
        $rootjabatan = RootJabatan::all();
        
        return view('admin/edituser', compact('user','jabatan', 'bagian', 'rootjabatan'));
    }

    public function updateUser(Request $request)
    {
        $user = array(
            'username' => $request->username,
            'nik' => $request->nik,
            'name' => $request->nama,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tgllahir,
            'handphone' => $request->hp,
            'alamat' => $request->alamat,
            'id_jabatans' => $request->jabatan,
            'id_bagians' => $request->bagian,
            'id_rootJabs' => $request->rootjabatan,
            'authority' => $request->authority
        );

        DB::table('users')
            ->where('id_user', $request->id)
            ->update($user);
        
        return redirect('admin/get-user');
    }
    
    public function showProfile($id)
    {
        $user = DB::table('users')
                    ->join('jabatans', 'users.id_jabatans','=','jabatans.id_jabatan')
                    ->join('bagians', 'users.id_bagians','=','bagians.id_bagian')
                    ->join('rootjabatans', 'users.id_rootJabs','=','rootjabatans.id_rootJab')
                    ->select('users.*','jabatans.nama_jabatan', 'bagians.nama_bagian', 'rootjabatans.root_jab')
                    ->where('users.id_user',$id)
                    ->get();
        return view('profil', compact('user'));
    }

    public function editProfile()
    {
        return view('profile');
    }


    public function deleteUser($id)
    {
        DB::table('users')
            ->where('id_user', $id)
            ->delete();
        
        return redirect('admin/get-user'); 
    }
}
