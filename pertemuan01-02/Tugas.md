# Tugas 01 - Praktikum Pemrograman Berbasis Web A
Nama : Inna Lutfiah Fatih

NPM  : 4524210044

---
## Modifikasi
### 1. Modifikasi pada Biodata.php
🗿 Before Modifikasi
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/f9dbf544-29ee-4b33-a2bf-97eb17c74d00" />

✅ After Modifikasi
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/8a6b5db6-401f-4582-bd1f-1c2f8e8fc086" />

### 2. Modifikasi pada Kalkulator.php
🗿 Before Modifikasi
<img width="1920" height="1080" alt="Screenshot (2998)" src="https://github.com/user-attachments/assets/53fb61a2-d28e-42c1-ab43-e00b0968b266" />

✅ After Modifikasi
<img width="1920" height="1080" alt="Screenshot (3000)" src="https://github.com/user-attachments/assets/eee46525-c54a-4996-8415-bd3a1e3f269b" />

## Lima Bagian Kode yang Paling Penting dari Biodata dan Kalkulator
1. Function Status Kelulusan
> Kode ini membuat fungsi yang menerima nilai IPK, lalu menggunakan if untuk menentukan predikat berdasarkan batas nilai tertentu. Penting karena proses penentuan predikat bisa dilakukan secara otomatis.
```php
function statuskelulusan(float $학번): string {
    if ($학번 >= 4.50) return '짱!!';
    if ($학번 <= 4.50) return '오케이';
    return '힘내!'; }
```
2. Array Biodata Mahasiswa
> Kode ini menyimpan beberapa data mahasiswa dalam bentuk associative array menggunakan pasangan key => value. Penting agar data biodata tersusun dan mudah dipanggil.
```php
$mahasiswa = [
    '학번' => '20240144',
    'nama' => '박지성 ♡',
    '전공' => '의공학',
    '학기' => '7',
    '평점' => 5.52 ]
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
                if ($b == 0) {
                    $pesan = 'Pembagian dengan nol tidak diperbolehkan.'; } 
                else {
                    $hasil = $a / $b; }
            break;}
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
