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
              <a href="#" class="d-block" data-widget="control-sidebar">User Person</a>
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
                        <a href="/logs" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>
                          <p>Logs</p>
                        </a>
                      </li>    
                  <li class="nav-item">
                    <a href="/qrcode" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>QR Code</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="/account" class="nav-link">
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



    <center>
    <div class="container-fluid">
        <div style="margin:10px;">
      Hello {{ Auth::user()->name }}
        
        </div>
        </div>
    </center>


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