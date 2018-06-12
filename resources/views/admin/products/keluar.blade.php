@extends('admin.app')

@section('content')
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Tabel</strong> Transaksi
            <small>Berikut adalah Tabel Transaksi Masuk.</small>
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
              <h4 class="card-title"><strong>Tabel Transaksi Masuk</strong></h4>
              <div class="card-body">
                <div class="flexbox-mb-20">
                  <div class="btn-toolbar" style="padding-bottom:20px;">
                  </div>
                </div>
                <table id="bla" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Transaksi</th>
                      <th>Merk Barang</th>
                      <th>Jumlah Barang</th>
                      <th>Jenis Transaksi</th>
                      <th>Tanggal</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($trans as $key => $tr)
                    <tr>
                      <th>{{ ++$key }}</th>
                      <td>{{ $tr->no_transaksi }}</td>
                      <td>{{ $tr->nama_barang}}</td>
                      <td>{{ $tr->jenis_transaksi }}</td>
                      <td>{{ $tr->updated_at }}</td>
                      <td>
                        <a class="btn btn-success" href="{{ route('transaksi.edit',$tr->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                        <form style="display:inline;" action="{{ route('transaksi.destroy',$tr->id) }}" method="POST">
                          {{ csrf_field() }}
                          {{ method_field('DELETE')}}
                          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                      </td>
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