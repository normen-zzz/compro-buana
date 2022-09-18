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
                        Tentang Kami
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumbs Akhir -->
<!-- Tentang Kami -->
<section id="tentang">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-primary">TENTANG KAMI</h1>
            </div>
            <div class="col-2">
                <hr style="border-bottom: 2px solid #7c4dff" />
            </div>
        </div>
        <div class="row">

            <!-- <img height="200" style="width: 500px;" src="<?php echo base_url('assets/upload/image/thumbs/' . $tentang->gambar); ?>" alt=""> -->

        </div>
        <div class="row">
            <div class="col">
                <?php
                if ($tentang->jenis_berita == 'Profil') {
                ?>
                    <?= $tentang->isi; ?>
                <?php
                } ?>
            </div>
        </div>
    </div>
</section>
<!-- Tentang Kami Akhir -->