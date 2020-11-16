<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{


//Aufgabe1
/*  public public function test()
  {
    echo "this is a test";
  }*/


//Aufgabe2
/*
public function parameter($para) {
return $para;
}*/


//Aufgabe4
public function arrayAusgeben(){
  $array = array(1, 2, 3, 4, 5);
  return view('test', ['array' => $array]);



}
}
