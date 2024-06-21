<head>
    <link rel="stylesheet" href="../css/daftarkostadmin.css">
        <style>
            /* Add your styles here */
            .button {
                cursor: pointer;
            }
        </style>
        <title>Daftar Kost</title>
      </head>

<body>
<div class="daftar-kost-1">
    <div class="navbar">
      <div class="rectangle-5"></div>
      <div class="infokostjambi">INFOKOSTJAMBI</div>
      <img class="logo-nav" src="../img/Logo.svg">
      <input type="text" placeholder="Cari..." name="cari" class="rectangle-6"></input>
      <input type="Button" placeholder="Cari..." name="cari" value="cari" class="rectangle-7"></input>
      <a href="/admin/dashadmin" class="home">Home</a>
      <a href="/admin/daftarkostadmin" class="daftar-kost">Daftar Kost</a>
      <a href="/admin/tentangkamiadmin" class="tentang-kami">Tentang Kami</a>
      <img id="menu-icon" class="material-symbols-menu" src="../img/menu.png" />
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
    <img class="image-12" src="../img/v61_87.png" />
    <div class="kost-eksklusif-trona-jambi-selatan2">
      Kost Eksklusif Trona Jambi Selatan
    </div>
  </a>
    <div class="kecamatan-jambi-selatan2">Kecamatan Jambi Selatan</div>
    <div class="tipe-kost-campuran2">Tipe : Kost Campuran</div>
    <div class="rp-1-300-000-bulan2">Rp 1.300,000/bulan</div>
    <a href="/admin/detailkostadmin">
    <div class="rectangle-203"></div>
    <img class="image-13" src="../img/v61_87.png" />
    <div class="kost-eksklusif-trona-jambi-selatan3">
      Kost Eksklusif Trona Jambi Selatan
    </div>
  </a>
    <div class="kecamatan-jambi-selatan3">Kecamatan Jambi Selatan</div>
    <div class="tipe-kost-campuran3">Tipe : Kost Campuran</div>
    <div class="rp-1-300-000-bulan3">Rp 1.300,000/bulan</div>
    <a href="/admin/detailkostadmin">
    <div class="rectangle-204"></div>
    <img class="image-14" src="../img/v61_87.png" />
    <div class="kost-eksklusif-trona-jambi-selatan4">
      Kost Eksklusif Trona Jambi Selatan
    </div>
    </a>
    <div class="kecamatan-jambi-selatan4">Kecamatan Jambi Selatan</div>
    <div class="tipe-kost-campuran4">Tipe : Kost Campuran</div>
    <div class="rp-1-300-000-bulan4">Rp 1.300,000/bulan</div>
    <a href="/admin/detailkostadmin">
    <div class="rectangle-205"></div>
    <img class="image-15" src="../img/v61_87.png" />
    <div class="kost-eksklusif-trona-jambi-selatan5">
      Kost Eksklusif Trona Jambi Selatan
    </div>
    </a>
    <div class="kecamatan-jambi-selatan5">Kecamatan Jambi Selatan</div>
    <div class="tipe-kost-campuran5">Tipe : Kost Campuran</div>
    <div class="rp-1-300-000-bulan5">Rp 1.300,000/bulan</div>
    <a href="/admin/detailkostadmin">
    <div class="rectangle-206"></div>
    <img class="image-16" src="../img/v61_87.png" />
    <div class="kost-eksklusif-trona-jambi-selatan6">
      Kost Eksklusif Trona Jambi Selatan
    </div>
    </a>
    <div class="kecamatan-jambi-selatan6">Kecamatan Jambi Selatan</div>
    <div class="tipe-kost-campuran6">Tipe : Kost Campuran</div>
    <div class="rp-1-300-000-bulan6">Rp 1.300,000/bulan</div>
    <a href="/admin/detailkostadmin">
    <div class="rectangle-207"></div>
    <img class="image-17" src="../img/v61_87.png" />
    <div class="kost-eksklusif-trona-jambi-selatan7">
      Kost Eksklusif Trona Jambi Selatan
    </div>
    </a>
    <div class="kecamatan-jambi-selatan7">Kecamatan Jambi Selatan</div>
    <div class="tipe-kost-campuran7">Tipe : Kost Campuran</div>
    <div class="rp-1-300-000-bulan7">Rp 1.300,000/bulan</div>
    <a href="/admin/detailkostadmin">
    <div class="rectangle-208"></div>
    <img class="image-18" src="../img/v61_87.png" />
    <div class="kost-eksklusif-trona-jambi-selatan8">
      Kost Eksklusif Trona Jambi Selatan
    </div>
    </a>
    <div class="kecamatan-jambi-selatan8">Kecamatan Jambi Selatan</div>
    <div class="tipe-kost-campuran8">Tipe : Kost Campuran</div>
    <div class="rp-1-300-000-bulan8">Rp 1.300,000/bulan</div>
  </div>
  </body>