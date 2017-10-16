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
            <strong>Buat Data</strong> Barang
            <small>Dibawah ini adalah form untuk menambahkan data barang.</small>
          </h1>
        </div>
      </header><!--/.header -->

        <div class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h4 class="card-title"><strong>Form Barang</strong></h4>
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
                                    <label for="input-nm-barang">Nama Barang</label>
                                    <input id="input-nm-barang" class="form-control" name="nama_barang" type="text" placeholder="Nama Barang"/>
                                </div>
                                <div class="form-group">
                                    <label for="input-jml-barang">Jumlah Barang</label>
                                    <input id="input-jml-barang" class="form-control" name="stok" type="text" placeholder="Jumlah Barang"/>
                                </div>
                                <div class="form-group">
                                    <label for="input-ket-barang">Keterangan Barang</label>
                                    <textarea id="input-ket-barang" class="form-control" name="keterangan" placeholder="Keterangan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="input-nm-barang">Kategori Barang</label>
                                    <input class="form-control"  type="text" name="id_kategori" id="1">
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