<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qr Code</title>
</head>
<body>
    




    <h1>User QR Code</h1>

    <div class="container">
      <!-- generate function from simple-qr code package -->

      {{QrCode::size(200)->generate('I as');}}
      
      
    </div>

    

    {{-- <div>
      {{QrCode::format('png')->generate('this is');}}
    </div> --}}

</body>
</html>