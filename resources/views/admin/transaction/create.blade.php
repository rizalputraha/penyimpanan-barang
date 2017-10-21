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
                                    <strong>Whoops!</strong> Ada yang Salah Dengan dengan pengisiian anda<br><br>
                                    <ul>
                                        @foreach($errors->all as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <form action="{{ route('products.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="input-nm-barang">No Transaksi</label>
                                    <input id="input-nm-barang" class="form-control" name="nama_barang" type="text" placeholder="Nama Barang"/>
                                </div>
                                <div class="form-group">
                                    <label for="input-jml-barang">Jenis Transaksi</label>
                                    <select name="id_kategori" id="input-kat-barang" class="form-control">
                                        <option value="barang_masuk">Barang Masuk</option>
                                        <option value="barang_keluar">Barang Keluar</option>
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