# Breadcrumb Component

Komponen breadcrumb telah ditambahkan ke semua halaman untuk memudahkan navigasi pengguna.

## Cara Penggunaan

Untuk menambahkan breadcrumb ke halaman, gunakan `@include` dengan parameter breadcrumbs:

```blade
@include(
    'section-breadcrumb',
    [
        'breadcrumbs' => [
            ['label' => 'Label 1', 'url' => '/url-1'],
            ['label' => 'Label 2', 'url' => '/url-2'],
            ['label' => 'Current Page'], // Halaman terakhir tanpa URL
        ],
    ]
)
```

## Struktur Breadcrumb

- **Home/Beranda** - Otomatis ditambahkan di setiap breadcrumb
- **Level 1, 2, dst** - Tambahkan sesuai kebutuhan
- **Current Page** - Item terakhir tanpa URL (menunjukkan halaman aktif)

## Contoh Implementasi

### Halaman dengan 1 Level

```blade
@include(
    'section-breadcrumb',
    [
        'breadcrumbs' => [['label' => 'Profil']],
    ]
)
```

Hasil: Home > Profil

### Halaman dengan 2 Level

```blade
@include(
    'section-breadcrumb',
    [
        'breadcrumbs' => [['label' => 'Profil', 'url' => '/profil'], ['label' => 'Sejarah']],
    ]
)
```

Hasil: Home > Profil > Sejarah

### Halaman dengan 3 Level

```blade
@include(
    'section-breadcrumb',
    [
        'breadcrumbs' => [
            ['label' => 'Galeri Foto', 'url' => '/galeri'],
            ['label' => 'Album', 'url' => '/galeri/album'],
            ['label' => 'Detail Foto'],
        ],
    ]
)
```

Hasil: Home > Galeri Foto > Album > Detail Foto

## Halaman yang Sudah Menggunakan Breadcrumb

1. **Profil** (`/profil`)
    - Home > Profil

2. **Sejarah** (`/profil/sejarah`)
    - Home > Profil > Sejarah

3. **Visi & Misi** (`/profil/visi-misi`)
    - Home > Profil > Visi & Misi

4. **Struktur Organisasi** (`/profil/struktur-organisasi`)
    - Home > Profil > Struktur Organisasi

5. **Tugas & Fungsi** (`/profil/tugas-fungsi`)
    - Home > Profil > Tugas & Fungsi

6. **Berita & Informasi** (`/berita`)
    - Home > Berita & Informasi

7. **Detail Berita** (`/berita-detail`)
    - Home > Berita & Informasi > Detail Berita

8. **Galeri Foto** (`/galeri`)
    - Home > Galeri Foto

9. **Album Galeri** (`/galeri/album`)
    - Home > Galeri Foto > Peringatan Hari Perhubungan Nasional 2025

## Kustomisasi

Komponen breadcrumb terletak di: `resources/views/section-breadcrumb.blade.php`

Anda dapat mengubah:

- Warna (saat ini menggunakan yellow-500 untuk hover)
- Spacing
- Font size
- Icon

## Dark Mode Support

Breadcrumb sudah mendukung dark mode dengan class Tailwind:

- `dark:bg-gray-900` untuk background
- `dark:text-gray-400` untuk text
- `dark:hover:text-yellow-500` untuk hover state
