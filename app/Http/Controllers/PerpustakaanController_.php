<?php

namespace App\Http\Controllers;

use App\Models\PerpustakaanModel;
use Database\Seeders\PerpustakaanSeeders;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    //
    function index()
    {
        $data = PerpustakaanModel::orderBy('bukuid', 'asc')->paginate(1);
        return view('perpustakaan/index')->with('data',$data);
    }
}
