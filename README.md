# 🛒 SPW PIC Backend - Sistem Point of Sale / Manajemen Toko

Ini adalah Backend API berbasis Laravel untuk proyek SPW. Sistem ini mencakup fitur autentikasi, manajemen produk, pencatatan transaksi penjualan, dan laporan pendapatan.

---

## 🛠 Instalasi & Setup (Lokal)

Jika Anda ingin menjalankan proyek ini di komputer lokal, ikuti langkah-langkah berikut:

1. **Clone repository ini**
   ```bash
   git clone <url-repo-anda>
   cd project-SPW-pic
   ```

2. **Install Dependensi Composer**
   ```bash
   composer install
   ```

3. **Setup Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi Database**
   Buka file `.env` dan pastikan konfigurasi database sudah benar.

5. **Migrasi Database**
   Perintah ini akan membuat tabel-tabel yang dibutuhkan.
   ```bash
   php artisan migrate:fresh
   ```

6. **Jalankan Server Lokal**
   ```bash
   php artisan serve
   ```
   Aplikasi akan berjalan di `http://127.0.0.1:8000`.

---

## 📖 Panduan Lengkap Testing API di Postman

Gunakan **`http://127.0.0.1:8000`** sebagai *base URL* untuk setiap permintaan (*request*).

⚠️ **Penting:** Kecuali `/login` dan `/register`, semua *endpoint* di bawah wajib menggunakan **Bearer Token** karena sudah dilindungi oleh autentikasi Sanctum.

### Cara Pasang Token di Postman:
1. Akses `/login` (atau `/register`) lalu perhatikan bagian `"token": "..."` di balasan (*response*) sistem. Salin teks token tersebut.
2. Buka tab **Authorization** pada *request* API lain (misal: `/products`).
3. Pilih kolom Type menjadi **Bearer Token**.
4. *Paste* (tempel) token yang sudah disalin tadi ke dalam kolom **Token**.
5. Pastikan selalu menambahkan Header `Accept: application/json` agar *response* selalu berupa format JSON murni.

---

### 🔐 1. AUTHENTICATION (Tim)

#### Register User Baru
- **Method:** `POST`
- **URL:** `/register`
- **Body (JSON):**
  ```json
  {
      "name": "Admin Toko",
      "email": "admin@toko.com",
      "password": "password123"
  }
  ```

#### Login
- **Method:** `POST`
- **URL:** `/login`
- **Body (JSON):**
  ```json
  {
      "email": "admin@toko.com",
      "password": "password123"
  }
  ```
  *(Catat/Salin isi `token` dari respons untuk digunakan pada endpoint lainnya!)*

#### Logout
- **Method:** `POST`
- **URL:** `/logout`
- **Auth:** Bearer Token

---

### 📦 2. PRODUCT (Ardi & Ulan)

#### Tambah Produk
- **Method:** `POST`
- **URL:** `/products`
- **Auth:** Bearer Token
- **Body (JSON):**
  ```json
  {
      "nama_produk": "Indomie Goreng",
      "harga_beli": 2500,
      "harga_jual": 3500,
      "stok": 100
  }
  ```

#### Lihat Semua Produk
- **Method:** `GET`
- **URL:** `/products`
- **Auth:** Bearer Token

#### Edit Produk (Contoh ID: 1)
- **Method:** `PUT`
- **URL:** `/products/1`
- **Auth:** Bearer Token
- **Body (JSON):**
  ```json
  {
      "stok": 150,
      "harga_jual": 4000
  }
  ```

#### Hapus Produk (Contoh ID: 1)
- **Method:** `DELETE`
- **URL:** `/products/1`
- **Auth:** Bearer Token

---

### 💰 3. TRANSACTION (Keefa)

#### Simpan Transaksi Penjualan
- **Method:** `POST`
- **URL:** `/transactions`
- **Auth:** Bearer Token
- **Body (JSON):**
  ```json
  {
      "product_id": 1,
      "jumlah": 5
  }
  ```
  *(Sistem akan otomatis mengambil harga jual produk dari database, mengalikannya dengan `jumlah`, lalu memotong sisa `stok` produk tersebut.)*

#### Lihat Riwayat Transaksi
- **Method:** `GET`
- **URL:** `/transactions`
- **Auth:** Bearer Token

---

### 📊 4. DASHBOARD (Syifa)

#### Lihat Ringkasan Utama
- **Method:** `GET`
- **URL:** `/dashboard`
- **Auth:** Bearer Token
- **Keterangan:** Menampilkan data ringkas total produk terdaftar, total transaksi, dan total pendapatan.

---

### 📑 5. REPORT (Bunda)

#### Lihat Laporan
- **Method:** `GET`
- **URL:** `/reports` (tanpa filter, ambil semua dari awal)
- **URL dengan Filter Tanggal:** `/reports?start=2026-04-01&end=2026-04-30`
- **Auth:** Bearer Token
- **Keterangan:** Mengembalikan list semua transaksi secara detail, berikut perhitungan total *revenue* dan total **keuntungan (profit bersih)** secara keseluruhan dalam rentang tanggal tersebut.
