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
                        <a href="<?= base_url('Produk') ?>" class="text-primary text-decoration-none">Produk</a>
                    </li>
                    <li class="breadcrumb-item small active text-primary" aria-current="page">
                        <?= $produk->judul_berita ?>
                    </li>

                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Detail Produk -->
<section>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm py-5">
                    <div class="row ml-4">
                        <div class="col-md-6">
                            <img src="<?php echo base_url('assets/upload/image/thumbs/' . $produk->gambar) ?>" class="img-fluid py-4" style="margin-left: 10px ;" alt="" />
                        </div>
                        <div class="col-md-6">
                            <div class="px-4">
                                <div class="mt-4 mb-3">
                                    <h4 class="text-uppercase"><?= $produk->judul_berita ?></h4>
                                </div>
                                <p>
                                    Dapat di pesan di:
                                    <a target="_blank" href="<?= $produk->link ?>" class="btn btn-primary"><img width="100" src="https://static-siplah.blibli.com/static/img/logo-text-siplah-blibli-white.e18af03.png" width="20" alt="" /></a>
                                </p>
                            </div>
                            <div class="px-4">
                                <div class="row">
                                    <div class="col-lg px-2">

                                        <h4>Detail:</h4>
                                        <p>
                                            <?= $produk->isi ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Detail Produk Akhir -->