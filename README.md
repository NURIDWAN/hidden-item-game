# Hidden Item Game

Program PHP sederhana untuk mencari kemungkinan lokasi item tersembunyi pada sebuah grid berdasarkan pola pergerakan pemain.

## Deskripsi

Pemain memulai permainan dari posisi `X` pada grid.

Dari posisi awal tersebut, pemain bergerak dengan urutan:

1. North (Atas) sebanyak A langkah
2. East (Kanan) sebanyak B langkah
3. South (Bawah) sebanyak C langkah

Nilai A, B, dan C tidak diketahui, sehingga program akan mencoba seluruh kemungkinan pergerakan yang valid tanpa menabrak tembok (`#`).

Hasil akhirnya adalah daftar koordinat yang mungkin menjadi lokasi item tersembunyi.

---

## Struktur Grid

Contoh grid:

```text
########
#......#
#.###..#
#...#.##
#X#....#
########
```

Keterangan:

| Simbol | Arti |
|---------|---------|
| X | Posisi awal pemain |
| . | Area yang dapat dilalui |
| # | Tembok / penghalang |
| $ | Kemungkinan lokasi item |

---

## Cara Kerja

1. Mencari posisi awal pemain (`X`)
2. Menghasilkan seluruh kombinasi langkah A, B, dan C
3. Memvalidasi setiap pergerakan agar tidak menabrak tembok
4. Menyimpan posisi akhir yang valid
5. Menampilkan daftar koordinat yang mungkin
6. Menandai lokasi tersebut dengan simbol `$`

---

## Menjalankan Program

Pastikan PHP sudah terinstall.

Cek versi PHP:

```bash
php -v
```

Jalankan program:

```bash
php index.php
```

---

## Contoh Output

```text
Possible item locations:

Row: 3, Col: 3
Row: 4, Col: 3
Row: 4, Col: 4
Row: 4, Col: 5
```

Grid hasil:

```text
########
#......#
#.###..#
#..$#.##
#X#$$$$#
########
```

---

## Teknologi

- PHP 8+
- CLI Application

---

## Author

M Raka Nuridwan

GitHub:
https://github.com/NURIDWAN
