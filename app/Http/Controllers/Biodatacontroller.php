<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biodatacontroller extends Controller
{
  public function datadiri($a,$b,$c,$d){
      return "hello ".$a."  ".$b."  ".$c." ".$d;
  }  
  public function inputdata(Request $req){
      return response()->json(['nama'=>"nama anda adalah ".$req->input('nama')]);
  }
  public function updatedata(Request $req,$id,$u,$s,$h){
      return response()->json(['nama'=>$req->input('nama'),'id'=>$id,'usia'=>$u,'status'=>$s,'hobi'=>$h]);
  }
  public function deletedata($id){
      return response()->json(['idnya '=>$id]);
  }
}
