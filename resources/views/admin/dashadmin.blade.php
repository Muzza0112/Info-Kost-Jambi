<head>
    <link rel="stylesheet" href="../css/dashadmin.css">
        <style>
            .button {
                cursor: pointer;
            }
        </style>
        <title>Home Page Admin</title>
      </head>

<body>
<div class="homepage-1">
    <div class="navbar">
      <div class="rectangle-5"></div>
      <div class="infokostjambi">INFOKOSTJAMBI</div>
      <img class="logo-nav" src="../img/Logo.svg" />
      <input class="rectangle-6" type="text" placeholder="cari kost..." name="carikost"></input>
      <input type="button" name="cari" value="cari" class="rectangle-7"></input>
      <a class="home" href="/admin/dashadmin">Home</a>
      <a class="daftar-kost" href="/admin/daftarkostadmin">Daftar Kost</a>
      <a class="tentang-kami" href="/admin/tentangkamiadmin">Tentang Kami</a>
    <img id="menu-icon" class="material-symbols-menu" src="../img/menu.png" />

    </div>
    <img class="pexels-vividcafe-681368-1" src="../img/123.jpg" />
    <div class="info-kost-jambi">INFO KOST JAMBI.</div>
    <div
      class="selamat-datang-di-website-info-kost-jambi-kami-memberikan-informasi-terkait-kost-kost-yang-ada-di-jambi"
    >
      Selamat datang di website info kost jambi
      <br />
      kami memberikan informasi terkait
      <br />
      kost-kost yang ada di Jambi.
    </div>
            
    <div id="sidebar" class="sidebar">
      <img class = "user" src="../img/pengguna.png">
      <h3>Username</h3>
      <a href="/admin/pengelolakost" class="menu-kost">Kelola Kost</a>
      <a href="/login"><img class = "logout" src="../img/logut.png"></a>
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
      <img class="logo2" src="logo1.svg" />
    </div>
    <a href="/admin/detailkostadmin">
    <div class="rectangle-20"></div>
    <img class="image-1" src="../img/v61_87.png" />
    <div class="kost-eksklusif-trona-jambi-selatan">
      Kost Eksklusif Trona Jambi Selatan
    </div>
  </a>
    <div class="kecamatan-jambi-selatan">Kecamatan Jambi Selatan</div>
    <div class="tipe-kost-campuran">Tipe : Kost Campuran</div>
    <div class="rp-1-300-000-bulan">Rp 1.300,000/bulan</div>
    <a href="/admin/detailkostadmin">
    <div class="rectangle-202"></div>
    <img class="image-12" src="../img/v61_94.png" />
    <div class="kost-eksklusif-trona-jambi-selatan2">
      Kost Eksklusif Trona Jambi Selatan
    </div>
  </a>
    <div class="kecamatan-jambi-selatan2">Kecamatan Jambi Selatan</div>
    <div class="tipe-kost-campuran2">Tipe : Kost Campuran</div>
    <div class="rp-1-300-000-bulan2">Rp 1.300,000/bulan</div>
    <a href="/admin/detailkostadmin">
    <div class="rectangle-203"></div>
    <img class="image-13" src="../img/v61_101.png" />
    <div class="kost-eksklusif-trona-jambi-selatan3">
      Kost Eksklusif Trona Jambi Selatan
    </div>
    </a>
    <div class="kecamatan-jambi-selatan3">Kecamatan Jambi Selatan</div>
    <div class="tipe-kost-campuran3">Tipe : Kost Campuran</div>
    <div class="rp-1-300-000-bulan3">Rp 1.300,000/bulan</div>
    <a href="/admin/detailkostadmin">
    <div class="rectangle-204"></div>
    <img class="image-14" src="../img/v61_108.png" />
    <div class="kost-eksklusif-trona-jambi-selatan4">
      Kost Eksklusif Trona Jambi Selatan
    </div>
    </a>
    <div class="kecamatan-jambi-selatan4">Kecamatan Jambi Selatan</div>
    <div class="tipe-kost-campuran4">Tipe : Kost Campuran</div>
    <div class="rp-1-300-000-bulan4">Rp 1.300,000/bulan</div>
  </div>
  </body>