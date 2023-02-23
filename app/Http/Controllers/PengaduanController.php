<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
    	$pengaduan = Pengaduan::all();
    	return view('pengaduan.index', compact('pengaduan'));
    }
 
    public function create()
    {
    	return view('pengaduan.create');
    }
 
    public function store(Request $request)
    {
    	$this->validate($request,[
			'tgl_pengaduan' => 'required',
			'nik' => 'required',
    		'isi_laporan' => 'required',
    		'foto' => 'required',
			'status' => 'required',
    	]);
 
        Pengaduan::create([
    		'tgl_pengaduan' => $request->tgl_pengaduan,
			'nik' => $request->nik,
			'isi_laporan' => $request->tgl_pengaduan,
			'foto' => $request->foto,
			'status' => $request->status,
    	]);
 
    	return redirect('/pengaduan');
    }
 
}

