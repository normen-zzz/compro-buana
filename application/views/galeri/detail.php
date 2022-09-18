<?php $category = $this->db->get_where('kategori_galeri', array('id_kategori_galeri' => $this->uri->segment(3)))->row() ?>
<!-- Breadcrumbs -->
<div class="container pt-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item small">
                        <a href="<?= base_url('Home') ?>" class="text-secondary text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item small active text-secondary" aria-current="page">
                        Galeri
                    </li>
                    <li class="breadcrumb-item small active text-primary" aria-current="page">
                        <?= $category->nama_kategori_galeri ?>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Gallery -->
<section id="gallery">
    <div class="container pb-5">
        <div class="shadow row mb-4">
            <h2 style="text-align: center;"><?= $category->nama_kategori_galeri ?></h2>
        </div>
        <div class="shadow row">
            <?php foreach ($galeri as $galeri) { ?>
                <div class="col-lg-4 py-3">
                    <div class="card">
                        <img height="300" src="<?php echo base_url('assets/upload/image/thumbs/' . $galeri->gambar) ?>" class="card-img w-100" />
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!-- Gallery Akhir -->