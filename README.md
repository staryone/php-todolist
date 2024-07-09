# Simple PHP Todo List

## Deskripsi
Proyek ini adalah aplikasi todo list sederhana yang dibangun menggunakan PHP dan MySQL sebagai backend serta Bootstrap sebagai frontend. Proyek ini bertujuan untuk memperlancar pembelajaran PHP saya.

## Daftar Isi
1. [Tentang Proyek](#tentang-proyek)
2. [Instalasi](#instalasi)
3. [Penggunaan](#penggunaan)
4. [Fitur](#fitur)
5. [Skema Database](#skema-database)
6. [Kontribusi](#kontribusi)
7. [Lisensi](#lisensi)
8. [Demo](#demo)

## Tentang Proyek
Proyek ini menggunakan PHP tanpa framework sebagai backend dan MySQL sebagai database untuk menyimpan data. Di sisi frontend, proyek ini menggunakan Bootstrap untuk tampilan yang responsif dan menarik. 

## Instalasi
Langkah-langkah untuk menginstal dan menjalankan proyek:
1. Clone repositori: `git clone https://github.com/staryone/php-todolist.git`
2. Masuk ke direktori proyek: `cd php-todolist`
3. Buat database MySQL baru dan impor skema database (lihat bagian [Skema Database](#skema-database))
4. Atur konfigurasi database di file `src/connection.php`
5. Jalankan proyek di server lokal atau hosting.

## Penggunaan
Instruksi untuk menggunakan proyek ini setelah instalasi:
1. Buka halaman register untuk membuat akun baru.
2. Login dengan akun yang sudah dibuat.
3. Tambahkan, baca, perbarui, dan hapus todo sesuai kebutuhan.
4. Centang todo untuk menandainya sebagai selesai.

## Fitur
- **Register:** Pengguna dapat membuat akun baru. Username harus unik, jika sudah terdaftar di database maka akan muncul error.
- **Login:** Pengguna dapat login menggunakan akun yang sudah dibuat.
- **Create Todo:** Pengguna dapat menambahkan todo baru.
- **Read Todo:** Pengguna dapat melihat daftar todo yang dimilikinya.
- **Update Todo:** Pengguna dapat memperbarui todo yang sudah ada.
- **Delete Todo:** Pengguna dapat menghapus todo yang tidak diperlukan lagi.
- **Checklist Todo:** Pengguna dapat menandai todo sebagai selesai dengan mencentang checkbox, todo yang sudah selesai akan dicoret.

## Skema Database
### Tabel users
- `id` (primary key) int 11
- `username` (unique key) varchar 255
- `password` varchar 255

### Tabel todos
- `id` (primary key) int 11
- `username` (foreign key mengarah ke users.username) varchar 255
- `note` (disinilah todo disimpan) varchar 255
- `status` (untuk mengetahui apakah todo terchecklist atau tidak) int 11

## Kontribusi
Jika Anda ingin berkontribusi pada proyek ini, silakan fork repositori ini dan kirim pull request. Anda juga bisa membuka isu untuk melaporkan bug atau permintaan fitur baru.

## Lisensi
Proyek ini dilisensikan di bawah lisensi MIT - lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.

## Demo
Anda dapat melihat demo proyek ini di [Coming Soon](#).
