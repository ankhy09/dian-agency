<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="5">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="images/logo-da.png" style="max-width:100px;">
                            </td>
                           
                            <td>
                                Kode #: {{$pesanan->kode}}<br>
                                Tanggal pemesanan: {{$pesanan->tanggal}}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="5">
                    <table>
                        <tr>
                            <td>
                                Dian Agency<br>
                                Jl. M.T. Harioni No. 68<br>
                                Phone: +62 82.222.222
                            </td>
                            
                            <td>
                            {{$pesanan->pelanggan->nama}}<br>
                            {{$pesanan->pelanggan->no_telp}}<br>
                            {{$pesanan->pelanggan->email}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                  No
                </td>
                <td style="text-align:left;">
                   Pesanan
                </td>

                <td>
                </td>

                <td>
                   QTY
                </td>
                
                <td>
                   Harga
                </td>
            </tr>
            @foreach($pesanan_detail as $details)
            <tr class="item">
            <td>
            {{ $loop->iteration }}
            </td>
                <td style="text-align:left;">
                {{$details->ukuran->produk->nama_produk}}
                </td>

                <td>
                </td>

                <td>
                {{$details->qty}}
                </td>
                
                <td>
                Rp. {{number_format ($details->jumlah_harga)}}
                </td>
            </tr>
            @endforeach
            
            <tr class="total">
                <td></td>
                <td></td>

                <td></td>
                <td>Total</td>
                
                <td>
                Rp. {{ number_format($pesanan->total_harga) }}
                </td>
            </tr>
            <tr class="total">
                <td></td>
                <td></td>

                <td></td>
                <td>Kode Unik</td>
                
                <td>
                Rp. {{ number_format($pesanan->kode) }}
                </td>
            </tr>
            <tr class="total">
                <td></td>
                <td></td>

                <td></td>
                <td>Total</td>
                
                <td>
                Rp. {{ number_format($pesanan->kode+$pesanan->total_harga) }}
                </td>
            </tr>
           
        </table>
    </div>
</body>
</html>