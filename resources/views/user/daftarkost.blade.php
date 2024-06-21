<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Kost</title>
  <link rel="stylesheet" href="../css/daftarkost.css">
  <style>
    .button {
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="daftar-kost-1">
    <div class="navbar">
      <div class="rectangle-5"></div>
      <div class="infokostjambi">INFOKOSTJAMBI</div>
      <img class="logo-nav" src="../img/Logo.svg" alt="Logo">
      <input type="text" placeholder="Cari..." name="cari" class="rectangle-6">
      <input type="button" value="Cari" class="rectangle-7">
      <a href="/user/homepage" class="home">Home</a>
      <a href="/user/daftarkost" class="daftar-kost">Daftar Kost</a>
      <a href="/user/tentangkami" class="tentang-kami">Tentang Kami</a>
      <img id="menu-icon" class="material-symbols-menu" src="../img/menu.png" alt="Menu">
    </div>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
      <img class="user" src="../img/pengguna.png" alt="User">
      <h3>Username</h3>
      <a href="/login"><img class="logout" src="../img/logut.png" alt="Logout"></a>
    </div>

    <!-- Javascript untuk membuka dan menutup sidebar -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const menuIcon = document.getElementById('menu-icon');
        const sidebar = document.getElementById('sidebar');

        menuIcon.addEventListener('click', function(event) {
          event.stopPropagation();
          sidebar.classList.toggle('open');
        });

        document.addEventListener('click', function(event) {
          if (!sidebar.contains(event.target) && !menuIcon.contains(event.target)) {
            sidebar.classList.remove('open');
          }
        });

        sidebar.addEventListener('click', function(event) {
          event.stopPropagation();
        });
      });
    </script>

    <!-- Main content -->
    <div class="cards-container">
      @foreach ($data as $kost)
        <a href="/user/detailkost/{{ $kost->id }}" class="card">
          <div class="rectangle-20"></div>
          <img class="image-1" src="{{ asset('img/' . $kost->gambar) }}" alt="Gambar Kost">
          <div class="card-content">
            <div class="kost-eksklusif-trona-jambi-selatan">
              {{ $kost->nama }}
            </div>
            <div class="kecamatan-jambi-selatan">{{ $kost->alamat_kost }}</div>
            <div class="tipe-kost-campuran">Tipe: {{ $kost->jenis_kost }}</div>
            <div class="rp-1-300-000-bulan">{{ $kost->nominal_harga }}</div>
          </div>
        </a>
      @endforeach
    </div>

    <!-- Footer -->
    <div class="footer">
      <div class="rectangle-8"></div>
      <div class="infokostjambi2">INFOKOSTJAMBI</div>
      <img class="logo2" src="/img/logo.svg" alt="Logo">
    </div>
  </div>
</body>

</html>
