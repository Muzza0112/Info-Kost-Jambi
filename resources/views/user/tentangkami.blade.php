    <head>
        <link rel="stylesheet" href="../css/tentangkami.css">
        <style>
            .button {
                cursor: pointer;
            }
        </style>
        <title>Tentang Kami</title>
      </head>

<body>
<div class="tentang-kami">
<div class="rectangle-48"></div>
    <div
      class="website-info-kost-jambi-kami-memberikan-informasi-lengkap-terkait-kost-kost-yang-ada-di-jambi"
    >
      website info kost jambi kami memberikan informasi lengkap terkait kost-kost
      yang ada di Jambi.
    </div>
    <div class="navbar">
      <div class="rectangle-5"></div>
      <div class="infokostjambi">INFOKOSTJAMBI</div>
      <img class="logo-nav" src="../img/Logo.svg" />
      <input type="text" placeholder="cari kost.." name="cari" class="rectangle-6"></input>
      <input type="button" value="cari" name="cari" class="rectangle-7"></input>
      <a href="/user/homepage" class="home">Home</a>
      <a href="/user/daftarkost" class="daftar-kost">Daftar Kost</a>
      <a href="/user/tentangkami" class="tentang-kami2">Tentang Kami</a>
      <img id="menu-icon" class="material-symbols-menu" src="../img/menu.png" />
    </div>

          <!-- sidebar -->
          <div id="sidebar" class="sidebar">
      <img class = "user" src="../img/pengguna.png">
      <h3>Username</h3>
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

    <img class="logo" src="/img/logo.svg" />
    <div class="footer">
      <div class="rectangle-8"></div>
      <div class="infokostjambi2">INFOKOSTJAMBI</div>
    </div>
    <div class="tentang-kami3">Tentang Kami</div>
    <div class="visi-kami">Visi Kami</div>
    <div class="info-kost-jambi">INFO KOST JAMBI</div>
    <div class="butuh-konsultasi-silahkan-kontak-kami-kami-siap-membantu">
      Butuh Konsultasi..?
      <br />
      Silahkan kontak kami
      <br />
      Kami siap membantu
    </div>
    <div class="misi-kami">Misi Kami</div>
    <div
      class="menjadi-sumber-informasi-terpercaya-dan-terdepan-dalam-menyediakan-data-kost-yang-lengkap-dan-akurat-di-wilayah-jambi"
    >
      Menjadi sumber informasi terpercaya dan terdepan dalam menyediakan data kost
      yang lengkap dan akurat di wilayah Jambi.
    </div>
    <div
      class="info-kost-jambi-adalah-situs-web-yang-menyajikan-informasi-lengkap-tentang-berbagai-pilihan-tempat-kost-di-jambi-dengan-fitur-pencarian-yang-canggih-pengguna-dapat-memfilter-pilihan-kost-berdasarkan-lokasi-harga-fasilitas-dan-jenis-kost-sesuai-preferensi-pribadi-mereka-setiap-listing-kost-dilengkapi-dengan-foto-foto-jelas-deskripsi-detail-dan-kontak-pemilik-kost-memudahkan-pengguna-untuk-membuat-keputusan-yang-tepat-foto-foto-memberikan-gambaran-nyata-tentang-kondisi-kost-sementara-deskripsi-menyajikan-informasi-penting-seperti-ukuran-kamar-kebijakan-pembayaran-peraturan-kost-dan-fasilitas-tambahan-dengan-adanya-kontak-pemilik-kost-pengguna-dapat-dengan-mudah-menghubungi-mereka-untuk-pertanyaan-lebih-lanjut-atau-kunjungan-langsung"
    >
      <span>
        <span
          class="info-kost-jambi-adalah-situs-web-yang-menyajikan-informasi-lengkap-tentang-berbagai-pilihan-tempat-kost-di-jambi-dengan-fitur-pencarian-yang-canggih-pengguna-dapat-memfilter-pilihan-kost-berdasarkan-lokasi-harga-fasilitas-dan-jenis-kost-sesuai-preferensi-pribadi-mereka-setiap-listing-kost-dilengkapi-dengan-foto-foto-jelas-deskripsi-detail-dan-kontak-pemilik-kost-memudahkan-pengguna-untuk-membuat-keputusan-yang-tepat-foto-foto-memberikan-gambaran-nyata-tentang-kondisi-kost-sementara-deskripsi-menyajikan-informasi-penting-seperti-ukuran-kamar-kebijakan-pembayaran-peraturan-kost-dan-fasilitas-tambahan-dengan-adanya-kontak-pemilik-kost-pengguna-dapat-dengan-mudah-menghubungi-mereka-untuk-pertanyaan-lebih-lanjut-atau-kunjungan-langsung-span"
        >
          Info Kost Jambi
        </span>
        <span
          class="info-kost-jambi-adalah-situs-web-yang-menyajikan-informasi-lengkap-tentang-berbagai-pilihan-tempat-kost-di-jambi-dengan-fitur-pencarian-yang-canggih-pengguna-dapat-memfilter-pilihan-kost-berdasarkan-lokasi-harga-fasilitas-dan-jenis-kost-sesuai-preferensi-pribadi-mereka-setiap-listing-kost-dilengkapi-dengan-foto-foto-jelas-deskripsi-detail-dan-kontak-pemilik-kost-memudahkan-pengguna-untuk-membuat-keputusan-yang-tepat-foto-foto-memberikan-gambaran-nyata-tentang-kondisi-kost-sementara-deskripsi-menyajikan-informasi-penting-seperti-ukuran-kamar-kebijakan-pembayaran-peraturan-kost-dan-fasilitas-tambahan-dengan-adanya-kontak-pemilik-kost-pengguna-dapat-dengan-mudah-menghubungi-mereka-untuk-pertanyaan-lebih-lanjut-atau-kunjungan-langsung-span2"
        >
          adalah situs web yang menyajikan informasi lengkap tentang berbagai
          pilihan tempat kost di Jambi. Dengan fitur pencarian yang canggih,
          pengguna dapat memfilter pilihan kost berdasarkan lokasi, harga,
          fasilitas, dan jenis kost sesuai preferensi pribadi mereka.
          <br />
          <br />
          Setiap listing kost dilengkapi dengan foto-foto jelas, deskripsi detail,
          dan kontak pemilik kost, memudahkan pengguna untuk membuat keputusan
          yang tepat. Foto-foto memberikan gambaran nyata tentang kondisi kost,
          sementara deskripsi menyajikan informasi penting seperti ukuran kamar,
          kebijakan pembayaran, peraturan kost, dan fasilitas tambahan. Dengan
          adanya kontak pemilik kost, pengguna dapat dengan mudah menghubungi
          mereka untuk pertanyaan lebih lanjut atau kunjungan langsung.
        </span>
      </span>
    </div>
    <div
      class="menyediakan-informasi-kost-yang-akurat-dan-terbaru-memberikan-pengalaman-pencarian-yang-mudah-dan-efisien-mendukung-pemilik-kost-dalam-memasarkan-properti-mereka"
    >
      Menyediakan informasi kost yang akurat dan terbaru.
      <br />
      Memberikan pengalaman pencarian yang mudah dan efisien.
      <br />
      Mendukung pemilik kost dalam memasarkan properti mereka.
    </div>
    <div class="kontak">Kontak</div>
    <div
      class="perumahan-mendalo-asri-kecamatan-jambi-luar-kota-kota-kabupaten-muaro-jambi"
    >
      Perumahan Mendalo Asri , kecamatan Jambi luar kota,Kota,
      <br />
      kabupaten Muaro Jambi
    </div>
    <div class="_0812-7357-4983">0812-7357-4983</div>
    <div class="infokostjambi-gmail-com">infokostjambi@gmail.com</div>
    <img class="vector" src="vector0.svg" />
    <img class="group" src="group0.svg" />
    <img class="vector2" src="vector1.svg" />
    <div class="rectangle-57"></div>
    <div class="group-14">
      <form class="group-13">
        <input type="text" placeholder="Masukan email anda disini..." name="email" class="rectangle-58"></input>
        <input type="text" placeholder="Pertanyaan Anda.." name="pertanyaan" class="rectangle-59"></input>
        <input type="button" value="kirim" name="kirim" class="rectangle-60"></input>
        <div class="ada-pertanyaan">ada pertanyaan..?</div>
      </form>
    </div>
  </div>
  </body>