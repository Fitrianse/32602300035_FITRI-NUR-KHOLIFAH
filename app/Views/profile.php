<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <!-- KIRI: Profil -->
        <div class="col-md-4 text-center mb-4">
            <img src="<?= base_url('image/fitri.jpg') ?>" alt="Foto Profil" class="rounded-circle mb-3" width="165" height="165">
            <p class="fw-bold mb-1">Nama: Fitri Nur Kholifah</p>
            <p class="fw-bold mb-1">NIM: 32602300035</p>
            <p class="fw-bold mb-3">Mahasiswa Teknik Informatika</p>

            <!-- Ikon Sosial Media Dipusatkan -->
            <div class="d-flex justify-content-center gap-2">
                <a href="https://instagram.com/fitriinhr_" target="_blank" title="Instagram">
                    <i class="fab fa-instagram fa-2x" style="color:#C13584;"></i>
                </a>
                <a href="https://github.com/Fitrianse" target="_blank" title="GitHub">
                    <i class="fab fa-github fa-2x" style="color:#333;"></i>
                </a>
                <a href="https://facebook.com/yourusername" target="_blank" title="Facebook">
                    <i class="fab fa-facebook fa-2x" style="color:#1877F2;"></i>
                </a>
                <a href="https://wa.me/6282135352803" target="_blank" title="WhatsApp">
                    <i class="fab fa-whatsapp fa-2x" style="color:#25D366;"></i>
                </a>
            </div>
        </div>

        <!-- KANAN: About Me -->
        <div class="col-md-6">
            <h4 class="fw-bold mb-3">About Me</h4>
            <p>
               Holla! Saya Fitri Nur Kholifah, Mahasiswa aktif di Universitas Islam Sultan Agung Semarang.
            </p>
            <p>
                Saya sangat suka mendengarkan musik dan membaca buku. Selain itu, saya juga aktif menulis sejak duduk di bangku Sekolah Menengah Pertama.
            </p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
