<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Tracing</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Rounded"
      rel="stylesheet">

    <link rel="stylesheet" href="\css\app.css">

    
</head>
<body>
    
    <!-- Navbar -->
  
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  
            <div class="container-lg">
                <a class="navbar-brand" href="#" style="font-size: 25px">KONEK</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav dropdown-menu-end">
              <li class="nav-item">
                <a href="#home" class="nav-link px-5" href="Home">HOME</a>
              </li>
              <li class="nav-item">
                <a href="#about" class="nav-link px-5" href="about">ABOUT</a>
              </li>
              <li class="nav-item">
                <a href="#usermanual" class="nav-link px-5" href="UserManual">USER MANUAL</a>
              </li>
              <li class="nav-item">
                <a href="#privacy" class="nav-link px-5" href="Privacy">PRIVACY</a>
              </li>
            </ul>
                </div>
            </div>
        </nav>
      <br>

        <main>
            @yield('page-content')
            @yield('page-about')
            @yield('page-user-manual')
            @yield('page-privacy')
            
            
        </main>
       <br>
       
            
       <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">© 2022 KONEK, Inc</p>
      </footer>

        


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="{{asset('public/js/app.js')}}"></script>
    </body>
    </html>