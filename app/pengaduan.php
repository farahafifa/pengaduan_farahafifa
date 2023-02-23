<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class pengaduan extends Model
{
    public $timestamps = false;
    protected $table = "tb_pengaduan";
    protected $fillable = ['tgl_pengaduan','nik','isi_laporan','foto','status'];
    
}
