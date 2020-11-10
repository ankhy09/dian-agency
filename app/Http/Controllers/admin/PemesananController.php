<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Pemesanan;
use App\Transaksi;
use App\Http\Controllers\Controller;

class PemesananController extends Controller
{
    public function index() {
        
        $datas = Pemesanan::orderBy('id_pemesanan', 'DESC')->paginate(10);
        return view('admin.pesanan.index', compact('datas'));
    }


// public function update(Request $request, $id)
// {
//     $validatedData = $request->validate([
//         'nama_produk' => ['required', 'string'],
//         'deskripsi_produk' => ['required', 'string'],
//     ]);

//     $form_data = array(
//         'nama_produk' =>$request->nama_produk,
//         'deskripsi_produk' => $request->deskripsi_produk,
        
//     );
//     Produk::where('id_produk',$id)->update($form_data);

//     return redirect()->to('produk')->with('flash_message', 'graph updated!');
// }

    public function destroy($id)
    {
        Produk::destroy($id);
        return redirect()->to('pemesanan')->with('flash_message', 'pesanan terhapus!');
    }

}