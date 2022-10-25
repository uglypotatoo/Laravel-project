<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>

    <!--------------------------- CSS --------------------------->
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!--------------------------- MATERIAL ICONS --------------------------->
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Rounded"
      rel="stylesheet">
</head>

<body>

    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="{{asset('/assets/img/konek.png')}}">
                    <h2>KONEK</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-rounded">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="/admin/dashboard" class="active">
                <span class="material-symbols-rounded">dashboard</span>
                <h3>Dashboard</h3>
                </a>

                <a href="/admin/report">
                <span class="material-symbols-rounded">description</span>
                <h3>Report</h3>
                </a>

                <a href="/admin/establishment">
                <span class="material-symbols-rounded">qr_code_scanner</span>
                <h3>QR Code</h3>
                </a>
    
                <a href="/admin/report">
                <span class="material-symbols-rounded">account_circle</span>
                <h3>Profile</h3>
                </a>

                <a href="#">
                <span class="material-symbols-rounded">logout</span>
                <h3>Log Out</h3>
                </a>
            </div>
        </aside>
    
        <div class="content">

            @yield('content')
        
        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script src="../assets/plugins/chartjs.js"></script>

    @yield('scripts')
</body>
</html>