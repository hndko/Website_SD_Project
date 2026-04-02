<?php
$pageTitle = "Fasilitas";
$currentPage = "fasilitas";
include 'application/views/layout/header.php';
include 'application/views/layout/navbar.php';
?>

<!-- Page Header -->
<section class="py-5 bg-light border-bottom">
    <div class="container py-lg-4 text-center">
        <h6 class="text-primary fw-bold text-uppercase tracking-wider mb-2">Penunjang Belajar</h6>
        <h1 class="display-4 fw-bold mb-0">Fasilitas Sekolah</h1>
    </div>
</section>

<!-- Facilities Grid -->
<section class="py-5">
    <div class="container py-5">
        <div class="row g-4">
            <!-- Facility Item 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-modern h-100 p-4 border-0">
                    <div class="mb-4">
                        <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dee7b?q=80&w=1200&auto=format&fit=crop" class="img-fluid rounded-4 shadow-sm" alt="Ruang Kelas">
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-primary bg-opacity-10 p-2 rounded-3 text-primary">
                            <i data-lucide="home" size="24"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Ruang Kelas AC</h4>
                    </div>
                    <p class="text-muted small">Setiap ruang kelas dilengkapi dengan AC, proyektor LCD, dan furnitur ergonomis untuk kenyamanan belajar mengajar.</p>
                </div>
            </div>
            <!-- Facility Item 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-modern h-100 p-4 border-0">
                    <div class="mb-4">
                        <img src="https://images.unsplash.com/photo-1544377193-33dcf4d68fb5?q=80&w=1200&auto=format&fit=crop" class="img-fluid rounded-4 shadow-sm" alt="Lab Komputer">
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-primary bg-opacity-10 p-2 rounded-3 text-primary">
                            <i data-lucide="monitor" size="24"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Lab Komputer</h4>
                    </div>
                    <p class="text-muted small">Fasilitas komputer modern dengan koneksi internet cepat untuk menunjang literasi digital siswa sejak dini.</p>
                </div>
            </div>
            <!-- Facility Item 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-modern h-100 p-4 border-0">
                    <div class="mb-4">
                        <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=1200&auto=format&fit=crop" class="img-fluid rounded-4 shadow-sm" alt="Perpustakaan">
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-primary bg-opacity-10 p-2 rounded-3 text-primary">
                            <i data-lucide="book" size="24"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Perpustakaan</h4>
                    </div>
                    <p class="text-muted small">Koleksi buku lengkap, mulai dari buku pelajaran hingga literatur fiksi yang dapat mengasah imajinasi siswa.</p>
                </div>
            </div>
            <!-- Facility Item 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-modern h-100 p-4 border-0">
                    <div class="mb-4">
                        <img src="https://images.unsplash.com/photo-1505232987213-96d13a921d28?q=80&w=1200&auto=format&fit=crop" class="img-fluid rounded-4 shadow-sm" alt="Lapanan Olahraga">
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-primary bg-opacity-10 p-2 rounded-3 text-primary">
                            <i data-lucide="activity" size="24"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Lapangan Olahraga</h4>
                    </div>
                    <p class="text-muted small">Area olahraga yang luas untuk berbagai kegiatan seperti futsal, basket, bulu tangkis, dan upacara bendera.</p>
                </div>
            </div>
            <!-- Facility Item 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-modern h-100 p-4 border-0">
                    <div class="mb-4">
                        <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=1200&auto=format&fit=crop" class="img-fluid rounded-4 shadow-sm" alt="Laboratorium IPA">
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-primary bg-opacity-10 p-2 rounded-3 text-primary">
                            <i data-lucide="flask-conical" size="24"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Laboratorium IPA</h4>
                    </div>
                    <p class="text-muted small">Tempat siswa melakukan berbagai eksperimen sains sederhana dengan peralatan yang aman dan lengkap.</p>
                </div>
            </div>
            <!-- Facility Item 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-modern h-100 p-4 border-0">
                    <div class="mb-4">
                        <img src="https://images.unsplash.com/photo-1498654896293-37aacf113fd9?q=80&w=1200&auto=format&fit=crop" class="img-fluid rounded-4 shadow-sm" alt="Kantin Sehat">
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-primary bg-opacity-10 p-2 rounded-3 text-primary">
                            <i data-lucide="coffee" size="24"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Kantin Sehat</h4>
                    </div>
                    <p class="text-muted small">Catering sekolah yang menyediakan makanan bergizi dan kebersihan yang selalu terjaga untuk siswa.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'application/views/layout/footer.php'; ?>
