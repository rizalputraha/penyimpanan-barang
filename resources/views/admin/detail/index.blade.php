
@extends('admin.app')

@section('content')
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Tabel</strong> Barang
            <small>Berikut adalah Tabel Barang.</small>
          </h1>
        </div>
      </header><!--/.header -->

      <div class="main-content">
        <div class="row">

          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Toolbar
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <div class="col-md-12">
            <div class="card">
              <h4 class="card-title"><strong>Tabel Barang</strong></h4>
              <div class="card-body">
                <div class="flexbox-mb-20">
                  <div class="btn-toolbar" style="padding-bottom:20px;">
                    <div class="btn-group btn-group-sm">
                      <a class="btn btn-info" href="{{route('barang.create')}}"><i class="fa fa-plus"></i> Add New Data</a>
                    </div>
                  </div>
                </div>
                <table id="tabel-barang" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Kategori</th>
                      <th>Merk</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($sp_barang as $key => $b)
                    <tr>
                      <th>{{ ++$key }}</th>
                      <td>{{ $b->nama_barang }}</td>
                      <td>{{ $b->name }}</td>
                      <td>{{ $b->nama_merk}}</td>
                      <td>{{ $b->ket }}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div><!--/.main-content -->
@endsection