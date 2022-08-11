<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Member;

class TampilanController extends Controller
{
    
    public function index(){
        // $member = DB::table('members')->get();
        // return view('index', [
        //     'members' => $member,
        //     'title' => 'Dashboard'
        // ]);

        $member = Member::all();
         return view('index', [
            'members' => $member,
            'title' => 'Dashboard'
        ]);
    }

    public function tambah()
    {
        return view('tambah', [
            'title' => 'Tambah'
        ]);
    }

    public function store(Request $request){
        DB::table('members')->insert([
            "nama" => $request->nama,
            "umur" => $request->umur,
            "alamat" => $request->alamat,
            "created_at" => $request->created_at,
            "updated_at" => $request->updated_at
        ]);

        return redirect('/')->with('AddData', 'Berhasil menambah data');
    }

    public function edit($id){
        $member = DB::table('members')->where('id', $id)->get();
        return view('edit', [
            'members' => $member,
            'title' => 'Edit'
        ]);
    }

    public function update(Request $request){
        DB::table('members')->where('id', $request->id)->update([
            "nama" => $request->nama,
            "umur" => $request->umur,
            "alamat" => $request->alamat,
            "updated_at" => $request->updated_at,
            "created_at" => $request->created_at
        ]);

        return redirect('/')->with('EditData', 'Berhasil mengedit data');
    }

    public function hapus($id){
        DB::table('members')->where('id', $id)->delete();
        return redirect('/')->with('DeleteData', 'Berhasil menghapus data');
    }
}
