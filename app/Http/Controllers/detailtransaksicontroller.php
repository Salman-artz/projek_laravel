<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detailtransaksimodel;
use Illuminate\Support\Facades\Validator;

class detailtransaksicontroller extends Controller
{
    public function store(Request $req)
    {
        $validator  = Validator::make($req->all(),[
            'id_transaksi'=>'required',
            'id_buku'=>'required',
            
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $save= detailtransaksimodel::create([
            'id_transaksi'  =>$req->id_transaksi,
            'id_buku'  =>$req->id_buku,
            
        ]);
        if($save){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function update(Request $req, $id){

        $validator  = Validator::make($req->all(),[
            'id_transaksi'=>'required',
            'id_buku'=>'required',
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $ubah = detailtransaksimodel::where('id',$id)->update([
            'id_transaksi'  =>$req->id_transaksi,
            'id_buku'  =>$req->id_buku,
        
        ]);
        if($ubah){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function destroy($id){

        $delete=detailtransaksimodel::where('id',$id)->delete();
        if($delete){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    
}




