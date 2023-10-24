<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($num1, $operation, $num2)
    {
        switch ($operation) {
            case 'addition':
                $result = $num1 + $num2;
                break;
            case 'subtraction':
                $result = $num1 - $num2;
                break;
            case 'multiplication':
                $result = $num1 * $num2;
                break;
            case 'division':
                $result = $num1 / $num2;
                break;
            default:
                return abort(404); // Operation not found
        }

        return view('result', ['result' => $result]);
    }
}
