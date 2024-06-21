<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/detailkost.css') }}">
    <style>
        .button {
            cursor: pointer;
        }
    </style>
    <title>Detail Kost</title>
</head>

<body>
    <div class="detail-kost">
        <img class="mdi-location" src="{{ asset('img/peta.png') }}" />
        <div class="navbar">
            <div class="rectangle-5"></div>
            <div class="infokostjambi">INFOKOSTJAMBI</div>
            <img class="logo-nav" src="{{ asset('img/logo.svg') }}" />
            <input type="text" placeholder="cari kost..." name="cari" class="rectangle-6"></input>
            <input type="button" value="cari" name="cari" class="rectangle-7"></input>
            <a href="/user/homepage" class="home">Home</a>
            <a href="/user/daftarkost" class="daftar-kost">Daftar Kost</a>
            <a href="/user/tentangkami" class="tentang-kami">Tentang Kami</a>
            <img id="menu-icon" class="material-symbols-menu" src="{{ asset('img/menu.png') }}" />
        </div>

        <!-- sidebar-->
        <div id="sidebar" class="sidebar">
            <img class="user" src="{{ asset('img/pengguna.png') }}">
            <h3>Username</h3>
            <a href="/login"><img class="logout" src="{{ asset('img/logut.png') }}"></a>
        </div>

        <!-- Javascript untuk membuka dan menutup sidebar -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const menuIcon = document.getElementById('menu-icon');
                const sidebar = document.getElementById('sidebar');

                menuIcon.addEventListener('click', function (event) {
                    event.stopPropagation();
                    sidebar.classList.toggle('open');
                });

                document.addEventListener('click', function (event) {
                    if (!sidebar.contains(event.target) && !menuIcon.contains(event.target)) {
                        sidebar.classList.remove('open');
                    }
                });

                sidebar.addEventListener('click', function (event) {
                    event.stopPropagation();
                });
            });
        </script>

        <div class="footer">
            <div class="rectangle-8"></div>
            <div class="infokostjambi2">INFOKOSTJAMBI</div>
            <img class="logo2" src="logo1.svg" />
        </div>

        <img class="image-1" src="{{ asset('img/' . $data->gambar) }}" />
        <div class="rectangle-31"></div>
        <div class="kost-campur">{{ $data->jenis_kost }}</div>
        <div class="kost-eksklusif-trona-jambi-selatan">
            {{ $data->nama }}
        </div>
        <div class="kecamatan-jambi-selatan-https-maps-app-goo-gl-o-rga-dq-qqknym-1-g-328">
            {{ $data->alamat_kost }}
        </div>
        <div class="telepon-whatsh-app-089675643211">
            Telepon/WhatsApp: {{ $data->telepon }}
        </div>
        <div class="rp-1-300-000-bulan">Rp {{$data->nominal_harga}}</div>
        <div class="spesifikasi-tipe-kamar">Spesifikasi Tipe Kamar:</div>
        <div class="peraturan-di-kost-ini">Peraturan Di Kost ini:</div>
        <div class="fasilitas-kamar">Fasilitas Kamar:</div>
        <div class="_3-x-4-meter-tidak-termasuk-listrik">{{ $data->spesifikasi_tipe_kamar }}</div>
        <div class="akses-24-jam-check-in-pukul-14-00-21-00-sewa-harian-check-out-maks-pukul-12-00-sewa-harian-lawan-jenis-dilarang-ke-kamar-wajib-lampirkan-ktp-saat-check-in-sewa-harian">{{ $data->peraturan }}</div>
        <div class="ketentuan-pengajuan-sewa">Ketentuan Pengajuan Sewa:</div>
        <div class="waktu-mulai-ngekos-terdekat-bisa-di-hari-h-setelah-pengajuan-sewa-waktu-mulai-ngekos-terjauh-2-bulan-setelah-pengajuan-sewa">
            <span>
                <span class="waktu-mulai-ngekos-terdekat-bisa-di-hari-h-setelah-pengajuan-sewa-waktu-mulai-ngekos-terjauh-2-bulan-setelah-pengajuan-sewa-span">
                    Waktu mulai ngekos terdekat:
                    <br />
                </span>
                <span class="waktu-mulai-ngekos-terdekat-bisa-di-hari-h-setelah-pengajuan-sewa-waktu-mulai-ngekos-terjauh-2-bulan-setelah-pengajuan-sewa-span2">
                    Bisa di hari H setelah pengajuan sewa.
                    <br />
                </span>
                <span class="waktu-mulai-ngekos-terdekat-bisa-di-hari-h-setelah-pengajuan-sewa-waktu-mulai-ngekos-terjauh-2-bulan-setelah-pengajuan-sewa-span3">
                    Waktu mulai ngekos terjauh:
                    <br />
                </span>
                <span class="waktu-mulai-ngekos-terdekat-bisa-di-hari-h-setelah-pengajuan-sewa-waktu-mulai-ngekos-terjauh-2-bulan-setelah-pengajuan-sewa-span4">
                    2 bulan setelah pengajuan sewa.
                </span>
            </span>
        </div>
        <div class="ac-meja-lemari-baju-bantal-jendela">{{ $data->fasilitas_kamar }}</div>
        <div class="fasilitas-kamar-mandi">Fasilitas Kamar Mandi:</div>
        <div class="kamar-mandi-dalam-shower-kloset-duduk-bathtub">{{ $data->fasilitas_kamar_mandi }}</div>
        <div class="fasilitas-umum">Fasilitas Umum:</div>
        <div class="wifi-cctv-penjaga-kost">{{ $data->fasilitas_umum }}</div>
        <div class="kasur-tv-cermin-kursi">{{ $data->fasilitas_lain }}</div>
    </div>
</body>

</html>
