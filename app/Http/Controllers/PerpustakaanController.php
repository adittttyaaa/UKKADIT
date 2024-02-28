<?php

namespace App\Http\Controllers;

use App\Models\PerpustakaanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = PerpustakaanModel::orderBy('bukuid', 'asc')->paginate(10);
        return view('perpustakaan/index')->with('data',$data);
    }
    public function search(Request $request)
    {
        $data = $request->search;
        $data = PerpustakaanModel::where('judul', 'like', "%" . $data. "%")->paginate(5);
        return view('perpustakaan.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function cetak()
    {
        $data = PerpustakaanModel::orderBy('bukuid')->get();
        return view('perpustakaan/cetak')->with('data', $data);
    }
    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('perpustakaan/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Session::flash('bukuid', $request->bukuid);
        Session::flash('judul', $request->judul);
        Session::flash('penulis', $request->penulis);
        Session::flash('penerbit', $request->penerbit);
        Session::flash('tahunterbit', $request->tahunterbit);

        $request->validate([
            'bukuid'=>'required|numeric',
            'judul'=>'required',
            'penulis'=>'required',
            'penerbit'=>'required',
            'tahunterbit'=>'required|numeric',
            'foto'=>'required|mimes:jepg,jpg,png,gif'
        ],[
            'bukuid.required'=>'Buku id wajib di isi',
            'bukuId.numeric'=>'Buku Id wajib di isi dengan angka',
            'judul.required'=>'Judul wajib di isi',
            'penulis.required'=>'Penulis wajib di isi',
            'penerbit.required'=>'penerbit wajib di isi',
            'tahunterbit.required'=>'Tahun Terbit wajib di isi',
            'tahunterbit.numeric'=>'Tahun Terbit wajib di isi dengan angka',
            'foto.required'=>'Silahkan Masukan Foto',
            'foto.mimes'=>'Foto hanya boleh berektensi JEPG, JPG, PNG, dan GIF'
        ]);
        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $data = [ 
            'bukuid' => $request->input('bukuid'),
            'judul' => $request->input('judul'),
            'penulis' => $request->input('penulis'),
            'penerbit' => $request->input('penerbit'),
            'tahunterbit' => $request->input('tahunterbit')
        ];
        PerpustakaanModel::create($data);
        return redirect('perpustakaan')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = PerpustakaanModel::where('buku', $id)->first();
        return view('perpustakaan/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */ 
    public function edit(string $id)
    {
        //
        $data= PerpustakaanModel::where('bukuid', $id)->first();
        return view('perpustakaan/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'judul'=>'required',
            'penulis'=>'required',
            'penerbit'=>'required',
            'tahunterbit'=>'required|numeric'
        ],[
            'judul.required'=>'Judul wajib di isi',
            'penulis.required'=>'Penulis wajib di isi',
            'penerbit.required'=>'penerbit wajib di isi',
            'tahunterbit.required'=>'Tahun Terbit wajib di isi',
            'tahunterbit.numeric'=>'Tahun Terbit wajib di isi dengan angka'
        ]); 
        $data = [ 
            'judul' => $request->input('judul'),
            'penulis' => $request->input('penulis'),
            'penerbit' => $request->input('penerbit'),
            'tahunterbit' => $request->input('tahunterbit')
        ];
        PerpustakaanModel::where('bukuid', $id)->update($data);
        return redirect('/perpustakaan')->with('success', 'Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        PerpustakaanModel::where('bukuid', $id)->delete();
        return redirect('/perpustakaan')->with('success', 'Berhasil Hapus Data  ');
    }
}
