<?php
$pageTitle = "Kontak";
$currentPage = "kontak";
include 'application/views/layout/frontend/header.php';
include 'application/views/layout/frontend/navbar.php';
?>

<!-- Page Header -->
<section class="py-5 bg-light border-bottom">
    <div class="container py-lg-4 text-center">
        <h6 class="text-primary fw-bold text-uppercase tracking-wider mb-2">Terhubung Bersama Kami</h6>
        <h1 class="display-4 fw-bold mb-0">Hubungi Kami</h1>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="pe-xl-5">
                    <h2 class="fw-bold mb-4">Butuh Informasi Lebih Lanjut?</h2>
                    <p class="text-muted lead mb-5">Tim administrasi kami siap membantu menjawab pertanyaan Anda seputar pendaftaran, kurikulum, atau fasilitas sekolah.</p>
                    
                    <div class="d-flex flex-column gap-4 mb-5">
                        <div class="d-flex gap-4 align-items-start">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                                <i data-lucide="map-pin" size="24"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Alamat Kampus</h5>
                                <p class="text-muted mb-0">Jl. Pendidikan No. 123, Kota Cendekia, Indonesia</p>
                            </div>
                        </div>
                        <div class="d-flex gap-4 align-items-start">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                                <i data-lucide="phone" size="24"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Telepon & WhatsApp</h5>
                                <p class="text-muted mb-0">(021) 1234-5678 / +62 812 3456 7890</p>
                            </div>
                        </div>
                        <div class="d-flex gap-4 align-items-start">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                                <i data-lucide="mail" size="24"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Email Resmi</h5>
                                <p class="text-muted mb-0">info@sdcendekia.sch.id / pendaftaran@sdcendekia.sch.id</p>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-light border-0 p-4 rounded-4 shadow-sm">
                        <h6 class="fw-bold mb-2">Jam Operasional Kantor</h6>
                        <ul class="list-unstyled mb-0 d-flex flex-column gap-2 small">
                            <li class="d-flex justify-content-between">
                                <span class="text-muted">Senin - Jumat</span>
                                <span class="fw-bold">07:30 - 15:30</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="text-muted">Sabtu</span>
                                <span class="fw-bold">08:00 - 12:00</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="text-muted">Minggu / Libur Nasional</span>
                                <span class="text-danger fw-bold">Tutup</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="card card-modern p-4 p-md-5 border-0">
                    <h3 class="fw-bold mb-4">Kirim Pesan</h3>
                    
                    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
                        <div class="d-flex align-items-center gap-2">
                            <i data-lucide="check-circle" size="20"></i>
                            <span>Terima kasih! Pesan Anda telah berhasil dikirim. Kami akan segera menghubungi Anda.</span>
                        </div>
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert"></button>
                    </div>
                    <?php endif; ?>

                    <form action="<?php echo $base_url ?? ''; ?>contact/submit" method="POST" class="row g-4">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control bg-light border-0 focus-none" id="name" placeholder="Nama Lengkap" required>
                                <label for="name" class="text-muted small">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control bg-light border-0" id="email" placeholder="Alamat Email" required>
                                <label for="email" class="text-muted small">Alamat Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="tel" name="phone" class="form-control bg-light border-0" id="phone" placeholder="Nomor Telepon/WA">
                                <label for="phone" class="text-muted small">Nomor Telepon/WA</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="subject" class="form-control bg-light border-0" id="subject" placeholder="Subjek" required>
                                <label for="subject" class="text-muted small">Subjek Pesan</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="message" class="form-control bg-light border-0" id="message" style="height: 150px" placeholder="Isi Pesan" required></textarea>
                                <label for="message" class="text-muted small">Apa yang ingin Anda tanyakan?</label>
                            </div>
                        </div>
                        <div class="col-12 mt-5">
                            <button type="submit" class="btn btn-premium btn-lg w-100 shadow-sm py-3 d-flex align-items-center justify-content-center gap-2">
                                <span>Kirim Sekarang</span>
                                <i data-lucide="send" size="18"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Optional) -->
<section class="py-0">
    <div class="container-fluid px-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126900.5695278772!2d106.81223945!3d-6.3105658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1cd23a31d99%3A0xe54e3f360567fce5!2sSekolah%20Cikal%20Cilandak!5e0!3m2!1sen!2sid!4v1715678901234!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php include 'application/views/layout/frontend/footer.php'; ?>
