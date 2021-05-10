<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customermodel;
use Illuminate\Support\Facades\Validator;

class Curtomercontroller extends Controller
{
    public function store(Request $req)
    {
        $validator  = Validator::make($req->all(),[
            'id_barang'=>'required',
            'nama'=>'required',
            'jumlah'=>'required',
            'total'=>'required',
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $save = Customermodel::create([
            'id_barang'     =>$req->id_barang,
            'nama'          =>$req->nama,
            'jumlah'        =>$req->jumlah,
            'total'         =>$req->total,
        ]);
        if($save){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function update(Request $req, $id){

        $validator  = Validator::make($req->all(),[
            'id_barang'=>'required',
            'nama'=>'required',
            'jumlah'=>'required',
            'total'=>'required',
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $ubah = Customermodel::where('id',$id)->update([
            'id_barang'     =>$req->id_barang,
            'nama'          =>$req->nama,
            'jumlah'        =>$req->jumlah,
            'total'         =>$req->total,
        ]);
        if($ubah){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function destroy($id){

        $delete=Customermodel::where('id',$id)->delete();
        if($delete){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function getcustomer(){
        $getcustomer=Customermodel::get();
        return Response()->json(['data'=>$getcustomer]);
    }
    public function getcustomerfirst(){
        $getcustomer=Customermodel::first();
        return Response()->json(['data'=>$getcustomer]);
    }
    public function getcustomerwhere(){
        $getcustomer=Customermodel::where('id','2')->get();
        return Response()->json(['data'=>$getcustomer]);
    }
    public function joinbarang(){
        $getcustomer=Customermodel::join('barang','barang.id_barang','customer.id_barang')->get();
        return Response()->json(['data'=>$getcustomer]);
    }

 }


