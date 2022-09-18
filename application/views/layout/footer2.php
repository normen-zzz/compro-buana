<?php
$site           = $this->konfigurasi_model->listing();
$nav_profil     = $this->nav_model->nav_profil();
?>
<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
    <div class="container-fluid">
        <div class="row justify-content-between p-5 bg-white shadow">
            <div class="col-lg-5 text-dark fw-bold">
                <h3>
                    Dapatkan informasi terbaru dari kami seputar promo spesial dan
                    event yang akan datang
                </h3>
            </div>
            <div class="col-lg-6 align-self-center">
                <form action="<?= base_url('Email/subscribe') ?>" method="post">
                    <div class="input-group">

                        <input required type="email" class="form-control" name="email" />
                        <button type="submit" class="btn btn-primary">Subscribe</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">CV Galang Media Buana</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p class="fw-light small">
                        <?php echo nl2br($site->alamat) ?>
                    </p>
                    <div>
                        <a href="<?php echo $site->facebook ?>" class="text-white text-decoration-none me-4">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="<?php echo $site->twitter ?>" class="text-white text-decoration-none me-4">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="text-white text-decoration-none me-4">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="<?php echo $site->instagram ?>" class="text-white text-decoration-none me-4">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">Navigation</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        <a href="<?= base_url() ?>" class="text-light small fw-light">Home</a>
                    </p>
                    <p>
                        <a href="#!" class="text-light small fw-light">Tentang Kami</a>
                    </p>
                    <p>
                        <a href="#!" class="text-light small fw-light">Produk</a>
                    </p>
                    <p>
                        <a href="#!" class="text-light small fw-light">Kontak Kami</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold">Kontak</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p class="fw-light small">
                        <i class="fas fa-envelope mr-3"></i> <?php echo $site->email ?>
                    </p>
                    <p class="fw-light small">
                        <a href="https://wa.me/<?php echo str_replace('+', '', $site->hp) ?>"><i class="fas fa-phone mr-3"></i> +62 234 567 88</a>
                    </p>
                    <p class="fw-light small">
                        <i class="fas fa-print mr-3"></i> +62 234 567 89
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © <?php echo date('Y') ?> Copyright:
        <a class="text-white" href="https://mdbootstrap.com/"><?php echo $site->namaweb ?></a>
    </div>
</footer>
<!-- Footer Akhir -->
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>