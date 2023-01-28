<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class multiplyController extends Controller
{
    public function multiply()
    {
        return view('multiply');
    }

    public function showmultiply(Request $resuest)
    {
        $num1=$resuest->num1;
        $num2=$resuest->num2;

        for ($i=1; $i<=$num2; $i++) {
            $tabel=$num1*$i;
            echo "$num1 *$i =$tabel <br>";
        }
    }

}

