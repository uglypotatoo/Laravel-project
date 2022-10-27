@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
        jQuery(document).ready(function($){
            $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            });
        })
        </script>

     <!-- Main Sidebar Container -->
     <aside class="main-sidebar sidebar-dark-primary elevation-4" id="wrapper">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8"> --}}
          <span class="brand-text font-weight-light">KONEK</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar-wrapper">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              
            </div>
            <div class="info">
              <a href="#" class="d-block">Establishment</a>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open">
    
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/dashb" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>
                          <p>Dashboard</p>
                        </a>
                      </li>    
                  <li class="nav-item">
                    <a href="est_logs" class="nav-link">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Logs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/scan" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Scan QR Code</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="/accountse" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Account</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
      <section class="content">
        <div class="container-fluid">

            <div class="card">
                 
                <div class="container" style="background-color: darkgray; text-align:center; max-width:250px">

                <div id="reader" width="400px"></div>

               <input type="hidden" name="result" id="result">

              </div>
                
            </div>

        </div>
    </section>


      <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>


function onScanSuccess(decodedText, decodedResult) {
  // handle the scanned code as you like, for example:
  // console.log(`Code matched = ${decodedText}`, decodedResult);

  
}


function onScanFailure(error) {
  // handle scan failure, usually better to ignore and keep scanning.
  // for example:
  console.warn(`Code scan error = ${error}`);
}

let html5QrcodeScanner = new Html5QrcodeScanner(
  "reader",
  { fps: 60, qrbox: {width: 250, height: 250} },
  /* verbose= */ false);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);

</script>



    


@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.js"></script>
<script>
    $(document).ready(function(){
        var qrc = new QRCode(document.getElementById("qrcode"), "http://site.com/"+ $("#user").text());
    });
    </script>
@endpush