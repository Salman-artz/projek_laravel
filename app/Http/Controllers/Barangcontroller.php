<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barangmodel;
use Illuminate\Support\Facades\Validator;

class Barangcontroller extends Controller
{
    public function store(Request $req)
    {
        $validator  = Validator::make($req->all(),[
            'nama_barang'=>'required',
            'harga_barang'=>'required',
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $save= Barangmodel::create([
            'nama_barang'  =>$req->nama_barang,
            'harga_barang' =>$req->harga_barang,
        ]);
        if($save){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function update(Request $req, $id){

        $validator  = Validator::make($req->all(),[
            'nama_barang'=>'required',
            'harga_barang'=>'required',
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $ubah = Barangmodel::where('id_barang',$id)->update([
            'nama_barang'  =>$req->nama_barang,
            'harga_barang' =>$req->harga_barang,
        ]);
        if($ubah){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function destroy($id){

        $delete=Barangmodel::where('id_barang',$id)->delete();
        if($delete){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    
}
