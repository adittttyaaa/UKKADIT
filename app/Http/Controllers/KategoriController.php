<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function index()
    {
        $data = KategoriModel::orderBy('kategoriID', 'asc')->paginate(1);
        return view('kategori/index')->with('data',$data);
    }
}
