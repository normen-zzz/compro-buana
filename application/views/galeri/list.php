<?php $CI = &get_instance();
$CI->load->model('Galeri_model'); ?>
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
                        Galeri
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Gallery -->
<section id="gallery">
    <div class="container pb-5">
        <?php foreach ($tahun as $tahun) {
            $category = $CI->Galeri_model->showCategoryGaleryByYear($tahun->year);
        ?>
            <h3 class="pt-5"><?= $tahun->year; ?></h3>
            <div class="shadow row">
                <?php foreach ($category as $category) { ?>
                    <div class="col-lg-4 py-3">
                        <div class="card">
                            <img height="300" src="<?php echo base_url('assets/upload/image/thumbs/' . $category->gambar) ?>" class="card-img w-100" />
                            <div class="card-img-overlay">
                                <a href="<?= base_url('Galeri/detail/' . $category->id_kategori_galeri) ?>" class="text-decoration-none stretched-link small fw-light">
                                    <h5 class="fw-bold text-white"><?php echo $category->nama_kategori_galeri; ?></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

    </div>
</section>
<!-- Gallery Akhir -->