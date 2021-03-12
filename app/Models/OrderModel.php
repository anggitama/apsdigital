<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrderModel extends Model
{
    public function allData(){
        return DB::table('tbl_order')->leftJoin('tbl_produk', 'tbl_produk.id_produk', '=', 'tbl_order.id_barang')->get();
    }
    public function detailData($id){
        return DB::table('tbl_order')->leftJoin('tbl_produk', 'tbl_produk.id_produk', '=', 'tbl_order.id_barang')->where('id_order', $id)->first();
    }
    public function addData($data){
        return DB::table('tbl_order')->insert($data);
    }
    public function editData($id, $data){
        return DB::table('tbl_order')->where('id_order', $id)->update($data);
    }
    public function deleteData($id){
        return DB::table('tbl_order')->where('id_order', $id)->delete();
    }
}
