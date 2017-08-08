<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = ['tgl_transaksi', 'jumlah_barang', 'total', 'karyawan_id', 'Barang_id', 'pelanggan_id'];
}
