    <title>Laporan Barang</title>
    <head>
    <link href="{{ asset('admin/css/core.min.css')}}" rel="stylesheet">
    <style>
        table{
            border-collapse:collapse; 
            table-layout:fixed; 
            width:100%;
        }
        table td{
            border:solid 1px; 
            width:100px; 
            word-wrap:break-word;
        }
        .header{
            display:inline;
            vertical-align:text-top;
        }
        .judul{
            display:block;
            text-align:center;
        }
        p{
            display:inline;
        }
        .header-title{
            margin:0px;
            font-size:45px;
        }
        img{
            margin-top:10px;
            float:left;
            margin-left:20px;
            position:relative;
        }
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#212121;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
        }
        body{font-family:"Times New Roman",Times,Serif;}

        @media print{
            .float{display:none !important;}
        }


    </style>
    </head>
    <!-- Main container -->
    <main>
      <header class="header bg-ui-general">
        <div class="judul">
            <img src="{{asset('admin/img/logo.jpg')}}" width="140px" alt="logo">
            <p class="header-title">Laporan Transaksi</p>
            <div class="description">
            <p class="header-company">PT. INTI SOLUSINDO</p><br>
            <p class="header-description">JL Surabaya no 23</p> <br>
            <p class="header-description">Surabaya - Indonesia</p>
            </div>
        </div>
        
        <br>

        <hr>
        <br>
      </header><!--/.header -->

      <div class="main-content">
        <div class="row">

          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Toolbar
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <div class="col-md-12">
            <div>
              <div>
                <table border="1px" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Transaksi</th>
                      <th>Nama Barang</th>
                      <th>Jenis Transaksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($trans as $key => $b)
                    <tr >
                      <th>{{ ++$key }}</th>
                      <td>{{ $b->no_transaksi }}</td>
                      <td>{{ $b->barang->nama_barang}}</td>
                      <td>{{ $b->jenis_transaksi }}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                <!-- Code begins here -->

                <button href="#" class="float" onclick="window.print()">
                    <span class="fa fa-print my-float" ></span>
                </button>
              </div>
            </div>
          </div>
        </div>
    </div><!--/.main-content -->