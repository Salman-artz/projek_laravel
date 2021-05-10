<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::get('/',function(){
    $cek_koneksi=DB::connection()->getPdo();
    if($cek_koneksi){
        echo "Koneksi tersambung";
    }else{
        echo "Koneksi Terputus";
    }
});*/

Route::get('/datadiri/{nama}/{usia}/{status}/{hbi}','Biodatacontroller@datadiri');
Route::post("inputdata",'Biodatacontroller@inputdata');
Route::put('/updatedata/{nama}/{usia}/{status}/{hbi}','Biodatacontroller@updatedata');
Route::delete('deletedata/{id}','Biodatacontroller@deletedata');

Route::post("/inisert_kelas","kelasController@store");

Route::post("/insert_tokoCustomer","Curtomercontroller@store");
Route::post("/insert_tokoBarang","Barangcontroller@store");
Route::put('/update_tokoCustomer/{id}','Curtomercontroller@update');
Route::put('/update_tokoBarang/{id}','Barangcontroller@update');
Route::delete("/delete_customer/{id}",'Curtomercontroller@destroy');
Route::delete("/delete_barang/{id}",'Barangcontroller@destroy');

Route::get('/getcustomer','Curtomercontroller@getcustomer');
Route::get('/getcustomerfirst','Curtomercontroller@getcustomerfirst');
Route::get('/getcustomerwhere','Curtomercontroller@getcustomerwhere');
Route::get('/joinbarang','Curtomercontroller@joinbarang');

//kategoribuku
Route::post("/insert_kategoribuku","kategoribukucontroller@store");
Route::put('/update_ketegoribuku/{id}','kategoribukucontroller@update');
Route::delete("/delete_kategoribuku/{id}",'kategoribukucontroller@destroy');
//buku
Route::post("/insert_buku","bukuconttroller@store");
Route::put('/update_buku/{id}','bukuconttroller@update');
Route::delete("/delete_buku/{id}",'bukuconttroller@destroy');
//kategoribuku
Route::post("/insert_peminjam","peminjamcontroller@store");
Route::put('/update_peminjam/{id}','peminjamcontroller@update');
Route::delete("/delete_peminjam/{id}",'peminjambukucontroller@destroy');
//kategoribuku
Route::post("/insert_transaksi","transaksicontroller@store");
Route::put('/update_transaksi/{id}','transaksicontroller@update');
Route::delete("/delete_transaksi/{id}",'transaksicontroller@destroy');
//kategoribuku
Route::post("/insert_detailtransaksi","detailtransaksicontroller@store");
Route::put('/update_detailtrasnsaksi/{id}','detailtransaksicontroller@update');
Route::delete("/delete_detailtransaksi/{id}",'detailtransaksicontroller@destroy');