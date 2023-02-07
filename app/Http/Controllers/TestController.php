<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateFormeRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function method1 ($nom){
        return "method 1 $nom";
    }

    public function exemple (){
        return "exemple 1";
    }

    public function acces ($nom){
        $numero = ["1", "2", "3"];
        return view('acces', [
            "nom" => $nom,
            "age" => 14,
            "nums" => $numero
        ]);
    }
    public function home () {
        $numero = ["1", "2", "3"];
        return view('home');
    }
    // public function ht () {
    //     echo 'tout pass';
    // }

    public function store (validateFormeRequest $request) {
// dd($request);
$verif = $request;
if($verif) {
    echo 'tout va bien';
} else{return redirect()->back();}




    }
}
