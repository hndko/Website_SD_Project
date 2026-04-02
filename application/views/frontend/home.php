<?php
$pageTitle = "Beranda";
$currentPage = "index";
include 'application/views/layout/header.php';
include 'application/views/layout/navbar.php';
?>

<!-- Hero Section -->
<section class="hero-premium d-flex align-items-center" style="background-image: url('https://i.pinimg.com/originals/e0/c8/5a/e0c85ab2f97469148c9d017b23c33799.jpg');">
    <div class="container hero-content text-center text-lg-start">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h6 class="text-uppercase fw-bold mb-3 tracking-widest text-accent" style="color: var(--accent-color);">Edukasi Berkualitas untuk Masa Depan</h6>
                <h1 class="display-3 fw-bold mb-4">Selamat Datang di <span class="text-white">SD Cendekia</span></h1>
                <p class="lead mb-5 opacity-90">Membentuk Generasi Cerdas, Kreatif, dan Berakhlak Mulia. Kami percaya setiap anak memiliki potensi unik yang perlu dikembangkan dengan kasih sayang dan profesionalisme.</p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                    <a href="<?php echo $base_url ?? ''; ?>profil" class="btn btn-premium btn-lg shadow-lg">Pelajari Lebih Lanjut</a>
                    <a href="<?php echo $base_url ?? ''; ?>kontak" class="btn btn-outline-light btn-lg px-4 border-2">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Highlight Section -->
<section class="py-5 bg-white border-bottom shadow-sm">
    <div class="container py-lg-4">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="d-flex gap-4 align-items-start p-4 card-modern border-0">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                        <i data-lucide="book-open" size="32"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2">Pendidikan Berkualitas</h5>
                        <p class="text-muted small mb-0">Kurikulum nasional terintegrasi dengan program pengayaan modern.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex gap-4 align-items-start p-4 card-modern border-0">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                        <i data-lucide="users" size="32"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2">Guru Profesional</h5>
                        <p class="text-muted small mb-0">Tenaga pengajar berpengalaman, tersertifikasi, dan penuh dedikasi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex gap-4 align-items-start p-4 card-modern border-0">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                        <i data-lucide="award" size="32"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2">Fasilitas Modern</h5>
                        <p class="text-muted small mb-0">Lingkungan belajar yang lengkap, aman, dan nyaman bagi siswa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section Preview -->
<section id="about" class="py-5">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1200&auto=format&fit=crop" class="img-fluid rounded-4 shadow-lg" alt="SD Cendekia">
                    <div class="position-absolute bottom-0 end-0 bg-primary p-4 rounded-4 shadow-lg translate-middle-y me-4 d-none d-sm-block">
                        <div class="text-white text-center">
                            <h2 class="fw-bold mb-0">15+</h2>
                            <p class="small mb-0">Tahun Pengalaman</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary fw-bold text-uppercase tracking-wider mb-2">Tentang Kami</h6>
                <h2 class="display-5 fw-bold mb-4">Membangun Fondasi Karakter Sejak Dini</h2>
                <p class="text-muted mb-4">SD Cendekia hadir dengan visi menciptakan pemimpin masa depan yang berwawasan luas dan memiliki integritas moral yang tinggi. Kami mengintegrasikan teknologi dalam pembelajaran tanpa melupakan nilai-nilai budaya dan etika.</p>
                <ul class="list-unstyled mb-5 d-flex flex-column gap-3">
                    <li class="d-flex align-items-center gap-3">
                        <i data-lucide="check-circle" class="text-primary" size="20"></i>
                        <span class="fw-medium">Kurikulum 2013 & Merdeka Belajar</span>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <i data-lucide="check-circle" class="text-primary" size="20"></i>
                        <span class="fw-medium">Ektrakurikuler Berbasis Bakat & Minat</span>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <i data-lucide="check-circle" class="text-primary" size="20"></i>
                        <span class="fw-medium">Lingkungan Belajar Ramah Anak</span>
                    </li>
                </ul>
                <a href="<?php echo $base_url ?? ''; ?>profil" class="btn btn-premium shadow-sm">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary overflow-hidden position-relative">
    <div class="container py-4 position-relative z-index-1">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <h2 class="fw-bold mb-3">Siap Menjadi Bagian dari Keluarga Besar Kami?</h2>
                <p class="lead mb-4 opacity-90">Pendaftaran Siswa Baru Tahun Pelajaran 2025/2026 Telah Dibuka. Kuota Terbatas!</p>
                <div class="d-flex gap-3 justify-content-center">
                    <a href="<?php echo $base_url ?? ''; ?>kontak" class="btn btn-light text-primary btn-lg fw-bold px-5">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'application/views/layout/footer.php'; ?>
