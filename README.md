# TP9DPBO2425C1

Saya Hawa Dwiafina Azahra dengan NIM 2400336 mengerjakan Tugas Praktikum 9 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Desain Program

Program ini dibangun menggunakan pola Model-View-Presenter (MVP). Gampangnya, pola ini memisahkan program menjadi tiga bagian utama agar kode lebih rapi, mudah dikelola, dan gampang dites.

### 1. Model
- Bagian ini bertanggung jawab penuh atas semua urusan data. Mulai dari mengambil data dari database, menyimpan data baru, mengubah data yang sudah ada, sampai menghapus data.
- **Contoh di proyek ini:**
    - `models/TabelPembalap.php`: Mengurus semua data yang berhubungan dengan pembalap.
    - `models/TabelDataLintasan.php`: Mengurus semua data yang berhubungan dengan lintasan.
    - `models/DB.php`: Kelas dasar untuk koneksi ke database.

### 2. View
- Bagian ini fokus untuk menampilkan data ke pengguna (antarmuka atau UI). Isinya cuma kode untuk presentasi, seperti HTML untuk menampilkan tabel atau formulir. View sama sekali tidak tahu-menahu tentang logika bisnis atau database.
- **Contoh di proyek ini:**
    - `views/ViewPembalap.php`: Menyiapkan tampilan untuk daftar pembalap dan formulir tambah/edit pembalap.
    - `views/ViewLintasan.php`: Menyiapkan tampilan untuk daftar lintasan dan formulir tambah/edit lintasan.
    - `template/`: Folder ini berisi file HTML yang menjadi "kulit" atau template tampilan.

### 3. Presenter
- Ini adalah "otak" dari aplikasi. Presenter bertindak sebagai jembatan antara Model dan View. Ketika pengguna melakukan sesuatu (misalnya, klik tombol "tambah"), View akan memberitahu Presenter. Lalu, Presenter akan memerintahkan Model untuk menyimpan data. Setelah itu, Presenter meminta data terbaru dari Model dan menampilkannya ke pengguna melalui View.
- **Contoh di proyek ini:**
    - `presenters/PresenterPembalap.php`: Mengatur logika untuk semua yang berhubungan dengan pembalap.
    - `presenters/PresenterLintasan.php`: Mengatur logika untuk semua yang berhubungan dengan lintasan.

Dengan pemisahan ini, setiap bagian punya tugasnya sendiri-sendiri, jadi kode tidak campur aduk dan lebih mudah dikembangkan.

## Alur Program

Berikut adalah alur kerja aplikasi, baik untuk data pembalap maupun lintasan. Prosesnya hampir sama untuk keduanya.

### 1. Menampilkan Daftar Data (Contoh: Pembalap)
1.  **Permintaan Awal**: Pengguna membuka `index.php` di browser.
2.  **Inisialisasi**: `index.php` membuat objek `TabelPembalap` (Model), `ViewPembalap` (View), dan `PresenterPembalap` (Presenter).
3.  **Presenter Bekerja**: Saat Presenter dibuat, ia langsung meminta semua data pembalap dari Model.
4.  **Model Mengambil Data**: Model menjalankan query ke database untuk mendapatkan semua data pembalap.
5.  **Data Kembali ke Presenter**: Model mengembalikan data ke Presenter.
6.  **Presenter Menyiapkan Tampilan**: Presenter memberikan data tersebut ke View dan memintanya untuk menyiapkan tampilan tabel.
7.  **View Merender HTML**: View mengambil data, memasukkannya ke dalam template HTML, dan menghasilkan halaman web yang siap ditampilkan.
8.  **Tampil ke Pengguna**: Halaman web yang berisi daftar pembalap ditampilkan di browser pengguna.

### 2. Menambah Data Baru
1.  **Pengguna Klik "Tambah"**: Pengguna mengklik tombol untuk menambah data baru.
2.  **Presenter Menampilkan Form**: `index.php` mendeteksi permintaan ini dan meminta Presenter untuk menampilkan formulir tambah data.
3.  **View Menyiapkan Form**: Presenter menyuruh View untuk merender HTML formulir kosong.
4.  **Pengguna Mengisi Form**: Pengguna mengisi data di formulir dan menekan tombol "Simpan".
5.  **Data Dikirim ke Server**: Data dari formulir dikirim kembali ke `index.php`.
6.  **Presenter Menyimpan Data**: `index.php` menangkap data ini dan memberikannya ke Presenter. Presenter kemudian memerintahkan Model untuk menyimpan data baru ini ke database.
7.  **Model Menyimpan ke DB**: Model menjalankan query `INSERT` untuk menambahkan data baru.
8.  **Redirect**: Setelah data berhasil disimpan, halaman akan dialihkan kembali ke halaman daftar utama, di mana data yang baru ditambahkan sudah muncul.

### 3. Mengubah Data
Alurnya sangat mirip dengan menambah data, perbedaannya:
- Saat pengguna mengklik "Edit", `index.php` meminta Presenter untuk menampilkan formulir, tetapi kali ini dengan data yang sudah ada.
- Presenter meminta Model untuk mengambil data spesifik berdasarkan ID.
- Data tersebut ditampilkan di formulir oleh View.
- Saat pengguna menyimpan perubahan, Presenter akan memerintahkan Model untuk menjalankan query `UPDATE` bukan `INSERT`.

### 4. Menghapus Data
1.  **Pengguna Klik "Hapus"**: Pengguna mengklik tombol hapus pada salah satu baris data.
2.  **Permintaan Dikirim**: Sebuah permintaan dikirim ke `index.php` dengan ID data yang akan dihapus.
3.  **Presenter Memberi Perintah**: `index.php` memberitahu Presenter untuk menghapus data tersebut.
4.  **Model Menghapus Data**: Presenter memerintahkan Model untuk menjalankan query `DELETE` di database menggunakan ID yang diberikan.
5.  **Redirect**: Setelah data terhapus, halaman dialihkan kembali ke daftar utama.

## DOKUMENTASI
![PEMBALAP](dokumentasi/PEMBALAP.mp4)


![LINTASAN](dokumentasi/LINTASAN.mp4)
