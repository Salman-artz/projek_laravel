<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peminjammodel;
use Illuminate\Support\Facades\Validator;

class peminjamcontroller extends Controller
{
    public function store(Request $req)
    {
        $validator  = Validator::make($req->all(),[
            'nama_peminjam'=>'required',
            'alamat'=>'required',
            'tgl_lahir'=>'required',
            'telp'=>'required',
            'jk'=>'required',
            
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $save= peminjammodel::create([
            'nama_peminjam'  =>$req->nama_peminjam,
            'alamat'  =>$req->alamat,
            'tgl_lahir'  =>$req->tgl_lahir,
            'telp'  =>$req->telp,
            'jk'  =>$req->jk
        ]);
        if($save){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function update(Request $req, $id){

        $validator  = Validator::make($req->all(),[
            'nama_peminjam'=>'required',
            'alamat'=>'required',
            'tgl_lahir'=>'required',
            'telp'=>'required',
            'jk'=>'required',
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $ubah = peminjammodel::where('id',$id)->update([
            'nama_peminjam'  =>$req->nama_peminjam,
            'alamat'  =>$req->alamat,
            'tgl_lahir'  =>$req->tgl_lahir,
            'telp'  =>$req->telp,
            'jk'  =>$req->jk
        ]);
        if($ubah){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function destroy($id){

        $delete=peminjammodel::where('id',$id)->delete();
        if($delete){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    
}



