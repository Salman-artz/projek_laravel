<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoribukumodel;
use Illuminate\Support\Facades\Validator;

class kategoribukucontroller extends Controller
{
    public function store(Request $req)
    {
        $validator  = Validator::make($req->all(),[
            'kategori_buku'=>'required'
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $save= kategoribukumodel::create([
            'kategori_buku'  =>$req->kategori_buku
        ]);
        if($save){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function update(Request $req, $id){

        $validator  = Validator::make($req->all(),[
            'kategori_buku'=>'required',
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $ubah = kategoribukumodel::where('id',$id)->update([
            'kategori_buku'  =>$req->kategori_buku
        ]);
        if($ubah){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    public function destroy($id){

        $delete=kategoribukumodel::where('id',$id)->delete();
        if($delete){
            return Response()->json(['status'=>1]);
        }else{
            return Response()->json(['status'=>0]);
        }
    }
    
}

