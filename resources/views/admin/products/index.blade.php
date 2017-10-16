@extends('admin.app')

@section('content')
    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>


    <!-- Sidebar -->
    <aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
      <header class="sidebar-header">
        <a class="logo-icon" href="../index.html"><img src="{{asset('admin/img/logo-icon-light.png')}}" alt="logo icon"></a>
          <span class="logo">
            <a href="../index.html"><img src="{{asset('admin/img/logo-light.png')}}" alt="logo"></a>
          </span>
          <span class="sidebar-toggle-fold"></span>
      </header>

      <nav class="sidebar-navigation">
          <ul class="menu">

          <li class="menu-category">Navigation</li>

          <li class="menu-item">
              <a class="menu-link" href="{{ url('admin/dashboard')}}">
                <span class="icon fa fa-home"></span>
                <span class="title">Dashboard</span>
              </a>
            </li>

            <li class="menu-category">Barang</li>

            <li class="menu-item active">
              <a class="menu-link" href="{{ url('admin/products')}}">
                <span class="icon fa fa-cube"></span>
                <span class="title">Barang</span>
              </a>
            </li>
            
            <li class="menu-item">
              <a class="menu-link" href="#">
                <span class="icon fa fa-exchange"></span>
                <span class="title">Transaksi</span>
                <span class="arrow"></span>
              </a>
                <ul class="menu-submenu">
                  <li class="menu-item">
                    <a class="menu-link" href="#">
                      <span class="dot"></span>
                      <span class="title">Barang Masuk</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="#">
                      <span class="dot"></span>
                      <span class="title">Barang Keluar</span>
                    </a>
                  </li>
                </ul>
            </li>
            
            <li class="menu-item">
              <a class="menu-link" href="../dashboard/general.html">
                <span class="icon fa fa-tags"></span>
                <span class="title">Kategori</span>
              </a>
            </li>

            <li class="menu-item">  
              <a class="menu-link" href="../dashboard/general.html">
                <span class="icon fa fa-print"></span>
                <span class="title">Laporan</span>
              </a>
            </li>

            </ul>
      </nav>
    </aside>
    <!-- END Sidebar -->


    <!-- Topbar -->
    <header class="topbar">
      <div class="topbar-left">
        <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>
      </div>
      <div class="topbar-right">
        <ul class="topbar-btns">
          <li class="dropdown">
            <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="../assets/img/avatar/1.jpg" alt="..."></span>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="../page/profile.html"><i class="ti-user"></i> Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../page-extra/user-lock-1.html"><i class="ti-lock"></i> Lock</a>
              <form id="logout-form" action="{{ route('logout')}}" method="POST" style="width:100%;">
                <button class="dropdown-item" type="submit" style="width:100%;"><i class="ti-lock"></i>Logout</button>
                {{ csrf_field() }}
              </form>
            </div>
          </li>
          <div class="topbar-divider"></div>
        </ul>
      </div>
    </header>
    <!-- END Topbar -->


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
                      <a class="btn btn-info" href="{{route('products.create')}}"><i class="fa fa-plus"></i> Add New Data</a>
                    </div>
                  </div>
                </div>
                <table id="tabel-barang" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Stok Barang</th>
                      <th>Keterangan</th>
                      <th>Kategori</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($products as $key => $product)
                    <tr>
                      <th>{{ ++$key }}</th>
                      <td>{{ $product->nama_barang }}</td>
                      <td>{{ $product->stok }}</td>
                      <td>{{ $product->keterangan }}</td>
                      <td>{{ $product->id_kategori }}</td>
                      <td>
                        <a class="btn btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
                        <a class="btn btn-success" href="#"><i class="fa fa-pencil"></i> Edit</a>
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


      <!-- Footer -->
      <footer class="site-footer">
        <div class="row">
          <div class="col-md-6">
            <p class="text-center text-md-left">Copyright © 2017 <a href="http://thetheme.io/theadmin">TheAdmin</a>. All rights reserved.</p>
          </div>
        </div>
      </footer>
      <!-- END Footer -->

    </main>
    <!-- END Main container -->



    <!-- Global quickview -->
    <div id="qv-global" class="quickview" data-url="../assets/data/quickview-global.html">
      <div class="spinner-linear">
        <div class="line"></div>
      </div>
    </div>
    <!-- END Global quickview -->

@endsection