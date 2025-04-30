<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vex Klinik</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }

    .gradient-bg {
      background: linear-gradient(135deg, #1e3a8a, #2563eb); /* Warna biru lebih gelap */
    }

    .btn-primary {
      background: linear-gradient(135deg, #1e3a8a, #2563eb); /* Warna biru lebih gelap */
      color: white;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .btn-secondary {
      background: #f4f4f4;
      color: #2563eb;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-secondary:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: bold;
      color: #2563eb; /* Warna biru lebih gelap */
    }

    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-800 text-[18px] leading-relaxed">
  <!-- Header -->
  <header class="gradient-bg text-white py-5 shadow-md">
    <div class="container mx-auto flex justify-between items-center px-6">
      <h1 class="text-3xl font-bold flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 8v4l3 3m-3-3H9m-6 5a9 9 0 1118 0H3z" />
        </svg>
        <span>Vex Klinik</span>
      </h1>
      <nav class="space-x-6 text-lg">
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
        <h2 class="text-5xl font-bold mb-6 text-gray-800">Selamat Datang di Vex Klinik</h2>
        <p class="mb-6 max-w-lg mx-auto md:mx-0 text-justify text-gray-600">Sistem informasi poliklinik dirancang untuk
          memudahkan pendaftaran pasien, pengelolaan data medis, jadwal dokter, dan pelayanan kesehatan lainnya secara
          efisien dan modern.</p>
        <div class="flex justify-center md:justify-start space-x-4">
          <a href="{{ route('login') }}" class="btn-primary px-6 py-3 rounded-lg">Login</a>
          <a href="{{ route('register') }}" class="btn-secondary px-6 py-3 rounded-lg">Register</a>
        </div>
      </div>
      <div class="md:w-1/2 mt-10 md:mt-0">
        <img src="https://png.pngtree.com/png-clipart/20240508/original/pngtree-cartoon-anime-nurse-with-pink-hair-png-image_15038675.png"
          class="w-full max-w-md mx-auto">
      </div>
    </div>
  </section>

  <!-- Layanan Section -->
  <section id="layanan" class="py-20 bg-gray-100">
    <div class="container mx-auto px-6">
      <h3 class="section-title text-center mb-10">Layanan Kami</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="card bg-white p-6 rounded-lg shadow-md">
          <h4 class="text-xl font-bold mb-4 text-gray-800">Pendaftaran Online</h4>
          <p class="text-gray-600">Pasien dapat mendaftar secara daring untuk kunjungan ke poliklinik tanpa harus
            mengantri langsung.</p>
        </div>
        <div class="card bg-white p-6 rounded-lg shadow-md">
          <h4 class="text-xl font-bold mb-4 text-gray-800">Rekam Medis Digital</h4>
          <p class="text-gray-600">Data riwayat kesehatan pasien disimpan secara elektronik, memudahkan dokter mengakses
            informasi dengan cepat.</p>
        </div>
        <div class="card bg-white p-6 rounded-lg shadow-md">
          <h4 class="text-xl font-bold mb-4 text-gray-800">Jadwal Dokter Real-Time</h4>
          <p class="text-gray-600">Informasi lengkap mengenai jadwal praktik dokter ditampilkan secara real-time.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tentang Kami Section -->
  <section id="tentang" class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <h3 class="section-title text-center mb-10">Tentang Kami</h3>
      <div class="flex flex-col md:flex-row items-center md:items-start gap-10">
        <div class="md:w-1/2">
          <img src="https://png.pngtree.com/png-clipart/20230825/original/pngtree-hospital-medical-billing-service-with-health-insurance-form-for-hospitalization-or-treatment-on-cartoon-background-illustration-picture-image_8656700.png"
            class="rounded shadow-md mx-auto">
        </div>
        <div class="md:w-1/2 text-lg text-gray-700 space-y-4">
          <p>Vex Klinik adalah platform digital yang dirancang untuk mempermudah pengelolaan layanan kesehatan.
            Kami berkomitmen untuk memberikan solusi terbaik bagi pasien, dokter, dan tenaga medis lainnya.</p>
          <p>Dengan teknologi modern, kami menyediakan layanan pendaftaran online, rekam medis digital, dan informasi
            jadwal dokter secara real-time. Visi kami adalah menciptakan pengalaman kesehatan yang lebih baik dan
            efisien.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Kontak Section -->
  <section id="kontak" class="py-20 bg-gray-100">
    <div class="container mx-auto px-6">
      <h3 class="section-title text-center mb-10">Kontak Kami</h3>
      <div class="flex flex-col md:flex-row items-center md:items-start gap-10">
        <div class="md:w-1/2">
          <img src="https://standar-otskk.pom.go.id/assets/frontend/img/kontak.png"
            class="rounded shadow-md mx-auto">
        </div>
        <div class="md:w-1/2 text-lg text-gray-700 space-y-4">
          <p><strong>Alamat:</strong> Jl. Sehat Sentosa No. 88, Kota Sejahtera, Indonesia</p>
          <p><strong>Telepon:</strong> (021) 1234-5678</p>
          <p><strong>Email:</strong> admin@polikliniksehat.id</p>
          <p><strong>Jam Operasional:</strong><br>Senin - Jumat: 08.00 - 17.00 WIB<br>Sabtu: 08.00 - 13.00 WIB<br>Minggu
            & Libur Nasional: Tutup</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="gradient-bg text-white py-6 text-center">
    <p class="text-base">© 2025 Vex Klinik. All rights reserved.</p>
  </footer>
</body>

</html>