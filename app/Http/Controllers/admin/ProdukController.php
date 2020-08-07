<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Produk;
use App\Gambar;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index() {
        
        $datas = Produk::orderBy('id_produk', 'DESC')->paginate(10);
        return view('admin.produk.index', compact('datas'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_produk' => ['required', 'string'],
            'deskripsi_produk' => ['required', 'string'],
        ]);
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request) {
        $post = new Produk;
        $post->nama_produk = $request->get('nama_produk');
        $post->deskripsi_produk = $request->get('deskripsi_produk');
        $image = $request->file('gambar');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('admin/images'), $new_name);
        $post->gambar = $new_name;
        $post->save();
        return redirect('produk')->with('flash_message', 'rute added!');

    }
    
    public function edit($id) {

        $datas = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('datas'));
    }


public function update(Request $request, $id)
{
    $request->validate([
            'nama_produk' => ['required', 'string'],
            'deskripsi_produk' => ['required', 'string'],
    ]);

    $form_data = array(
        'nama_produk' =>$request->nama_produk,
        'deskripsi_produk' => $request->deskripsi_produk,
        
    );
    Produk::where('id_produk',$id)->update($form_data);

    return redirect()->to('produk')->with('flash_message', 'graph updated!');
}

    public function destroy($id)
    {
        Produk::destroy($id);
        return redirect()->to('produk')->with('flash_message', 'produk terhapus!');
    }
}