<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = 'karyawans';
    protected $fillable = ['nama_karyawan', 'jk', 'alamat', 'email'];
    protected $visible = ['nama_karyawan', 'jk', 'alamat', 'email'];
    public $timestamps = true;

    public function transaksi()
    {
    	return $this->hasMany('App\transaksi','karyawan_id');
    } 
}