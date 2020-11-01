<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ukuran;
use App\Produk;


class UkuranController extends Controller
{

    public function index()
    {
        return redirect('produk')->with('flash_message', 'eror');
    }

    public function show($id){
        $datas = Ukuran::where('id_produk', '=', $id)->take(10)->get();
        $ids = $id;
        return view('admin.ukuran.index', compact('datas','ids'));
    }

    public function create($id)
    {
        $ids = $id;
        return view('admin.ukuran.create', compact('ids'));
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'id_produk' => ['required', 'int'],
            'ukuran' => ['required', 'string'],
            'harga' => ['required', 'int'],
        ]);
        $post = new Ukuran;
        $post->id_produk = $request->get('id_produk');
        $post->ukuran = $request->get('ukuran');
        $post->harga = $request->get('harga');
        $post->save();
        return redirect('ukuran')->with('flash_message', 'berhasil ditambahkan');

    }
    
    public function edit($id) {

        $datas = Ukuran::findOrFail($id);
        return view('admin.ukuran.edit', compact('datas'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_produk' => ['required', 'int'],
            'ukuran' => ['required', 'string'],
            'harga' => ['required', 'int'],
        ]);

        $form_data = array(
            'id_produk' =>$request->id_produk,
            'ukuran' =>$request->ukuran,
            'harga' => $request->harga,
            
        );
        Ukuran::where('id_ukuran',$id)->update($form_data);

        return redirect()->to('ukuran')->with('flash_message', 'ukuran updated!');
    }

    public function destroy($id)
    {
       Ukuran::destroy($id);
        return redirect()->to('ukuran')->with('flash_message', 'ukuran terhapus!');
    }



}
