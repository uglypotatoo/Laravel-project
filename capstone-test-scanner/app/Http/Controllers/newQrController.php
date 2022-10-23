<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\Qrcode;
use Illuminate\Support\Facades\DB;
use App\models\users;

class newQrController extends Controller
{
    public function index()
    {







        // $users = DB::select('SELECT * FROM users');
       
        // return view('qrlist', ['users' => $users]);

        // foreach ($users as $user) {
        //     echo $user->name;
        // }
    }


    // function list(){
    //     $data = users::where('id')->get();

    //     return view('qrlist', ['data'=>$data]);
        
    // }


    function list(){

        $results = DB::table('users')
        ->get();

        foreach($results as $result) {
            echo QrCode::generate($result->firstname); 
            echo '<br>';
            echo '<br>';
        }

    }
}
