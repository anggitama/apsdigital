<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProdukModel extends Model
{
    public function allData(){
        return DB::table('tbl_produk')->get();
    }
    public function detailData($id){
        return DB::table('tbl_produk')->where('id_produk', $id)->first();
    }
    public function addData($data){
        return DB::table('tbl_produk')->insert($data);
    }
    public function editData($id, $data){
        return DB::table('tbl_produk')->where('id_produk', $id)->update($data);
    }
    public function deleteData($id){
        return DB::table('tbl_produk')->where('id_produk', $id)->delete();
    }
}
