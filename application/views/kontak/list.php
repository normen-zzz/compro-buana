<!-- kontak -->
<section class="py-5">
    <div class="container bg-white shadow">
        <div class="row">
            <div class="col-lg-6 p-4">
                <div class="col-12 text-center pb-5">
                    <h3>Kontak Kami</h3>
                </div>
                <form action="<?= base_url('Email/pesan') ?>" method="post">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" placeholder="Masukan email anda" class="form-control" id="floatingTextarea1" />
                        <label for="floatingTextarea1">Masukan email anda</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="nama" placeholder="Masukan nama anda" class="form-control" id="floatingTextarea1" />
                        <label for="floatingTextarea1">Masukan nama anda</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea name="pesan" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Pesan</label>
                    </div>
                    <button type="submit" class="btn btn-primary px-5">Kirim</button>
                </form>
            </div>
            <div class="col-lg-6 px-0">
                <?php echo $site->google_map; ?>
            </div>
        </div>
    </div>
</section>
<!-- kontak Akhir -->