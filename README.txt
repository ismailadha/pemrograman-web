CARA MENJALANKAN

A. Tanpa Apache (paling mudah), dari dalam folder ini:
   php -S localhost:8000 index.php
   Buka http://localhost:8000

B. Dengan XAMPP/Laragon:
   - Salin folder "router-php" ke htdocs (XAMPP) atau www (Laragon)
   - Pastikan mod_rewrite aktif dan AllowOverride All
   - Buka http://localhost/router-php/

URL untuk dicoba:
   /            /profil      /mahasiswa
   /mahasiswa?prodi=ti       /mahasiswa/101
   /apa-saja  (404)
