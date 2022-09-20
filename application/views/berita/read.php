<!-- Breadcrumbs -->
<div class="container pt-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item small">
                        <a href="<?= base_url() ?>" class="text-secondary text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item small">
                        <a href="<?= base_url('Berita') ?>" class="text-secondary text-decoration-none">Artikel</a>
                    </li>
                    <li class="breadcrumb-item small active text-primary" aria-current="page">
                        <?= $berita->judul_berita ?>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumbs Akhir -->

<!-- Detail Artikel -->
<section>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 text-center">
                <h5 class="pb-4">
                    <?= $berita->judul_berita ?>
                </h5>
                <img src="<?php echo base_url('assets/upload/image/thumbs/' . $berita->gambar); ?>" class="img-fluid w-100" alt="" />
            </div>
        </div>
        <div class="row pt-5">
            <div class="col">
                <p class="text-secondary fw-light small">
                    <?= date('d M Y', strtotime($berita->tanggal_publish))  ?> | <?= $berita->nama ?>
                </p>
                <p>
                    <?= $berita->isi ?>
                </p>
                <div class="d-flex pt-5">
                    <p class="pe-3">Share this article:</p>
                    <a href="http://www.facebook.com/sharer.php?u=<?= base_url('Berita/read/' . $berita->slug_berita) ?>" target="_blank" class="text-decoration-none me-4">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://twitter.com/share?url=<?= base_url('Berita/read/' . $berita->slug_berita) ?>&text=Simple%20Share%20Buttons&hashtags=simplesharebuttons" target="_blank" class="text-decoration-none me-4">
                        <i class="bi bi-twitter"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Detail Artikel Akhir -->