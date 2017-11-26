<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    
    protected $fillable = [
        'nama_barang',
        'id_kategori',
        'ket',
        'id_merk',
    ];

    public function category(){
        return $this->belongsTo('App\Category','id_kategori','id');
    }
    public function merk(){
        return $this->belongsTo('App\Merk','id_merk','id');
    }

    public function transaksi(){
        return $this->belongsTo('App\Transaction');
    }
}
