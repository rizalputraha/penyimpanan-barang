<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $fillable = [
        'no_transaksi',
        'id_merk',
        'jumlah_barang',
        'jenis_transaksi',
    ];
    
    public function merk(){
        return $this->belongsTo('App\Merk','id_merk','id');
    }

    public function barang(){
        return $this->belongsTo('App\Barang','id_barang','id');
    }
}
