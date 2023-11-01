<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style=" background-color: rgb(238, 191, 238); height: 91.5vh; max-height: 100vh">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin/kamar">Kamar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#more" role="button" aria-expanded="false" aria-controls="collapseExample"> Penyewa > {{-- <div class="btn-toggle" data-bs-toggle="collapse" aria-expanded="false" href="#more"></div> --}} </a>
              <div class="collapse" id="more">
                <ul class=" list-unstyled px-4 small">
                  <li><a href="/admin/penyewa-aktif" class="text-decoration-none link-dark rounded">Penyewa Aktif</a></li>
                  <li><a href="/admin/riwayat-penyewa" class="text-decoration-none link-dark rounded">Riwayat Penyewa</a></li>
                  <li><a href="/admin/tambah-penyewa" class="text-decoration-none link-dark rounded">Tambah Penyewa</a></li>
                </ul>
              </div>
              {{-- <div class="collapse" id="orders-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="link-dark rounded">Penyewa Aktif</a></li>
                  <li><a href="#" class="link-dark rounded">Riwayat Penyewa</a></li>
                  <li><a href="#" class="link-dark rounded">Tambah Penyewa</a></li>
                  <li><a href="#" class="link-dark rounded">Cetak Data Penyewa</a></li>
                </ul>
              </div> --}}
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/laporan">Laporan</a>
        </li>
      </ul>


    </div>
  </nav>
