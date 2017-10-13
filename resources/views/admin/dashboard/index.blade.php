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

            <li class="menu-category">Barang</li>

            <li class="menu-item active">
              <a class="menu-link" href="../dashboard/general.html">
                <span class="icon fa fa-home"></span>
                <span class="title">Barang</span>
              </a>
            </li>
            
            <li class="menu-item">
              <a class="menu-link" href="../dashboard/general.html">
                <span class="icon fa fa-home"></span>
                <span class="title">Transaksi</span>
              </a>
            </li>
            
            <li class="menu-item">
              <a class="menu-link" href="../dashboard/general.html">
                <span class="icon fa fa-home"></span>
                <span class="title">Kategori</span>
              </a>
            </li>

            <li class="menu-item">  
              <a class="menu-link" href="../dashboard/general.html">
                <span class="icon fa fa-home"></span>
                <span class="title">Dashboard</span>
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

        <div class="lookup d-none d-md-block topbar-search" id="theadmin-search">
          <input class="form-control w-300px" type="text">
          <div class="lookup-placeholder">
            <i class="ti-search"></i>
            <span><strong>Try</strong> button, slider, modal, etc.</span>
          </div>
        </div>
      </div>

      <div class="topbar-right">
        

        

        <ul class="topbar-btns">
          <li class="dropdown">
            <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="../assets/img/avatar/1.jpg" alt="..."></span>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="../page/profile.html"><i class="ti-user"></i> Profile</a>
              <a class="dropdown-item" href="../page-app/mailbox.html">
                <div class="flexbox">
                  <i class="ti-email"></i>
                  <span class="flex-grow">Inbox</span>
                  <span class="badge badge-pill badge-info">5</span>
                </div>
              </a>
              <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../page-extra/user-lock-1.html"><i class="ti-lock"></i> Lock</a>
              <a class="dropdown-item" href="../page-extra/user-login-3.html"><i class="ti-power-off"></i> Logout</a>
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
                      <button class="btn" title="Add new" data-provide="tooltip"><i class="ion-plus-round"></i></button>
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
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
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