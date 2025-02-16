# 1️⃣ Clone repository
git clone https://github.com/yudharoot/pratama.git

# 2️⃣ Masuk ke direktori proyek
cd pratama

# 3️⃣ Install dependencies dengan Composer
composer install

# 4️⃣ Salin file .env dari template
cp .env.example .env

# 5️⃣ Generate application key
php artisan key:generate

# 6️⃣ Konfigurasi database (EDIT SECARA MANUAL di file .env sebelum lanjut)
#    - Buka file .env dengan editor seperti nano, vim, atau buka langsung di file explorer
#    - Sesuaikan pengaturan database: DB_DATABASE, DB_USERNAME, DB_PASSWORD
#    - Simpan file setelah diedit

# 7️⃣ Buat database di phpMyAdmin (Jangan buat tabel, cukup databasenya saja)

# 8️⃣ Jalankan migrasi database
php artisan migrate

# 9️⃣ Jalankan seeder (opsional, jika ada data awal yang perlu dimasukkan)
php artisan db:seed

# 🔟 Buat storage link untuk penyimpanan file
php artisan storage:link

# 1️⃣1️⃣ Jalankan server Laravel
php artisan serve
