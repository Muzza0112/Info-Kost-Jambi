<head>
  <link rel="stylesheet" href="../css/homepage.css">
  <style>
    .button {
      cursor: pointer;
    }
  </style>
  <title>Home Page</title>
</head>

<body>
  <div class="homepage-1">
    <div class="navbar">
      <div class="rectangle-5"></div>
      <div class="infokostjambi">INFOKOSTJAMBI</div>
      <input class="rectangle-6" type="text" placeholder="cari kost..." name="carikost"></input>
      <input type="button" name="cari" value="cari" class="rectangle-7"></input>
      <a class="home" href="/user/homepage">Home</a>
      <a class="daftar-kost" href="/user/daftarkost">Daftar Kost</a>
      <a class="tentang-kami" href="/user/tentangkami">Tentang Kami</a>
      <img id="menu-icon" class="material-symbols-menu" src="../img/menu.png" />
      <img class="logo-nav" src="../img/Logo.svg" />

    </div>
    <img class="pexels-vividcafe-681368-1" src="../img/123.jpg" />
    <div class="info-kost-jambi">INFO KOST JAMBI.</div>
    <div class="selamat-datang-di-website-info-kost-jambi-kami-memberikan-informasi-terkait-kost-kost-yang-ada-di-jambi">
      Selamat datang di website info kost jambi
      <br />
      kami memberikan informasi terkait
      <br />
      kost-kost yang ada di Jambi.
    </div>

    <div id="sidebar" class="sidebar">
      <img class="user" src="../img/pengguna.png">
      <h3>Username</h3>
      <a href="/login"><img class="logout" src="../img/logut.png"></a>
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


    <div class="kost-unggulan">KOST UNGGULAN</div>
    <div class="footer">
      <div class="rectangle-8"></div>
      <div class="infokostjambi2">INFOKOSTJAMBI</div>
      <img class="logo2" src="/img/logo.svg" />
    </div>

    <div class="grid-container">
      @foreach($data as $kost)
      <a href="/user/detailkost/{{ $kost->id }}" class="card">
        <div class="rectangle-20"></div>
        <img class="image-1" src="{{ asset('img/' . $kost->gambar) }}" />
        <div class="kost-eksklusif-trona-jambi-selatan">{{ $kost->nama }}</div>
        <div class="kecamatan-jambi-selatan">{{ $kost->alamat_kost }}</div>
        <div class="tipe-kost-campuran">Tipe : {{ $kost->jenis_kost }}</div>
        <div class="rp-1-300-000-bulan">Rp {{ $kost->nominal_harga }}</div>
      </a>
      @endforeach
    </div>
</body>