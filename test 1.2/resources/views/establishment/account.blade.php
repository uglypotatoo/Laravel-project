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
        <style>
            body {
        overflow-x: hidden;
        }
        #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        -webkit-transition: margin .25s ease-out;
        -moz-transition: margin .25s ease-out;
        -o-transition: margin .25s ease-out;
        transition: margin .25s ease-out;
        }
        #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
        }
        #sidebar-wrapper .list-group {
        width: 15rem;
        }
        #page-content-wrapper {
        min-width: 100vw;
        }
        #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
        }
        @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }
        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }
        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
        }
        </style>

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
                    <a href="/est_logs" class="nav-link">
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



    <center>
    <div class="container-fluid">
        
        <form action="/action_page.php">
            <label for="name">First name:</label>
            <input type="text" id="fname" name="fname" value="{{ Auth::user()->name }}"disabled><br><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname" value="{{ Auth::user()->lastname }}"disabled><br><br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="{{ Auth::user()->username }}"disabled><br><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="{{ Auth::user()->address }}"disabled><br><br>
            <label for="number">Phone Number:</label>
            <input type="text" id="number" name="number" value="{{ Auth::user()->phoneNumber }}"disabled><br><br>
            
            <div>
                <h5>Password</h5>

                <label for="npassword">New Password:</label>
            <input type="text" id="npassword" name="npassword" ><br><br>
            <label for="cpassword">Confirm Password:</label>
            <input type="text" id="cpassword" name="cpassword" ><br><br>




            </div>
            
            <input type="submit" value="Save" disabled>
          </form>
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