# Tugas 01 - Praktikum Pemrograman Berbasis Web A
Nama : Inna Lutfiah Fatih

NPM  : 4524210044

---
## Modifikasi
### 1. Modifikasi pada Biodata.php
🗿 Before Modifikasi

✅ After Modifikasi
### 2. Modifikasi pada Kalkulator.php
🗿 Before Modifikasi

✅ After Modifikasi
## Lima Bagian Kode yang Paling Penting dari Biodata dan Kalkulator
1. Function Status Kelulusan
> Kode ini membuat fungsi yang menerima nilai IPK, lalu menggunakan if untuk menentukan predikat berdasarkan batas nilai tertentu. Penting karena proses penentuan predikat bisa dilakukan secara otomatis.
```php
function statuskelulusan(float $ipk): string {
    if ($ipk >= 3.50) return 'sangat memuaskan';
    if ($ipk >= 3.00) return 'memuaskan';
    return 'perlu peningkatan';
}
```
2. Array Biodata Mahasiswa
> Kode ini menyimpan beberapa data mahasiswa dalam bentuk associative array menggunakan pasangan key => value. Penting agar data biodata tersusun dan mudah dipanggil.
```php
$mahasiswa = [
    'nim' => '2026001',
    'nama' => 'Park Jisung',
    'prodi' => 'Biomedical Engineering',
    'semester' => '7',
    'ipk' => 3.87
];
```
3. Mengambil Input dari Form
> Kode ini mengambil angka dan operator yang dikirim dari form menggunakan metode POST. Penting karena menjadi penghubung antara input pengguna dan proses kalkulator.
```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float) ($_POST['a'] ?? 0);
    $b = (float) ($_POST['b'] ?? 0);
    $operator = $_POST['operator'] ?? '+';
}
```
4. Switch untuk Operasi Kalkulator
> Kode ini memeriksa operator yang dipilih dan menjalankan operasi matematika yang sesuai. Penting karena menjadi bagian utama dari proses perhitungan kalkulator.
```php
switch ($operator) {
    case '+':
        $hasil = $a + $b;
        break;
    case '-':
        $hasil = $a - $b;
        break;
    case '*':
        $hasil = $a * $b;
        break;
    case '/':
        $hasil = $a / $b;
        break;
}
```
5. Menampilkan Biodata dengan Foreach
> Kode ini melakukan perulangan pada setiap data dalam array $mahasiswa dan menampilkannya. Penting karena semua data dapat ditampilkan otomatis tanpa menulis kode untuk setiap biodata satu per satu.
```php
foreach ($mahasiswa as $kunci => $nilai) {
    echo $kunci . ': ' . $nilai;
}
```

## Error yang Pernah Muncul
1. Typo huruf, caranya diperhatikan kembali penulisan yang salah dan menyamakan variabel agar bisa terbaca oleh program

