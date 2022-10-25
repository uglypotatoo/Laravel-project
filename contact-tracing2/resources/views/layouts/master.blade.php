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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!--------------------------- MATERIAL ICONS --------------------------->
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Rounded"
      rel="stylesheet">
</head>

<body>

    <div class="container" style="height:100vh; max-width:100%">
        <aside class="">
            <div class="top " >
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

                <a href="/admin/establishment">
                <span class="material-symbols-rounded">store</span>
                <h3>Establishment</h3>
                </a>

                <a href="/admin/report">
                <span class="material-symbols-rounded">description</span>
                <h3>Report</h3>
                </a>

                <a href="/admin/users">
                <span class="material-symbols-rounded">person_filled</span>
                <h3>Users</h3>
                </a>

                <a href="/admin/profile">
                <span class="material-symbols-rounded">admin_panel_settings</span>
                <h3>Admin</h3>
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