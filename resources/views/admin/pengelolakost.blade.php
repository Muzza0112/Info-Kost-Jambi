<head>
  <link rel="stylesheet" href="../css/pengelolakost.css">
  <style>
    .submit {
      cursor: pointer;
    }
  </style>
  <title>Kelola Kost</title>
</head>

<body>
  <div class="pengelolaan-kost-admin">
    <div class="footer">
      <div class="rectangle-8"></div>
      <div class="infokostjambi">INFOKOSTJAMBI</div>
      <img class="logo" src="logo0.svg" />
    </div>
    <div class="kelola-kost-nav">
      <div class="rectangle-5"></div>
      <div class="infokostjambi2">INFOKOSTJAMBI</div>
      <div class="kelola-kost">KELOLA KOST</div>
      <img class="material-symbols-menu" src="../img/pengguna.png" />
    </div>
    <a href="/admin/tambahkost" class="rectangle-34 tambah-kost-btn"></a>
    <div class="tambah-kost">Tambah Kost</div>
    <div class="rectangle-35"></div>
    <div class="kost-item">
      <div class="no">No.</div>
      <div class="nama-kost">Nama Kost</div>
      <div class="kelola">Kelola</div>
    </div>
    <div class="kost-list">
      @foreach ($data as $index => $row)
      <div class="kost-row">
        <div class="kost-id">{{ $index + 1 }}</div>
        <div class="kost-name">{{ $row->nama }}</div>
        <div class="kost-actions-container">
          <form action="/admin/editkost/{{ $row->id }}" method="GET" class="kost-actions">
            @csrf
            <input type="hidden" name="id" value="{{ $row->id }}">
            <button type="submit" name="action" value="edit" class="rectangle-36">Edit</button>
          </form>
          <form action="/delete/{{ $row->id }}" class="kost-actions">
            @csrf
            <input type="hidden" name="id" value="{{ $row->id }}">
            <button type="submit" name="action" value="hapus" class="rectangle-362">Delete</button>
          </form>
        </div>

      </div>
      <div class="line-1"></div>
      @endforeach
    </div>
  </div>
</body>