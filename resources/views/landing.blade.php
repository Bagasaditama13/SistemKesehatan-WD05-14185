<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sistem Poliklinik</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 text-[18px] leading-relaxed">
  <!-- Header -->
  <header class="bg-blue-800 text-white py-5 shadow-md">
    <div class="container mx-auto flex justify-between items-center px-6">
      <h1 class="text-2xl font-bold flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m-3-3H9m-6 5a9 9 0 1118 0H3z" />
        </svg>
        <span>Sistem Poliklinik</span>
      </h1>
      <nav class="space-x-6 text-base">
        <a href="#home" class="hover:text-gray-300">Home</a>
        <a href="#layanan" class="hover:text-gray-300">Layanan</a>
        <a href="#kontak" class="hover:text-gray-300">Kontak</a>
        <a href="#tentang" class="hover:text-gray-300">Tentang</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section id="home" class="py-20 bg-white">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 text-center md:text-left">
        <h2 class="text-4xl font-bold mb-6">Selamat Datang di Sistem Poliklinik</h2>
        <p class="mb-6 max-w-lg mx-auto md:mx-0 text-justify">Sistem informasi poliklinik dirancang untuk memudahkan pendaftaran pasien, pengelolaan data medis, jadwal dokter, dan pelayanan kesehatan lainnya secara efisien dan modern.</p>
        <div class="flex justify-center md:justify-start space-x-4">
          <a href="{{ route('login') }}" class="bg-blue-700 text-white px-6 py-3 rounded hover:bg-blue-600 transition">Login</a>
          <a href="{{ route('register') }}" class="bg-gray-200 text-blue-800 px-6 py-3 rounded hover:bg-gray-300 transition">Register</a>
        </div>
      </div>
      <div class="md:w-1/2 mt-10 md:mt-0">
        <img src="https://png.pngtree.com/png-clipart/20240508/original/pngtree-cartoon-anime-nurse-with-pink-hair-png-image_15038675.png" class="w-full max-w-md mx-auto">
      </div>
    </div>
  </section>

  <!-- Layanan Section -->
  <section id="layanan" class="py-20 bg-white">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center md:items-start gap-10">
      <!-- Teks di sebelah kiri -->
      <div class="md:w-1/2 space-y-6 text-gray-700 text-justify">
        <h3 class="text-3xl font-bold mb-4">Layanan</h3>
        <p><strong>Pendaftaran Online:</strong> Pasien dapat mendaftar secara daring untuk kunjungan ke poliklinik tanpa harus mengantri langsung. Sistem ini memungkinkan pasien memilih tanggal dan waktu kunjungan dengan mudah.</p>
        <p><strong>Rekam Medis Digital:</strong> Data riwayat kesehatan pasien disimpan secara elektronik, memudahkan dokter mengakses informasi dengan cepat dan aman.</p>
        <p><strong>Jadwal Dokter Real-Time:</strong> Informasi lengkap mengenai jadwal praktik dokter ditampilkan secara real-time untuk membantu pasien merencanakan kunjungan.</p>
        <p><strong>Konsultasi Langsung:</strong> Layanan konsultasi tersedia untuk dokter spesialis maupun umum, baik secara tatap muka maupun daring (jika tersedia).</p>
      </div>
      <!-- Gambar di sebelah kanan -->
      <div class="md:w-1/2">
        <img src="https://png.pngtree.com/png-clipart/20230817/original/pngtree-2d-vector-illustration-of-planning-a-childs-hospital-stay-in-isolation-vector-picture-image_11003880.png"
        class="rounded shadow-md mx-auto">
      </div>
    </div>
  </section>

  <!-- Kontak Section -->
  <section id="kontak" class="py-20 bg-gray-100">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center md:items-start gap-10">
      <!-- Gambar di kiri -->
      <div class="md:w-1/2">
        <img src="https://png.pngtree.com/png-clipart/20230825/original/pngtree-hospital-medical-billing-service-with-health-insurance-form-for-hospitalization-or-treatment-on-cartoon-background-illustration-picture-image_8656700.png" class="rounded shadow-md mx-auto">
      </div>
      <!-- Kontak di kanan -->
      <div class="md:w-1/2 text-lg text-gray-700 space-y-4">
        <h3 class="text-3xl font-bold mb-4 text-center md:text-left">Kontak Kami</h3>
        <p><strong>Alamat:</strong> Jl. Sehat Sentosa No. 88, Kota Sejahtera, Indonesia</p>
        <p><strong>Telepon:</strong> (021) 1234-5678</p>
        <p><strong>Email:</strong> admin@polikliniksehat.id</p>
        <p><strong>Jam Operasional:</strong><br>Senin - Jumat: 08.00 - 17.00 WIB<br>Sabtu: 08.00 - 13.00 WIB<br>Minggu & Libur Nasional: Tutup</p>
      </div>
    </div>
  </section>

  <!-- Tentang Kami Section -->
  <section id="tentang" class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <h3 class="text-3xl font-bold text-center mb-8">Tentang Kami</h3>
      <div class="max-w-3xl mx-auto text-gray-700 text-justify space-y-6 text-lg">
        <p><strong>Sistem Poliklinik</strong> adalah platform sistem informasi kesehatan yang bertujuan memudahkan proses pelayanan di poliklinik. Kami berkomitmen memberikan pelayanan terbaik dan efisien bagi pasien, tenaga medis, dan pihak administrasi.</p>
        <div>
          <p class="font-semibold">Visi</p>
          <p>Menjadi sistem informasi kesehatan terdepan untuk masyarakat dalam mendapatkan layanan medis secara digital dan efisien.</p>
        </div>
        <div>
          <p class="font-semibold">Misi</p>
          <ul class="list-disc list-inside">
            <li>Menyediakan layanan pendaftaran pasien online yang praktis.</li>
            <li>Mempermudah pengelolaan data medis secara digital.</li>
            <li>Menyediakan informasi layanan dan jadwal dokter secara real-time.</li>
            <li>Meningkatkan efisiensi operasional klinik melalui teknologi informasi.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-800 text-white py-6 text-center">
    <p class="text-base">© 2025 Sistem Poliklinik. All rights reserved.</p>
  </footer>
</body>
</html>
