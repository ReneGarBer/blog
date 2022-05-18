<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicMath extends Controller
{
    public function suma($a,$b){
        $c = $a + $b;
        return view('basicMath.suma',['a'=>$a,'b'=>$b,'c'=>$c]);
    }
    public function resta($a,$b){
        $c = $a - $b;
        return view('basicMath.resta',['a'=>$a,'b'=>$b,'c'=>$c]);;
    }
    public function multiplicacion($a,$b){
        $c = $a * $b;
        return view('basicMath.multiplicacion',['a'=>$a,'b'=>$b,'c'=>$c]);;
    }
    public function division($a,$b){
        $c = $a / $b;
        return view('basicMath.division',['a'=>$a,'b'=>$b,'c'=>$c]);;
    }
}
