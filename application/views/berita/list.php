 <!-- Breadcrumbs -->
 <div class="container pt-5">
     <div class="row">
         <div class="col">
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item small">
                         <a href="<?= base_url() ?>" class="text-secondary text-decoration-none">Home</a>
                     </li>
                     <li class="breadcrumb-item small active text-primary" aria-current="page">
                         Artikel
                     </li>
                 </ol>
             </nav>
         </div>
     </div>
 </div>
 <!-- Breadcrumbs Akhir -->

 <!-- Artikel -->
 <section id="artikel">
     <div class="container py-5">
         <div class="row">
             <div class="col text-center">
                 <h3 class="text-primary">Artikel</h3>
                 <p class="fw-light text-secondary small">
                     Berisi Tentang artikel terkait dengan CV. Galang Media Buana
                 </p>
             </div>
         </div>
         <div class="row">


             <?php foreach ($berita as $berita) { ?>
                 <div class="col-lg-4 py-2">
                     <div class="card">
                         <img src="<?php echo base_url('assets/upload/image/thumbs/' . $berita->gambar); ?>" class="card-img-top" style="object-fit: cover" height="300" alt="..." />
                         <div class="card-body">
                             <p class="fw-light text-secondary small pb-2">
                                 <?= date('d M Y H:i:s', strtotime($berita->tanggal_publish))  ?>
                             </p>
                             <h5 class="card-title"><?= $berita->judul_berita ?></h5>
                             <p class="card-text pb-2">
                                 <?php echo character_limiter(strip_tags($berita->isi), 200); ?>
                             </p>
                             <div class="d-grid gap-2">
                                 <a href="<?= base_url('Berita/read/' . $berita->slug_berita) ?>" class="btn btn-outline-primary">Baca selengkapnya</a>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>
     </div>
 </section>
 <!-- Artikel Akhir -->