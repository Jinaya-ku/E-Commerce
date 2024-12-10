<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Midtrans;
use Midtrans\Snap;
use App\Models\Keranjang;

class PaymentController extends Controller
{
    public function __construct()
    {
        // Set konfigurasi Midtrans
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$clientKey = config('midtrans.client_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
    }

    // Menampilkan halaman pembayaran
    public function checkout()
    {
        $keranjangs = Keranjang::where('user_id', auth()->id())->get();
        $totalAmount = $keranjangs->sum('total_harga');

        return view('payment.checkout', compact('keranjangs', 'totalAmount'));
    }

    // Proses Pembayaran
    public function processPayment(Request $request)
    {
        $keranjangs = Keranjang::where('user_id', auth()->id())->get();
        $totalAmount = $keranjangs->sum('total_harga');

        // Membuat transaksi
        $transactionDetails = [
            'order_id' => 'ORDER-' . time(),  // ID unik untuk transaksi
            'total_harga' => $totalAmount,   // Total harga yang harus dibayar
        ];

        $itemDetails = [];
        foreach ($keranjangs as $item) {
            $itemDetails[] = [
                'id' => $item->produk_id,
                'harga' => $item->harga,
                'jumlah' => $item->jumlah,
                'nama' => $item->produk->nama,
            ];
        }

        // Detail transaksi
        $transactionData = [
            'payment_type' => 'gopay',  // Ganti dengan metode pembayaran yang diinginkan
            'gopay' => [
                'enabled' => true,
                'callback_url' => route('payment.callback'),
            ],
            'transaction_details' => $transactionDetails,
            'item_details' => $itemDetails,
        ];

        // Menggunakan Midtrans Snap untuk mendapatkan token pembayaran
        $snapToken = Snap::getSnapToken($transactionData);

        return view('payment.pay', compact('snapToken'));
    }

    // Callback dari Midtrans
    public function callback(Request $request)
    {
        // Proses pembayaran sukses atau gagal dari Midtrans
        $transactionStatus = $request->all();

        // Simpan status transaksi dan lakukan proses seperti mengubah status pesanan, dll.
        return response()->json($transactionStatus);
    }
}
