<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $fillable = [
        'no_transaksi',
        'id_barang',
        'jenis_transaksi',
    ];
    
    public function barang(){
        return $this->hasOne('App\Barang','id','id_barang');
    }
}
