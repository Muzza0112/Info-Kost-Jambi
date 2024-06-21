<head>
    <link rel="stylesheet" href="../css/detailkostadmin.css">
        <style>
            .button {
                cursor: pointer;
            }
        </style>
        <title>Detail Kost</title>
      </head>

<body>
<div class="detail-kost">
    <img class="mdi-location" src="../img/peta.png" />
    <div class="navbar">
      <div class="rectangle-5"></div>
      <div class="infokostjambi">INFOKOSTJAMBI</div>
      <input type="text" placeholder="cari kost..." name="cari" class="rectangle-6"></input>
      <input type="button" value="cari" name="cari" class="rectangle-7"></input>
      <a href="/admin/dashadmin" class="home">Home</a>
      <a href="/admin/daftarkostadmin" class="daftar-kost">Daftar Kost</a>
      <a href="/admin/tentangkamiadmin" class="tentang-kami">Tentang Kami</a>
      <img id="menu-icon" class="material-symbols-menu" src="../img/menu.png" />
    </div>

            <!-- sidebar-->

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
    <img class="image-1" src="../img/v61_94.png" />
    <div class="rectangle-31"></div>
    <div class="kost-campur">Kost Campur</div>
    <div class="kost-eksklusif-trona-jambi-selatan">
      Kost Eksklusif Trona Jambi
      <br />
      Selatan
    </div>
    <div
      class="kecamatan-jambi-selatan-https-maps-app-goo-gl-o-rga-dq-qqknym-1-g-328"
    >
      Kecamatan Jambi Selatan
      <br />
      https://maps.app.goo.gl/oRgaDqQQKNYM1G328
    </div>
    <div class="telepon-whatsh-app-089675643211">
      Telepon/WhatshApp: 089675643211
    </div>
    <div class="rp-1-300-000-bulan">Rp 1.300.000/bulan</div>
    <div class="spesifikasi-tipe-kamar">Spesifikasi Tipe Kamar:</div>
    <div class="peraturan-di-kost-ini">Peraturan Di Kost ini:</div>
    <div class="fasilitas-kamar">Fasilitas Kamar:</div>
    <div class="_3-x-4-meter-tidak-termasuk-listrik">
      3 x 4 meter
      <br />
      Tidak termasuk listrik
    </div>
    <div
      class="akses-24-jam-check-in-pukul-14-00-21-00-sewa-harian-check-out-maks-pukul-12-00-sewa-harian-lawan-jenis-dilarang-ke-kamar-wajib-lampirkan-ktp-saat-check-in-sewa-harian"
    >
      Akses 24 Jam
      <br />
      Check-in pukul 14:00-21:00 (sewa harian)
      <br />
      Check-out maks. pukul 12:00 (sewa harian)
      <br />
      Lawan jenis dilarang ke kamar
      <br />
      Wajib lampirkan KTP saat check-in (sewa harian)
    </div>
    <div class="ketentuan-pengajuan-sewa">Ketentuan Pengajuan Sewa:</div>
    <div
      class="waktu-mulai-ngekos-terdekat-bisa-di-hari-h-setelah-pengajuan-sewa-waktu-mulai-ngekos-terjauh-2-bulan-setelah-pengajuan-sewa"
    >
      <span>
        <span
          class="waktu-mulai-ngekos-terdekat-bisa-di-hari-h-setelah-pengajuan-sewa-waktu-mulai-ngekos-terjauh-2-bulan-setelah-pengajuan-sewa-span"
        >
          Waktu mulai ngekos terdekat:
          <br />
        </span>
        <span
          class="waktu-mulai-ngekos-terdekat-bisa-di-hari-h-setelah-pengajuan-sewa-waktu-mulai-ngekos-terjauh-2-bulan-setelah-pengajuan-sewa-span2"
        >
          Bisa di hari H setelah pengajuan sewa.
          <br />
        </span>
        <span
          class="waktu-mulai-ngekos-terdekat-bisa-di-hari-h-setelah-pengajuan-sewa-waktu-mulai-ngekos-terjauh-2-bulan-setelah-pengajuan-sewa-span3"
        >
          Waktu mulai ngekos terjauh:
          <br />
        </span>
        <span
          class="waktu-mulai-ngekos-terdekat-bisa-di-hari-h-setelah-pengajuan-sewa-waktu-mulai-ngekos-terjauh-2-bulan-setelah-pengajuan-sewa-span4"
        >
          2 bulan setelah pengajuan sewa.
        </span>
      </span>
    </div>
    <div class="ac-meja-lemari-baju-bantal-jendela">
      AC
      <br />
      Meja
      <br />
      Lemari baju
      <br />
      Bantal
      <br />
      Jendela
    </div>
    <div class="fasilitas-kamar-mandi">Fasilitas Kamar Mandi:</div>
    <div class="kamar-mandi-dalam-shower-kloset-duduk-bathtub">
      Kamar mandi dalam
      <br />
      Shower
      <br />
      Kloset duduk
      <br />
      Bathtub
    </div>
    <div class="fasilitas-umum">Fasilitas Umum:</div>
    <div class="wifi-cctv-penjaga-kost">
      Wifi
      <br />
      CCTV
      <br />
      Penjaga kost
    </div>
    <div class="kasur-tv-cermin-kursi">
      Kasur
      <br />
      TV
      <br />
      Cermin
      <br />
      Kursi
    </div>
  </div>
  </body>