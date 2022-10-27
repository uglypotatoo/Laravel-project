@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        })
    </script>

    <div class="content-wrapper" style="min-height: ">
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
                                        <a href="/est_logs" class="nav-link">
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


        <section class="content">
            <div class="container-fluid">

                <div class="card">
                    <h3 class="card-title">Logs</h3>
                    <div class="container-fluid">
                        <form action="" id="filter-frm">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            
                                            <select name="establishment_id" id="establishment_id"
                                                class="custom-select custom-select-sm select2">
                                                <option value="all" selected="">All</option>
                                                <option value="4">Cloud Chase</option>
                                                <option value="1">Peter's Barbecue</option>
                                                <option value="5">SteakHouse</option>
                                                <option value="3">The Bar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                           
                                            <input type="date" id="date" value="2022-10-27"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>

                                    <div class="col-sm-2" style="text-align:center">
                                        
                                        <button class="btn btn-sm btn-primary mt-4"><i class="fa fa-filter"></i>
                                            Filter</button>
                                        <button class="btn btn-sm btn-success mt-4" onclick="_Print()"><i
                                                class="fa fa-print"></i> Print</button>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="table_search" class="form-control form-control-sm"
                                            placeholder="Search">
                                        </div>
                                    </div>


                                </div>

                                <div class=" col-sm-2">
    
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    </div>
                                </div>

                            </div>
                        </form>

                        
                           
                        
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Establishment</th>
                                    <th>Date</th>
                                    <th>Time in</th>
                                    <th>Time out</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cloud Chase</td>
                                    <td>11/26/22</td>
                                    <td>11:45 AM</td>
                                    <td>12:45 AM</td>
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Peter's Barbecue</td>
                                    <td>08/21/22</td>
                                    <td>10:43 AM</td>
                                    <td>10:50 AM</td>
                                    
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>SteakHouse</td>
                                    <td>10/13/22</td>
                                    <td>08:00 AM</td>
                                    <td>08:20 AM</td>
                                    
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>The Bar</td>
                                    <td>09/01/22</td>
                                    <td>06:32 PM</td>
                                    <td>07:00 AM</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </section>
    @endsection
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.js"></script>
        <script>
            $(document).ready(function() {
                var qrc = new QRCode(document.getElementById("qrcode"), "http://site.com/" + $("#user").text());
            });
        </script>
    @endpush
