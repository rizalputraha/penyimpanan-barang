@extends('admin.app')

@section('content')
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Dashboard</strong>
            <small>Selamat Datang Di Page Dashboard </small>
          </h1>
        </div>
      </header><!--/.header -->

        <div class="main-content">
            <div class="row">
                <div class="col-6 col-lg-6">
                  <div class="card card-body bg-danger">
                        <div class="flexbox">
                          <span class="ti-bag fs-40"></span>
                          <span class="fs-40">{{ $jml_barang }}</span>
                        </div>
                        <div class="text-right">Produk</div>
                  </div>
                </div>
                </div>
            </div>
        </div><!--/.main-content -->
@endsection