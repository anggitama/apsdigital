<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;
use App\Models\OrderModel;

class OrderController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->OrderModel = new OrderModel;
        $this->ProdukModel = new ProdukModel;
    }

    public function index(){
        $data = [
            'order' => $this->OrderModel->allData(),
        ];
        return view('layout/order/view_order', $data);
    }
    
    public function detail($id){
        if(!$this->OrderModel->detailData($id)){
            abort(404);
        }
        $data = [
            'order' => $this->OrderModel->detailData($id),
        ];
        return view('layout/order/view_detail_order', $data);
    }

    public function add(){
        $data = [
            'produk' => $this->ProdukModel->allData(),
        ];
        return view('layout/order/view_add_order', $data);
    }

    public function insert(){
        Request()->validate([
            'id_barang' => 'required',
            'nama_pembeli' => 'required',
            'email_pembeli' => 'required',
            'hp_pembeli' => 'required',
            'alamat_pembeli' => 'required',
        ],[
            'id_barang.required' => 'Barang yang di Pesan Wajib di Isi',
            'nama_pembeli.required' => 'Nama Pembeli Wajib di Isi',
            'email_pembeli.required' => 'Email Pembeli Wajib di Isi',
            'hp_pembeli.required' => 'No. HP Pembeli Wajib di Isi',
            'alamat_pembeli.required' => 'Alamat Pembeli Wajib di Isi',
        ]);

        $data = [
            'id_barang' => Request()->id_barang,
            'nama_pembeli' => Request()->nama_pembeli,
            'email_pembeli' => Request()->email_pembeli,
            'hp_pembeli' => Request()->hp_pembeli,
            'alamat_pembeli' => Request()->alamat_pembeli,
        ];

        $this->OrderModel->addData($data);
        return redirect()->action([OrderController::class, 'index']);
    }

    public function edit($id){
        if(!$this->OrderModel->detailData($id)){
            abort(404);
        }
        $data = [
            'produk' => $this->ProdukModel->allData(),
            'order' => $this->OrderModel->detailData($id),
        ];
        return view('layout/order/view_edit_order', $data);
    }

    public function update($id){
        Request()->validate([
            'id_barang' => 'required',
            'nama_pembeli' => 'required',
            'email_pembeli' => 'required',
            'hp_pembeli' => 'required',
            'alamat_pembeli' => 'required',
        ],[
            'id_barang.required' => 'Barang yang di Pesan Wajib di Isi',
            'nama_pembeli.required' => 'Nama Pembeli Wajib di Isi',
            'email_pembeli.required' => 'Email Pembeli Wajib di Isi',
            'hp_pembeli.required' => 'No. HP Pembeli Wajib di Isi',
            'alamat_pembeli.required' => 'Alamat Pembeli Wajib di Isi',
        ]);

        $data = [
            'id_barang' => Request()->id_barang,
            'nama_pembeli' => Request()->nama_pembeli,
            'email_pembeli' => Request()->email_pembeli,
            'hp_pembeli' => Request()->hp_pembeli,
            'alamat_pembeli' => Request()->alamat_pembeli,
        ];
        $this->OrderModel->editData($id, $data);
 
        return redirect()->action([OrderController::class, 'index']);
    }

    public function delete($id){
        $this->OrderModel->deleteData($id);
        return redirect()->action([OrderController::class, 'index']);
    }

    public function exportData(){
        $data = [
            'order' => $this->OrderModel->allData(),
        ];
        return view('layout/order/view_print_order', $data);
    }
    
}
