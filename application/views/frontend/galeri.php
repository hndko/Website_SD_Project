<?php
$pageTitle = "Galeri";
$currentPage = "galeri";
include 'application/views/layout/frontend/header.php';
include 'application/views/layout/frontend/navbar.php';
?>

<!-- Page Header -->
<section class="py-5 bg-light border-bottom">
    <div class="container py-lg-4 text-center">
        <h6 class="text-primary fw-bold text-uppercase tracking-wider mb-2">Momen Berharga</h6>
        <h1 class="display-4 fw-bold mb-0">Galeri Kegiatan</h1>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="row g-4">
            <!-- Galeri 1 -->
            <div class="col-md-4">
                <div class="gallery-item shadow-sm h-100">
                    <img src="<?php echo $base_url; ?>assets/img/flag_ceremony.png" class="img-fluid w-100" alt="Upacara">
                    <div class="gallery-overlay">
                        <div class="text-white text-center p-3">
                            <h5 class="fw-bold mb-1">Upacara Bendera</h5>
                            <p class="small mb-0">Menanamkan nilai patriotisme sejak dini.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Galeri 2 -->
            <div class="col-md-4">
                <div class="gallery-item shadow-sm h-100">
                    <img src="<?php echo $base_url; ?>assets/img/art_class.png" class="img-fluid w-100" alt="Pentas Seni">
                    <div class="gallery-overlay">
                        <div class="text-white text-center p-3">
                            <h5 class="fw-bold mb-1">Pentas Seni Tahunan</h5>
                            <p class="small mb-0">Menampilkan bakat dan kreativitas siswa.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Galeri 3 -->
            <div class="col-md-4">
                <div class="gallery-item shadow-sm h-100">
                    <img src="<?php echo $base_url; ?>assets/img/coloring.png" class="img-fluid w-100" alt="Lomba">
                    <div class="gallery-overlay">
                        <div class="text-white text-center p-3">
                            <h5 class="fw-bold mb-1">Lomba Mewarnai</h5>
                            <p class="small mb-0">Mengasah imajinasi melalui coretan bermakna.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Galeri 4 -->
            <div class="col-md-4">
                <div class="gallery-item shadow-sm h-100">
                    <img src="<?php echo $base_url; ?>assets/img/education_trip.png" class="img-fluid w-100" alt="Kunjungan">
                    <div class="gallery-overlay">
                        <div class="text-white text-center p-3">
                            <h5 class="fw-bold mb-1">Kunjungan Edukatif</h5>
                            <p class="small mb-0">Pembelajaran langsung di luar ruang kelas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Galeri 5 -->
            <div class="col-md-4">
                <div class="gallery-item shadow-sm h-100">
                    <img src="<?php echo $base_url; ?>assets/img/sports_day.png" class="img-fluid w-100" alt="Olahraga">
                    <div class="gallery-overlay">
                        <div class="text-white text-center p-3">
                            <h5 class="fw-bold mb-1">Hari Olahraga Sekolah</h5>
                            <p class="small mb-0">Tubuh yang sehat untuk jiwa yang kuat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Galeri 6 -->
            <div class="col-md-4">
                <div class="gallery-item shadow-sm h-100">
                    <img src="<?php echo $base_url; ?>assets/img/classroom.png" class="img-fluid w-100" alt="Belajar">
                    <div class="gallery-overlay">
                        <div class="text-white text-center p-3">
                            <h5 class="fw-bold mb-1">Suasana Pembelajaran</h5>
                            <p class="small mb-0">Interaksi hangat antara guru dan murid.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'application/views/layout/frontend/footer.php'; ?>
