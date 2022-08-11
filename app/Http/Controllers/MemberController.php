<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    // mengambil semua data
    public function all()
    {
        return Member::all();
    }

    // mengambil data by id
    public function show($id)
    {
        $find = Member::find($id);
        if(!$find){
            return "id salah atau tidak ditemukan";
        }
        
        return $find;
    }

    // menambah data
    public function store(Request $request)
    {
        $nama = $request->nama;
        $umur = $request->umur;
        $alamat = $request->alamat;
        $data = $nama && $umur && $alamat;
        $req = $request->all();

        if(!$req){
            return "Data kosong, silahkan diisi";
        }
        if(!$data){
            return "Mohon isi semua data";
        }

        return Member::create($req);

        // Mencoba untuk mengosongkan waktu update ketika sedang Create Data

        // DB::table('members')->insert([
        //     "nama" => $request->nama,
        //     "umur" => $request->umur,
        //     "alamat" => $request->alamat,
        //     'created_at' => now(),
        //     'updated_at' => null
        // ]);
        // return "Berhasil menambahkan data";
    }

    // mengubah data
    public function update($id, Request $request)
    {
        $find = Member::find($id);
        if(!$find){
            return "id salah atau tidak ditemukan";
        }

        $find->update($request->all());
        
        return $find;
    }

    // menghapus data
    public function delete($id)
    {
        $find = Member::find($id);
        if(!$find){
            return "id salah atau tidak ditemukan";
        }

        $nama = $find['nama'];
        $find->delete();
        return "Data dengan id $id yang bernama $nama berhasil dihapus";
    }
}
