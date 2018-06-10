<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Transaction;
use App\Merk;

class DetailTransaksiController extends Controller
{
    
    public function masuk(){
        $merk = Merk::all();
        $trans = DB::table('transaction')
                    ->join('merk','transaction.id_merk','=','merk.id')
                    ->where('jenis_transaksi','Barang Masuk')
                    ->get();
        return view('admin.transaction.masuk',compact('trans','merk'));
    }


    public function keluar(){
        $merk = Merk::all();
        $trans = DB::table('transaction')
                    ->join('merk','transaction.id_merk','=','merk.id')
                    ->where('jenis_transaksi','Barang Keluar')
                    ->get();
        return view('admin.transaction.masuk',compact('trans','merk'));
    }
}
