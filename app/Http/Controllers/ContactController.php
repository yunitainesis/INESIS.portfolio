<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Menangani pengiriman pesan dari form kontak.
     */
    public function sendMessage(Request $request)
    {
        // Simulasi validasi
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Di sini bisa ditambah logika kirim email atau simpan ke database
        
        return back()->with('success', 'Pesan Anda telah terkirim!');
    }
}
