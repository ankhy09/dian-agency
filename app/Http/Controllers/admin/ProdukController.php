<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Produk;
use App\Ukuran;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index() {
        
        $datas = Produk::orderBy('id_produk', 'DESC')->paginate(10);
        return view('admin.produk.index', compact('datas'));
    }

    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_produk' => ['required', 'string'],
            'deskripsi_produk' => ['required', 'string'],
            'gambar' => ['required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'],
        ]);
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'gambar'         =>  'required|image|max:2048'
        ]);

        $post = new Produk;
        $post->nama_produk = $request->get('nama_produk');
        $post->deskripsi_produk = $request->get('deskripsi_produk');
        $image = $request->file('gambar');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/produk'), $new_name);
        $post->gambar = $new_name;
        $post->save();

        return redirect('produk')->with('flash_message', 'Produk Berhasil Ditambahkan!');
    }
    
    public function edit($id) {

        $datas = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('datas'));
    }



    public function update(Request $request, $id)
    {

        $image_name = $request->hidden_image;
        $image = $request->file('gambar');
        if($image != '')
        {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/produk'), $image_name);
        }
        else
        {
            $request->validate([
                'nama_produk' => ['required', 'string'],
                'deskripsi_produk' => ['required', 'string'],
            ]);
        }
        
        
        $form_data = array(
            'nama_produk'       =>   $request->nama_produk,
            'deskripsi_produk'     =>   $request->deskripsi_produk,
            'gambar'       =>   $image_name,
            
        );
        produk::where('id_produk',$id)->update($form_data);

        return redirect()->to('/produk')->with('flash_message', 'Produk Berhasil updated!');
    }

    public function destroy($id)
    {
        Produk::destroy($id);
        return redirect()->to('produk')->with('flash_message', 'produk terhapus!');
    }

}
