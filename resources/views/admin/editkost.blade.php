<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{ asset('css/editkost.css') }}">
  <style>
    /* Add your styles here */
    .button {
      cursor: pointer;
    }
  </style>
  <title>Edit Kost</title>
</head>

<body>
  <div class="pengelolaan-kost-admin-2">
    <div class="footer">
      <div class="rectangle-8"></div>
      <div class="infokostjambi">INFOKOSTJAMBI</div>
      <img class="logo" src="logo0.svg" />
    </div>
    <form action="/admin/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="submit" value="Simpan" class="rectangle-34">
      <div class="nama-kost">Nama Kost</div>
      <input type="text" name="nama" class="rectangle-37" value="{{ $data->nama }}">

      <div class="info-kost">Info Kost</div>

      <div class="spesifikasi-tipe-kamar">Spesifikasi Tipe Kamar</div>
      <input type="text" name="spesifikasi_tipe_kamar" class="rectangle-42" value="{{ $data->spesifikasi_tipe_kamar }}">

      <div class="fasilitas-kamar">Fasilitas Kamar</div>
      <input type="text" name="fasilitas_kamar" class="rectangle-43" value="{{ $data->fasilitas_kamar }}">

      <div class="ketentuan-pengajuan-sewa">Ketentuan Pengajuan Sewa</div>
      <input type="text" name="ketentuan_pengajuan_sewa" class="rectangle-47" value="{{ $data->ketentuan_pengajuan_sewa }}">

      <div class="jadikan-kost-unggulan">Jadikan Kost Unggulan</div>
      <input type="radio" name="unggulan" value="ya" class="ellipse-1" {{ $data->unggulan == 'ya' ? 'checked' : '' }}>
      <div class="ya">ya</div>
      <input type="radio" name="unggulan" value="tidak" class="ellipse-12" {{ $data->unggulan == 'tidak' ? 'checked' : '' }}>
      <div class="tidak">tidak</div>

      <div class="peraturan-di-kost-ini">Peraturan Di Kost Ini</div>
      <input name="peraturan" type="text" class="rectangle-46" value="{{ $data->peraturan }}">

      <div class="fasilitas-umum">Fasilitas Umum</div>
      <input name="fasilitas_umum" type="text" class="rectangle-45" value="{{ $data->fasilitas_umum }}">

      <div class="fasilitas-kamar-mandi">Fasilitas Kamar Mandi</div>
      <input type="text" name="fasilitas_kamar_mandi" class="rectangle-44" value="{{ $data->fasilitas_kamar_mandi }}">

      <div class="nominal-harga-bulan">Nominal Harga/bulan</div>
      <input type="text" name="nominal_harga" class="rectangle-41" value="{{ $data->nominal_harga }}">

      <div class="telepon-whats-app">Telepon/WhatsApp</div>
      <input type="number" name="telepon" class="rectangle-40" value="{{ $data->telepon }}">

      <div class="alamat-kost">Alamat Kost</div>
      <input type="text" name="alamat_kost" class="rectangle-39" value="{{ $data->alamat_kost }}">

      <div class="jenis-kost">Jenis Kost</div>
      <input name="jenis_kost" type="text" class="rectangle-38" value="{{ $data->jenis_kost }}">

      <div class="gambar">Upload Gambar</div>
      <div class="image-upload">
        <input type="file" name="gambar" class="rectangle-48">
        <img src="{{ asset('img/' . $data->gambar) }}" alt="Gambar Kost" class="kost-image" style="width: 200px;" >
      </div>

    </form>

    <div class="kelola-kost-nav">
      <div class="rectangle-5"></div>
      <div class="infokostjambi2">INFOKOSTJAMBI</div>
      <div class="kelola-kost">EDIT KOST</div>
      <img class="material-symbols-menu" src="/img/pengguna.png" />
    </div>
  </div>
</body>

</html>