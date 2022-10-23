<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\Qrcode;
use Illuminate\Support\Facades\DB;

class qrController extends Controller
{
    public function index(){
        // QR code with text
        $data['qrcode'] = QrCode::generate('Welcome to Makitweb');

        // Store QR code for download
        QrCode::generate('Welcome to Makitweb', public_path('images/qrcode.svg') );

        return view('index',$data);

//         $sql = "SELECT * FROM tb_usersreg";
//         $result = mysqli_query(qrController,$sql);


//         foreach($result as $result) {
//         echo "<img src='qr.php?idNum={$result['idNum']}' />";
//                                      }

        

       
 

       
    }

}