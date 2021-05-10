<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bukumodel;
use Illuminate\Support\Facades\Validator;

class bukucontroller extends Controller
{
    public function store(Request $req)
    {
        $validator  = Validator::make($req->all(),[
            'id_kategori'=>'required',
            'judul'=>'required',
            'penulis'=>'required',
            'penerbit'=>'required',
            'tahun_terbit'=>'required',
            
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $save= bukumodel::create([
            'kategori_buku'  =>$req->kategori_buku,
            'judul'  =>$req->judul,
            'penulis'  =>$req->penulis,
            'penerbit'  =>$req->penerbit,
            'tahun_terbit'  =>$req->tahun_terbit
        ]);
        if($save){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function update(Request $req, $id){

        $validator  = Validator::make($req->all(),[
            'id_kategori'=>'required',
            'judul'=>'required',
            'penulis'=>'required',
            'penerbit'=>'required',
            'tahun_terbit'=>'required',
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $ubah = bukumodel::where('id',$id)->update([
            'kategori_buku'  =>$req->kategori_buku,
            'judul'  =>$req->judul,
            'penulis'  =>$req->penulis,
            'penerbit'  =>$req->penerbit,
            'tahun_terbit'  =>$req->tahun_terbit
        ]);
        if($ubah){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function destroy($id){

        $delete=bukumodel::where('id',$id)->delete();
        if($delete){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    
}


