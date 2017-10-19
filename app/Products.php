<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'barang';
    protected $fillable = [
        'nama_barang',
        'stok',
        'keterangan',
        'id_kategori'
    ];

    public function category(){
        return $this->belongsTo('Category');
    }
}
    

