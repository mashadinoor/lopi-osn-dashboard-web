# Panduan Kontribusi

Terima kasih atas ketertarikan Anda untuk berkontribusi pada proyek ini.

Mohon baca panduan berikut sebelum membuat perubahan.

---

# Alur Pengembangan

Branch yang digunakan:

- `main` → Branch stabil (produksi)
- `dev` → Branch utama untuk pengembangan

Seluruh pengembangan dilakukan pada branch `dev`.

Apabila mengerjakan fitur baru, disarankan membuat branch turunan dari `dev`, misalnya:

- `feature/auth`
- `feature/export-pdf`
- `feature/dashboard`
- `fix/login`
- `refactor/dashboard`

---

# Standar Commit

Proyek ini menggunakan standar **Conventional Commits**.

Contoh:

```text
feat(auth): menambahkan autentikasi login

feat(export): menambahkan fitur ekspor PDF

fix(auth): memperbaiki bug sesi login

refactor(dashboard): memisahkan logika statistik ke service

docs(readme): memperbarui dokumentasi instalasi

chore(deps): memperbarui dependency Laravel
```

---

# Standar Penulisan Kode

## PHP

- Mengikuti standar PSR-12.
- Controller hanya menangani request dan response.
- Logika bisnis ditempatkan pada Service.
- Validasi menggunakan Form Request apabila memungkinkan.
- Model hanya menangani akses data.

## Vue

- Menggunakan Composition API.
- Membuat komponen yang kecil dan dapat digunakan kembali.
- Menggunakan composable apabila terdapat logika yang digunakan berulang.

---

# Sebelum Melakukan Commit

Pastikan:

- Aplikasi dapat dijalankan tanpa error.
- Tidak terdapat error build (`npm run build`).
- Migration berjalan dengan baik.
- Menggunakan format Conventional Commits.
- Perubahan hanya berfokus pada satu tujuan.

---

# Kebijakan Data

Repositori ini **tidak diperbolehkan** menyimpan:

- Dataset resmi Puspresnas.
- Data peserta.
- Data sekolah.
- Dokumen hasil seleksi.
- File PDF hasil ekspor.
- File Excel.
- File CSV.
- File konfigurasi yang berisi kredensial.
- File `.env`.

Repositori ini hanya diperuntukkan bagi **source code**.

---

# Lisensi Kontribusi

Dengan mengirimkan kontribusi ke repositori ini, Anda menyatakan bahwa kontribusi tersebut dapat didistribusikan menggunakan lisensi yang sama dengan proyek ini.
