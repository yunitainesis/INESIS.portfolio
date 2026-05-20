# LAPORAN UTS - PROJECT WEB PROFILE LARAVEL

---

## Soal No. 8: Penjelasan Controller dan Pengambilan Data

### 1. Daftar Controller
Terdapat 5 controller utama dalam project ini dengan tugas masing-masing:
*   **PortfolioController**: Mengatur alur data utama dan mengirimkannya ke halaman profil.
*   **SkillController**: Mengambil data keahlian dari database.
*   **ProjectController**: Mengambil data portofolio proyek dari database.
*   **ExperienceController**: Mengolah data riwayat pendidikan dan organisasi.
*   **ContactController**: Menangani validasi pengiriman pesan dari form kontak.

### 2. Mekanisme Pengambilan Data
Data diambil menggunakan **Eloquent ORM** (Object-Relational Mapping).
*   *Contoh:* `Skill::all()` digunakan untuk mengambil semua data dari tabel `skills` tanpa perlu menulis query SQL manual.
*   *Pengurutan:* `Experience::orderBy('year', 'desc')->get()` digunakan untuk mengambil data pengalaman dari yang terbaru.

### 3. Pengiriman Data ke View
Data dikirim dari Controller ke View menggunakan fungsi `compact()`.
```php
return view('portofolio', compact('skills', 'projects', 'experiences'));
```
Fungsi ini membungkus variabel-variabel tersebut sehingga bisa langsung dibaca oleh file Blade.

---

## Soal No. 9: Struktur Layout, Blade, dan Tampilan Data

### 1. Struktur Tampilan (Layout)
Website ini menggunakan konsep **Single-Page Application (SPA)**. Strukturnya terdiri dari:
*   **Navigation**: Bar navigasi tetap.
*   **Hero Section**: Salam pembuka dan slider foto.
*   **Academic & Education**: Profil bento-grid dan timeline pendidikan.
*   **Portfolio & Experience**: Daftar proyek dan riwayat organisasi.
*   **Contact**: Tombol hubungi via Email/WhatsApp.

### 2. Penggunaan Blade
Blade digunakan untuk mempermudah penulisan logika di dalam HTML. Fitur yang digunakan:
*   `{{ $var }}`: Menampilkan teks dari database secara aman.
*   `@foreach`: Mengulang elemen (seperti card proyek) sebanyak data yang ada.
*   `@if`: Menampilkan elemen secara kondisional (contoh: ikon berbeda untuk pendidikan).
*   `asset()`: Menghubungkan file gambar dan CSS ke halaman.

### 3. Cara Menampilkan Data di Halaman
Data yang sudah dikirim oleh Controller ditampilkan di Blade menggunakan perulangan.
*   *Contoh:*
    ```blade
    @foreach($projects as $project)
        <h3>{{ $project->title }}</h3>
        <p>{{ $project->description }}</p>
    @endforeach
    ```
Dengan cara ini, jika Anda menambah data di database (misal proyek baru), website akan otomatis menampilkan data tersebut tanpa perlu mengubah kode HTML.
