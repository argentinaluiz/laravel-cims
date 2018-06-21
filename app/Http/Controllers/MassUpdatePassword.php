<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MassUpdatePassword extends Controller
{
    public function index(){

        $users  = new Cliente();
        $users->timestamps = false;

        $getUsers  = $users->whereNotIn('id', [1])->get();
        foreach ($getUsers as $user) {
            $random     = Str::random(10);
            $password   = Hash::make( $random );
            $update     = $users->where('id', $user->id)->update(['password' => $password ] );
            echo $user->email . " - " .$random . "<br>";
            
        }
    }
}

