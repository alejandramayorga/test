<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use os,sys,glob;

class Api1_giftController extends Controller
{

    protected $phoneTypes = [
        'Cellular',
        'Home',
        'Work'
    ];

    public function Api_datos(Request $request)
    {
  
        $archivos = array();
        foreach (glob("../public/*.gif") as $filename) {
         
            $archivos [] =  basename($filename);
        }
        return json_encode($archivos);

    }

    public function getNumbers(Request $request) {
        $array = array("a" => array("2", "1"),
                       "b" => array("2", "2"),
                       "c" => array("2", "3"),
                       "d" => array("3", "1"),
                       "e" => array("3", "2"),
                       "f" => array("3", "3"),
                       "g" => array("4", "1"),
                       "h" => array("4", "2"),
                       "i" => array("4", "3"),
                       "j" => array("5", "1"),
                       "k" => array("5", "2"),
                       "l" => array("5", "3"),
                       "m" => array("6", "1"),
                       "n" => array("6", "2"),
                       "o" => array("6", "3"),
                       "p" => array("7", "1"),
                       "q" => array("7", "2"),
                       "r" => array("7", "3"),
                       "s" => array("7", "4"),
                       "t" => array("8", "1"),
                       "u" => array("8", "2"),
                       "v" => array("8", "3"),
                       "w" => array("9", "1"),
                       "x" => array("9", "2"),
                       "u" => array("9", "3"),
                       "z" => array("9", "4"));
    
        $caracteres = str_split(strtolower($request->texto));
        $palabra = "[";
        foreach ($caracteres as $letra) {
         
      
            $palabra = $palabra .  "[".$array[$letra][0] .",". $array[$letra][1]."]";
        }
        $palabra = $palabra ."]";

        return ( $palabra );

    }

    
}



