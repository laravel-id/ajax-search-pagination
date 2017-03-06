## Instalasi

- Clone repositori.
- Masuk ke direktori aplikasi dan perbarui package dengan perintah: ```composer install```.
- Salin berkas ```.env.example``` menjadi ```.env``` dan ubah pengaturan pangkalan data sesuai dengan environment lokal.
- Generate key baru dengan perintah: ```php artisan key:generate```.
- Jalankan migrasi dengan perintah: ```php artisan migrate```.
- Buat data user dengan database seeder: ```php artisan db:seed --class=UserTableSeeder```. Jalankan Artisan console tersebut secara berulang-ulang untuk membuat data user lebih banyak.
- Jalankan built-in web server dengan perintah: ```php artisan serve```.

Terakhir, akses aplikasi melalui peramban dengan tautan: ```http://localhost:8000/user/index```.