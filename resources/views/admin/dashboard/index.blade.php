@extends('admin.app')

@section('content')
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
            <strong>Table</strong> basic
            <small>Stylized tables to allow audience grabs the information in a glance.</small>
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
          <div class="col-md-12 ">
            <div class="card">
              <h4 class="card-title"><strong>Toolbar</strong></h4>

              <div class="card-body">

                <div class="flexbox mb-20">
                  <div class="lookup">
                    <input class="w-200px" type="text" name="s" placeholder="Search">
                  </div>

                  <div class="btn-toolbar">
                    <div class="btn-group btn-group-sm">
                      <button class="btn" title="Refresh" data-provide="tooltip"><i class="ion-refresh"></i></button>
                      <a class="btn" title="Add New" href="{{route('products.create')}}"><i class="ion-plus-round"></i></a>
                    </div>

                    <div class="btn-group btn-group-sm ml-2 d-none d-sm-flex">
                      <button class="btn dropdown-toggle" data-toggle="dropdown">Export</button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">CSV</a>
                        <a class="dropdown-item" href="#">SQL</a>
                        <a class="dropdown-item" href="#">PDF</a>
                        <a class="dropdown-item" href="#">Text</a>
                      </div>
                    </div>
                  </div>
                </div>


                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Stok Barang</th>
                      <th>Keterangan</th>
                      <th>Kategori</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>asd</td>
                      <td>12</td>
                      <td>sasdadsa</td>
                      <td>323</td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
    </div><!--/.main-content -->
@endsection