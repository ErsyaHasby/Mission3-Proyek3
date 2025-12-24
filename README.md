<p align="center">
  <img src="https://img.shields.io/badge/CodeIgniter-4-orange?style=for-the-badge&logo=codeigniter&logoColor=white" alt="CodeIgniter 4">
  <img src="https://img.shields.io/badge/PHP-8.1+-blue?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.1+">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
</p>

# 🎓 Mission 3 - Proyek 3

> **Sistem Manajemen Pembelajaran (LMS)** - Aplikasi web untuk mengelola courses dan mahasiswa menggunakan framework CodeIgniter 4.

Proyek ini merupakan Mission ke-3 dari Mata Kuliah **Proyek 3** di Polban Semester 3. Aplikasi ini menyediakan fitur manajemen untuk admin dan mahasiswa dalam sistem pembelajaran online.

---

## ✨ Fitur Utama

### 👨‍💼 Panel Admin
| Fitur | Deskripsi |
|-------|-----------|
| 📊 Dashboard | Halaman utama admin dengan ringkasan data |
| 📚 Kelola Courses | CRUD (Create, Read, Update, Delete) mata kuliah |
| 👥 Kelola Mahasiswa | CRUD data mahasiswa (NIM, Nama, Umur) |
| 📋 Detail Mahasiswa | Lihat courses yang diambil oleh setiap mahasiswa |

### 🎓 Panel Mahasiswa
| Fitur | Deskripsi |
|-------|-----------|
| 📊 Dashboard | Halaman utama untuk mahasiswa |
| 📚 Daftar Courses | Lihat semua courses yang tersedia |
| ✅ Enrollment | Mahasiswa dapat mendaftar ke courses |
| 👤 Profil | Lihat data diri mahasiswa |

### 🔐 Autentikasi
- Login/Logout sistem
- Session management
- Role-based access control (Admin & Student)

---

## 🛠️ Tech Stack

| Teknologi | Versi | Kegunaan |
|-----------|-------|----------|
| **PHP** | 8.1+ | Backend language |
| **CodeIgniter** | 4.x | MVC Framework |
| **MySQL** | 5.7+ | Database |
| **Composer** | - | Dependency management |

---

## 📁 Struktur Proyek

```
Mission3-Proyek3/
├── CI4 - Mission3/                 # Folder utama CodeIgniter 4
│   ├── app/
│   │   ├── Controllers/
│   │   │   ├── Admin.php           # Controller untuk panel admin
│   │   │   ├── Auth.php            # Controller autentikasi
│   │   │   ├── Enrollment.php      # Controller enrollment
│   │   │   ├── Student.php         # Controller untuk panel mahasiswa
│   │   │   └── Home.php            # Controller halaman utama
│   │   ├── Models/
│   │   │   ├── CourseModel.php     # Model untuk courses
│   │   │   ├── EnrollmentModel.php # Model untuk enrollment
│   │   │   ├── MahasiswaModel.php  # Model untuk mahasiswa
│   │   │   └── UserModel.php       # Model untuk user
│   │   ├── Views/
│   │   │   ├── admin/              # Views panel admin
│   │   │   ├── student/            # Views panel mahasiswa
│   │   │   ├── auth/               # Views autentikasi
│   │   │   └── template.php        # Template layout
│   │   └── Config/                 # Konfigurasi aplikasi
│   ├── public/                     # Entry point & assets
│   ├── writable/                   # Logs, cache, uploads
│   └── .env                        # Environment configuration
└── README.md                       # Dokumentasi proyek
```

---

## 🚀 Instalasi & Setup

### Prasyarat
- PHP 8.1 atau lebih tinggi
- MySQL 5.7 atau lebih tinggi
- Composer
- Web server (Apache/Nginx) atau PHP built-in server

### Langkah Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/ErsyaHasby/Mission3-Proyek3.git
   cd Mission3-Proyek3
   ```

2. **Masuk ke Folder Proyek CI4**
   ```bash
   cd "CI4 - Mission3"
   ```

3. **Install Dependencies**
   ```bash
   composer install
   ```

4. **Konfigurasi Environment**
   ```bash
   # Salin file environment
   cp env .env
   
   # Edit file .env dan sesuaikan konfigurasi database
   ```

5. **Setup Database**
   - Buat database baru di MySQL
   - Jalankan migrasi (jika tersedia) atau import file SQL

6. **Jalankan Aplikasi**
   ```bash
   php spark serve
   ```

7. **Akses Aplikasi**
   Buka browser dan akses: `http://localhost:8080`

---

## 📖 Penggunaan

### Login sebagai Admin
- Akses halaman `/admin/dashboard`
- Kelola courses dan mahasiswa

### Login sebagai Mahasiswa
- Akses halaman `/student/dashboard`
- Lihat dan enroll courses

---

## 📚 API Endpoints

### Admin Routes
| Method | Endpoint | Deskripsi |
|--------|----------|-----------|
| GET | `/admin/dashboard` | Dashboard admin |
| GET | `/admin/courses` | Daftar courses |
| POST | `/admin/courses/store` | Tambah course baru |
| PUT | `/admin/courses/update/:id` | Update course |
| DELETE | `/admin/courses/delete/:id` | Hapus course |
| GET | `/admin/students` | Daftar mahasiswa |
| POST | `/admin/students/store` | Tambah mahasiswa baru |
| PUT | `/admin/students/update/:id` | Update mahasiswa |
| DELETE | `/admin/students/delete/:id` | Hapus mahasiswa |

### Student Routes
| Method | Endpoint | Deskripsi |
|--------|----------|-----------|
| GET | `/student/dashboard` | Dashboard mahasiswa |
| GET | `/student/courses` | Lihat semua courses |
| POST | `/student/enroll/:id` | Enroll ke course |
| GET | `/student/profile` | Lihat profil |

---

## 🔧 Server Requirements

- **PHP** version 8.1 atau lebih tinggi
- **Extension yang dibutuhkan:**
  - `intl` - Internationalization
  - `mbstring` - Multibyte String
  - `json` - JSON (enabled by default)
  - `mysqlnd` - MySQL Native Driver
  - `libcurl` - untuk HTTP requests (opsional)

---

## 👥 Anggota Tim

| Nama | NIM | Role |
|------|-----|------|
| [Nama Anggota 1] | [NIM] | [Role] |
| [Nama Anggota 2] | [NIM] | [Role] |
| [Nama Anggota 3] | [NIM] | [Role] |

---

## 📝 Lisensi

Proyek ini dilisensikan di bawah [MIT License](./CI4%20-%20Mission3/LICENSE).

---

## 📞 Kontak

Jika ada pertanyaan atau saran, silakan hubungi:
- 📧 Email: [email@example.com]
- 🌐 GitHub: [ErsyaHasby](https://github.com/ErsyaHasby)

---

<p align="center">
  <sub>🏫 Polban - Semester 3 - Proyek 3 | 2024/2025</sub>
</p>
