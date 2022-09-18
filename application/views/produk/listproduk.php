<!-- Breadcrumbs -->
<div class="container pt-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item small">
                        <a href="<?= base_url('Home') ?>" class="text-secondary text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item small active text-primary" aria-current="page">
                        Produk
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- produk -->
<section id="newbook">
    <div class="container py-5">
        <div class="row bg-primary2 my-2 rounded-1 p-3">
            <div class="col-lg py-2 search-top">
                <form class="input-group" role="search">
                    <input class="border border-1 px-3" style="border-radius: 7px 0 0 7px" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
            <!-- <div class="col-lg py-2 search-top text-end">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Urutkan menurut terbaru
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Urutkan menurut terbaru</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Urutkan menurut populer</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Urutkan menurut termurah</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Urutkan menurut termahal</a>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-lg-2">
                <div class="row nav nav-pills mb-5 bg-primary2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="col-12 nav-link rounded-0 shadow-sm active" id="v-pills-all-tab" data-bs-toggle="pill" data-bs-target="#v-pills-all" type="button" role="tab" aria-controls="v-pills-all" aria-selected="true">
                        Semua
                    </button>
                    <?php foreach ($produk as $produk) {
                        if ($produk->jenis_berita == 'Produk') {
                            $kategori = $this->db->get_where('kategori', array('id_kategori' => $produk->id_kategori))->row() ?>
                            <button class="col-12 nav-link rounded-0 shadow-sm" id="v-pills-<?= strtolower($kategori->nama_kategori) ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?= strtolower($kategori->nama_kategori) ?>" type="button" role="tab" aria-controls="v-pills-<?= strtolower($kategori->nama_kategori) ?>" aria-selected="false">
                                <?= $kategori->nama_kategori ?>
                            </button>
                    <?php }
                    } ?>

                </div>
            </div>
            <div class="col-lg-10">
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- Semua Produk -->
                    <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab" tabindex="0">
                        <div class="row pembungkus">
                            <?php foreach ($produkall as $produk) {
                                if ($produk->jenis_berita == 'Produk') { ?>
                                    <div class="col-lg-3 py-2">
                                        <div class="card border-0 shadow-sm">
                                            <img src="<?php echo base_url('assets/upload/image/thumbs/' . $produk->gambar); ?>" class="card-img-top p-4" alt="..." />
                                            <div class="card-body">
                                                <a href="<?= base_url('Produk/detail/' . $produk->slug_berita) ?>" class="text-decoration-none stretched-link small fw-light">
                                                    <h5 class="fw-bold"><?= $produk->judul_berita ?></h5>
                                                </a>
                                                <p class="text-secondary fw-light small">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Dignissimos, assumenda!...
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <!-- Kategori ke 2  -->
                    <?php
                    foreach ($kategoriProduk->result() as $kategoriProduk) {
                        $kategori = $this->db->get_where('kategori', array('id_kategori' => $kategoriProduk->id_kategori))->row();
                        $produkByCategory = $this->db->get_where('berita', array('id_kategori' => $kategoriProduk->id_kategori))->result(); ?>

                        <div class="tab-pane fade" id="v-pills-<?= strtolower($kategori->nama_kategori) ?>" role="tabpanel" aria-labelledby="v-pills-<?= strtolower($kategori->nama_kategori) ?>-tab" tabindex="0">
                            <div class="row pembungkus">
                                <?php foreach ($produkByCategory as $produkByCategory) { ?>
                                    <div class="col-lg-3 py-2">
                                        <div class="card border-0 shadow-sm">
                                            <img src="<?php echo base_url('assets/upload/image/thumbs/' . $produkByCategory->gambar); ?>" class="card-img-top p-4" alt="..." />
                                            <div class="card-body">
                                                <a href="#" class="text-decoration-none stretched-link small fw-light">
                                                    <h5 class="fw-bold"><?= $produkByCategory->judul_berita ?></h5>
                                                </a>
                                                <p class="text-secondary fw-light small">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Dignissimos, assumenda!...
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>


                            </div>
                        </div>
                    <?php } ?>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- produk Akhir -->