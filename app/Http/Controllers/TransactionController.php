<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Merk;
use App\Barang;
use Illuminate\Http\Request;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merk = Merk::all();
        $transaksi = Transaction::with('barang')->get();
        return view('admin.transaction.index',compact('transaksi','merk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merk = Merk::all();
        $barang = Barang::all();
        return view('admin.transaction.create',compact('merk','barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_transaksi' => 'required',
            'id_barang' => 'required',
            'jenis_transaksi' => 'required',
        ]);

        Transaction::create($request->all());
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merk = Merk::all();
        $barang = Barang::all();
        $trans = Transaction::find($id);
        return view('admin.transaction.edit',compact('trans','barang','merk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_transaksi' => 'required',
            'id_barang' => 'required',
            'jenis_transaksi' => 'required',
        ]); 
        Transaction::find($id)->update($request->all());
        return redirect()->route('transaksi.index')
                         ->with('success','Transaksi telah terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaction::find($id)->delete();
        return redirect()->route('transaksi.index')
                         ->with('success','Transaksi Telah Terhapus');
    }

}
