<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo $this->website->logo(); ?>" width="100" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item text-center">
                        <a class="nav-link me-5 fw-bold <?php if ($this->uri->segment(1) == NULL) {
                                                        ?> active <?php } ?>" href="<?= base_url() ?>">HOME</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link me-5 fw-bold <?php if ($this->uri->segment(1) == 'Tentang' || $this->uri->segment(1) == 'tentang') {
                                                        ?> active <?php } ?>" href="<?= base_url('Tentang') ?>">TENTANG KAMI</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link me-5 fw-bold <?php if ($this->uri->segment(1) == 'Produk' || $this->uri->segment(1) == 'produk') {
                                                        ?> active <?php } ?>" href="<?= base_url('Produk') ?>">PRODUK</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link me-5 fw-bold <?php if ($this->uri->segment(1) == 'Galeri' || $this->uri->segment(1) == 'galeri') {
                                                        ?> active <?php } ?>" href="<?= base_url('Galeri') ?>">GALERI</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link me-5 fw-bold <?php if ($this->uri->segment(1) == 'Kontak' || $this->uri->segment(1) == 'kontak') {
                                                        ?> active <?php } ?>" href="<?= base_url('Kontak') ?>">KONTAK</a>
                    </li>
                    <!-- <li class="nav-item">
              <form class="input-group" role="search">
                <input
                  class="border border-1 px-3 rounded-3 search"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
                <button class="btn btn-primary px-4" type="submit">
                  Search
                </button>
              </form>
            </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar Akhir -->