<!-- Hero -->
<section id="hero">
  <div class="container-fluid pb-5">
    <div class="row">
      <div class="col px-0">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php $i = 1;
            foreach ($slider as $slider) : ?>
              <div class="carousel-item <?php if ($i == 1) {
                                          echo 'active';
                                        } ?>">
                <img src="<?php echo base_url('assets/upload/image/' . $slider->gambar); ?>" class="d-block w-100" alt="..." />
              </div>
            <?php $i++;
            endforeach; ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark py-5" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark py-5" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero Akhir -->


<!-- New Book -->
<section id="newbook">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <h3 class="text-primary fw-bold">Buku Baru</h3>
        <p class="fw-light text-secondary small">
          List buku baru terkini
        </p>
      </div>
    </div>
    <div class="row pembungkus">
      <?php $noProduk = 1;
      foreach ($produk as $produk) {
        if ($noProduk <= 3) { ?>
          <div class="col-lg-3 py-2">
            <div class="card border-0 shadow-sm">
              <img src="<?php echo base_url('assets/upload/image/thumbs/' . $produk->gambar); ?>" class="card-img-top p-4" alt="..." />
              <div class="card-body">
                <a href="<?= base_url('Produk/detail/' . $produk->slug_berita) ?>" class="text-decoration-none stretched-link small fw-light">
                  <h5 class="fw-bold"><?php echo $produk->judul_berita; ?></h5>
                </a>
                <p class="text-secondary fw-light small">
                  <?php echo character_limiter(strip_tags($produk->isi), 200); ?>
                </p>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
  </div>
</section>
<!-- New Book Akhir -->

<!-- About -->
<section class="py-5" id="about">
  <div class="container pb-5">
    <div class="row">
      <div class="col-lg-6 pt-5">
        <iframe class="w-100" height="315" src="https://www.youtube.com/embed/<?php echo $video->video ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <?php $noprof = 1;
      foreach ($profil as $profil) {
        if ($noprof == 1) { ?>
          <div class="col-lg-6 pt-5">
            <h2 class="fw-bold"><?php echo $profil->judul_berita ?></h2>
            <p class="pt-2">

              <?php echo character_limiter(strip_tags($profil->isi), 700); ?><a href="<?= base_url('Tentang') ?>">Selengkapnya</a>
            </p>
            <!-- <a href="#">Selengkapnya...</a> -->
          </div>
      <?php }
        $noprof++;
      } ?>
    </div>
  </div>
</section>
<!-- About Akhir -->

<!-- Artikel -->
<section id="artikel">
  <div class="container py-5">

    <div class="row">
      <div class="col text-center">
        <h3 class="text-primary">Artikel</h3>
        <p class="fw-light text-secondary small">

        </p>
      </div>
    </div>
    <div class="row">
      <?php $no = 1;
      foreach ($berita as $berita) {
        if ($no <= 3) { ?>
          <div class="col-lg-4 py-2">
            <div class="card">
              <img src="<?php echo base_url('assets/upload/image/thumbs/' . $berita->gambar); ?>" class="card-img-top" style="object-fit: cover" height="300" alt="..." />
              <div class="card-body">
                <p class="fw-light text-secondary small pb-2">
                  <?= date('d F Y', strtotime($berita->tanggal_publish))  ?>
                <h5 class="card-title"><?php echo $berita->judul_berita; ?></h5>
                <p class="card-text pb-2">
                  <?php echo character_limiter(strip_tags($berita->isi), 200); ?>
                </p>
                <div class="d-grid gap-2">
                  <a href="<?= base_url('Berita/read/' . $berita->slug_berita) ?>" class="btn btn-outline-primary">Baca selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
      <?php $no++;
        }
      } ?>
    </div>
    <div class="text-center pt-4">
      <a href="<?= base_url('Berita') ?>" class="text-decoration-none">Selengkapnya...</a>
    </div>
  </div>
</section>
<!-- Artikel Akhir -->