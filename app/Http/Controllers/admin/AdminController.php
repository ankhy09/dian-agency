<?php

namespace App\Http\Controllers\admin;


use App\Produk;
use App\Ukuran;
use App\Pesanan;
use App\PesananDetail;
use App\User;
use App\KonfirmasiPembayaran;   
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Response;
use File;

//untuk generate file pdf
use PDF;

//untuk kirim email
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
    public function index() {
        return view('admin.home');
    }

    //function untuk menampilkan data pesanan
    public function pesanan()
    {
        $user = User::where('id_pelanggan', Auth::user()->id_pelanggan)->get();
        $pesanans = Pesanan::orderBy('id_pesanan', 'DESC')->paginate(10);
    	return view('admin.pesan.index', compact('pesanans','user'));
    }

    public function detail($id)
    {
    	$pesanan = Pesanan::where('id_pesanan', $id)->first();
        $pesanan_detail = PesananDetail::where('id_pesanan', $pesanan->id_pesanan)->paginate(10);

     	return view('admin.pesan.detail', compact('pesanan','pesanan_detail'));
    }

    public function destroy($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->delete();
        return redirect()->to('/datapesanan')->with('flash_message', 'pesanan terhapus!');
    }

    public function download($id)
        {
                $pesanan_detail = PesananDetail::where('id_pesanan', $id)->first();
                $pesanan = Pesanan::where('id_pesanan', $pesanan_detail->id_pesanan)->first();
                $fileCetak = $pesanan_detail->file;

                $filepath = public_path('images/pesanan/').$fileCetak;
                return Response::download($filepath);
        }
    
    
    public function konfirmasi($id)
    {
        $pesanan = Pesanan::where('id_pesanan', $id)->first();
        $pesanan->status = 3;
        $pesanan->update();
        

        return redirect()->to('datapesanan');
    }

    public function invoice($id) {
        $pesanan = Pesanan::where('id_pesanan', $id)->first();
        $pesanan_detail = PesananDetail::where('id_pesanan', $pesanan->id_pesanan)->get();

       
        $data["email"]=$pesanan->pelanggan->email;
        $data["subject"]='invoice';

        $pdf = PDF::loadview('admin/invoice_pdf',['pesanan'=>$pesanan, 'pesanan_detail'=>$pesanan_detail]);
        //memberi nama file invoice dengan format pesanan+namapelanggan+kodepesanan
        $nama = 'pesanan'. $pesanan->pelanggan->nama . $pesanan->kode. '.pdf';

        Mail::send('admin/invoice_pdf',['pesanan'=>$pesanan, 'pesanan_detail'=>$pesanan_detail], function($message)use($data, $pdf, $nama) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["subject"])
                    ->attachData($pdf->output(), $nama);
        });

      return redirect()->back()->with('success', 'your message,here');   }

        
      public function pelanggan() {
        
        $datas = User::orderBy('id_pelanggan', 'DESC')->paginate(10);
        return view('admin.pelanggan.index', compact('datas'));
    }

}
