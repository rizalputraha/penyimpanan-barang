@extends('admin.app')

@section('content')
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Buat Data</strong> Transaksi
            <small>Dibawah ini adalah form untuk menambahkan data Transaksi.</small>
          </h1>
        </div>
      </header><!--/.header -->

        <div class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h4 class="card-title"><strong>Form Transaksi</strong></h4>
                        <div class="card-body">
                            <div class="col-md-5">
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> Ada yang Salah Dengan dengan Form pengisiian anda<br><br>
                                    <ul>
                                        @foreach($errors->all as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <form action="{{ route('transaksi.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="input-nm-barang">No Transaksi</label>
                                    <input id="input-nm-barang" class="form-control" name="no_transaksi" type="text" placeholder="No transaksi"/>
                                </div>
                                <div class="form-group">
                                    <label for="input-kat-barang">Nama Barang</label>
                                    <select name="id_barang" id="input-kat-barang" class="form-control">
                                        @foreach($barang as $b)
                                            <option value="{{$b->id}}">{{$b->nama_barang}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="input-jml-barang">Jenis Transaksi</label>
                                    <select name="jenis_transaksi" id="input-kat-barang" class="form-control">
                                        <option value="Barang Masuk">Barang Masuk</option>
                                        <option value="Barang Keluar">Barang Keluar</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" value="Tambah" type="submit">
                                </div>
                                </form>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div><!--/.main-content -->
@endsection