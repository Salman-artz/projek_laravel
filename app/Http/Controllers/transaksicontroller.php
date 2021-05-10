<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksipinjammodel;
use Illuminate\Support\Facades\Validator;

class transaksicontroller extends Controller
{
    public function store(Request $req)
    {
        $validator  = Validator::make($req->all(),[
            'id_peminjam'=>'required',
            'tgl_pinjam'=>'required',
            
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $save= transaksipinjammodel::create([
            'id_peminjam'  =>$req->id_peminjam,
            'tgl_pinjam'  =>$req->tgl_pinjam,
            
        ]);
        if($save){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function update(Request $req, $id){

        $validator  = Validator::make($req->all(),[
            'id_peminjam'=>'required',
            'tgl_pinjam'=>'required',
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $ubah = transaksipinjammodel::where('id',$id)->update([
            'id_peminjam'  =>$req->id_peminjam,
            'tgl_pinjam'  =>$req->tgl_pinjam,
        
        ]);
        if($ubah){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function destroy($id){

        $delete=transaksipinjammodel::where('id',$id)->delete();
        if($delete){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    
}




