<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class ProdukController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->ProdukModel = new ProdukModel;
    }

    public function index(){
        $data = [
            'produk' => $this->ProdukModel->allData(),
        ];
        return view('layout/produk/view_produk', $data);
    }
    
    public function detail($id){
        if(!$this->ProdukModel->detailData($id)){
            abort(404);
        }
        $data = [
            'produk' => $this->ProdukModel->detailData($id),
        ];
        return view('layout/produk/view_detail_produk', $data);
    }

    public function add(){
        return view('layout/produk/view_add_produk');
    }

    public function insert(){
        Request()->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'harga_produk' => 'required',
            'foto_produk' => 'required|mimes:jpg,jpeg,png'
        ],[
            'nama_produk.required' => 'Nama Produk Wajib di Isi',
            'deskripsi_produk.required' => 'Deskripsi Produk Wajib di Isi',
            'harga_produk.required' => 'Harga Produk Wajib di Isi',
            'foto_produk.required' => 'Foto Produk Wajib di Isi',
            'foto_produk.mimes' => 'Foto Produk Wajib ber-Format jpg / jpeg / png',
        ]);
        $file = Request()->foto_produk;
        $fileName = str_replace(" ","", Request()->nama_produk) . "." . $file->extension();
        $file->move(public_path('img'), $fileName);

        $data = [
            'nama_produk' => Request()->nama_produk,
            'deskripsi_produk' => Request()->deskripsi_produk,
            'harga_produk' => Request()->harga_produk,
            'foto_produk' => $fileName,
        ];

        $this->ProdukModel->addData($data);
        return redirect()->action([ProdukController::class, 'index']);
    }

    public function edit($id){
        if(!$this->ProdukModel->detailData($id)){
            abort(404);
        }
        $data = [
            'produk' => $this->ProdukModel->detailData($id),
        ];
        return view('layout/produk/view_edit_produk', $data);
    }

    public function update($id){
        Request()->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'harga_produk' => 'required',
            'foto_produk' => 'mimes:jpg,jpeg,png'
        ],[
            'nama_produk.required' => 'Nama Produk Wajib di Isi',
            'deskripsi_produk.required' => 'Deskripsi Produk Wajib di Isi',
            'harga_produk.required' => 'Harga Produk Wajib di Isi',
            'foto_produk.mimes' => 'Foto Produk Wajib ber-Format jpg / jpeg / png',
        ]);

        if(Request()->foto_produk <> ""){
            $file = Request()->foto_produk;
            $fileName = str_replace(" ","", Request()->nama_produk) . "." . $file->extension();
            $file->move(public_path('img'), $fileName);
            $data = [
                'nama_produk' => Request()->nama_produk,
                'deskripsi_produk' => Request()->deskripsi_produk,
                'harga_produk' => Request()->harga_produk,
                'foto_produk' => $fileName,
            ];
            $this->ProdukModel->editData($id, $data);
        } else {
            $data = [
                'nama_produk' => Request()->nama_produk,
                'deskripsi_produk' => Request()->deskripsi_produk,
                'harga_produk' => Request()->harga_produk
            ];
            $this->ProdukModel->editData($id, $data);
        }

        return redirect()->action([ProdukController::class, 'index']);
    }

    public function delete($id){
        $this->ProdukModel->deleteData($id);
        return redirect()->action([ProdukController::class, 'index']);
    }
    
}
