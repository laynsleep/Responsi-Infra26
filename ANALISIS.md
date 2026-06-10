# Analisis Perbaikan

## Permasalahan 1

### Gejala
Docker compose tidak dapat dijalankan

### Penyebab
- services tanpa ':'
- context tidak sesuai dengan services
- nama volumes tidak sesuai
- networks tidak sesuai format

### Solusi
- tambah ':' setelah services
- ubah ./web33 menjadi ./web3
- ubah database-data menjadi db-data
- tambahkan '{}' pada networks frontend dan backend

---

## Permasalahan 2

### Gejala
Konfigurasi nginx tidak sesuai dan tidak terbaca

### Penyebab
- Terdapat markdown yang membuat config terbaca kosong
- nginx membaca web11 dan bukan web1
- port web3 tidak sesuai dengan container

### Solusi
- hapus markdown
- ubah web11 menjadi web1
- ubah port web3 menjadi 80

---

## Permasalahan 3

### Gejala
Error dalam building

### Penyebab
Typo dalam penulisan apache pada Dockerfile

### Solusi
Ubah penulisannya menjadi php:8.2-apache

---

## Permasalahan 4

### Gejala
Web3 tidak terbaca pada upstream log nginx

### Penyebab
kurang networks frontend agar terhubung dengan nginx

### Solusi
tambah networks frontend pada web3 di file docker-compose

---

## Permasalahan 5

### Gejala
web2 gagal akses ke database

### Penyebab
password untuk akses dbnya salah

### Solusi
ganti passwordnya dari wrongpassword ke student123

---

## Permasalahan 6

### Gejala
web1 gagal akses ke database

### Penyebab
kesalahan pada nilai environment DB_HOST

### Solusi
ubah nilainya dari mysql menjadi db