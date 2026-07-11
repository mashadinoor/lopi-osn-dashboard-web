# OSN Dashboard Development Roadmap

> Project: Internal Dashboard OSN SD, SMP, SMA
>
> Tech Stack:
>
> - Backend: Laravel
> - Frontend: Vue.js
> - Styling: Tailwind CSS
> - Database: MySQL
>
> Tujuan utama:
>
> - Guest dapat melihat data.
> - User internal LOPI dapat login dan melakukan export PDF.
> - Data bersumber dari file CSV.

---

# Phase 0 — Project Setup

## Objective

Menyiapkan project Laravel sebagai fondasi aplikasi.

## Checklist

- [x] Membuat project Laravel
- [x] Inisiasi git
- [x] Membuat branch `main` dan `dev`
- [x] Install Vue.js
- [x] Install Tailwind CSS
- [x] Konfigurasi koneksi MySQL
- [x] Inisialisasi Git Repository
- [x] Push repository pertama

## Learning

- Struktur project Laravel
- Vite
- Vue Integration
- Environment (.env)

## Deliverable

- Laravel berhasil berjalan di localhost.
- Vue berhasil ditampilkan.
- Database berhasil terhubung.

---

# Phase 1 — Authentication

## Objective

Membangun sistem login untuk internal LOPI.

## Checklist

- [ ] Install Laravel Breeze
- [ ] Menghapus fitur Register
- [ ] Menghapus Forgot Password
- [ ] Login menggunakan Email
- [ ] Logout
- [ ] Redirect setelah login

## Learning

- Authentication
- Session
- Middleware
- Route Protection

## Deliverable

- Internal LOPI dapat login.
- Guest tidak perlu login.

---

# Phase 2 — Database Design

## Objective

Merancang struktur database berdasarkan data CSV.

## Checklist

- [ ] Analisis struktur CSV
- [ ] Menentukan kolom database
- [ ] Membuat Migration
- [ ] Membuat Model
- [ ] Membuat Seeder (opsional)

## Learning

- Migration
- Eloquent Model
- Database Design

## Deliverable

Database siap digunakan.

---

# Phase 3 — Import CSV

## Objective

Mengimpor data CSV ke database.

## Checklist

- [ ] Upload CSV
- [ ] Validasi file
- [ ] Parsing CSV
- [ ] Batch Insert
- [ ] Validasi data duplikat
- [ ] Menampilkan hasil import

## Learning

- File Upload
- CSV Parsing
- Batch Insert
- Validation

## Deliverable

Data CSV berhasil masuk ke database.

---

# Phase 4 — Data Viewer

## Objective

Menampilkan data OSN.

## Checklist

- [ ] Halaman SD
- [ ] Halaman SMP
- [ ] Halaman SMA
- [ ] Pagination
- [ ] Sorting
- [ ] Search

## Learning

- Query Builder
- Pagination
- API Resource
- Vue Table

## Deliverable

Seluruh data dapat ditampilkan.

---

# Phase 5 — Filter & Search

## Objective

Mempermudah pencarian data.

## Checklist

- [ ] Filter Tahun
- [ ] Filter Provinsi
- [ ] Filter Kabupaten/Kota
- [ ] Filter Bidang
- [ ] Multi Filter

## Learning

- Dynamic Query
- URL Query Parameter

## Deliverable

Filter dapat digunakan secara bersamaan.

---

# Phase 6 — School Detail

## Objective

Menampilkan informasi lengkap setiap sekolah.

## Checklist

- [ ] Detail Sekolah
- [ ] Informasi Dasar
- [ ] Riwayat Prestasi
- [ ] Statistik

## Learning

- Route Model Binding
- Eloquent Relationship

## Deliverable

Setiap sekolah memiliki halaman detail.

---

# Phase 7 — Authorization

## Objective

Membedakan hak akses Guest dan User Login.

## Rules

### Guest

- ✅ Melihat data
- ✅ Search
- ✅ Filter
- ❌ Export PDF

### Login

- ✅ Semua akses Guest
- ✅ Export PDF

## Checklist

- [ ] Middleware
- [ ] Permission Export
- [ ] Menyembunyikan tombol Export untuk Guest

## Learning

- Authorization
- Middleware
- Blade Directive (@auth)

## Deliverable

Permission berjalan sesuai kebutuhan.

---

# Phase 8 — Export PDF

## Objective

Menghasilkan laporan PDF.

## Checklist

- [ ] Install library PDF
- [ ] Membuat template PDF
- [ ] Export Detail Sekolah
- [ ] Download PDF

## Learning

- Blade Template
- PDF Rendering

## Deliverable

PDF berhasil dihasilkan.

---

# Phase 9 — Dashboard Statistics

## Objective

Menampilkan ringkasan data.

## Checklist

- [ ] Total Sekolah
- [ ] Total Provinsi
- [ ] Total Kabupaten
- [ ] Total Peserta
- [ ] Total Medali
- [ ] Grafik sederhana

## Learning

- Aggregate Query
- Dashboard Widget

## Deliverable

Dashboard memiliki statistik utama.

---

# Phase 10 — Data Management

## Objective

Memudahkan pengelolaan data setiap tahun.

## Checklist

- [ ] Import CSV baru
- [ ] Hapus data berdasarkan tahun
- [ ] Edit data
- [ ] Riwayat Import
- [ ] Log Error Import

## Learning

- CRUD
- File Processing
- Activity Log

## Deliverable

Admin tidak perlu mengakses database secara manual.

---

# Phase 11 — UI & UX

## Objective

Merapikan tampilan aplikasi.

## Checklist

- [ ] Menggunakan Admin Template
- [ ] Responsive Layout
- [ ] Loading State
- [ ] Empty State
- [ ] Toast Notification
- [ ] Error Page

## Learning

- Component Reuse
- Layouting

## Deliverable

Aplikasi nyaman digunakan.

---

# Phase 12 — Deployment

## Objective

Mempublikasikan aplikasi.

## Checklist

- [ ] Production Database
- [ ] Environment Production
- [ ] Domain
- [ ] HTTPS
- [ ] Backup Database
- [ ] Error Monitoring

## Learning

- Deployment Laravel
- Server Configuration

## Deliverable

Dashboard online dan siap digunakan.

---

# Development Flow

```text
Phase 0
Project Setup
        │
        ▼
Phase 1
Authentication
        │
        ▼
Phase 2
Database Design
        │
        ▼
Phase 3
Import CSV
        │
        ▼
Phase 4
Data Viewer
        │
        ▼
Phase 5
Filter & Search
        │
        ▼
Phase 6
School Detail
        │
        ▼
Phase 7
Authorization
        │
        ▼
Phase 8
Export PDF
        │
        ▼
Phase 9
Dashboard Statistics
        │
        ▼
Phase 10
Data Management
        │
        ▼
Phase 11
UI & UX
        │
        ▼
Phase 12
Deployment
```

---

# Target MVP

Versi pertama dianggap selesai apabila sudah memenuhi fitur berikut:

- Login Internal LOPI
- Guest dapat melihat data
- Import CSV
- Search
- Filter
- Detail Sekolah
- Export PDF
- Responsive Layout

Fitur seperti statistik lanjutan, riwayat import, dan dashboard analitik dapat dikembangkan pada iterasi berikutnya.
