<?php
// application/views/frontend/profil.php
$pageTitle = "Profil";
$currentPage = "profil";

$conn = connectDB();
$profile = $conn->query("SELECT * FROM `school_profile` WHERE `id` = 1")->fetch_assoc();

include 'application/views/layout/frontend/header.php';
include 'application/views/layout/frontend/navbar.php';
?>

<!-- Page Header -->
<section class="py-5 bg-light border-bottom">
    <div class="container py-lg-4 text-center">
        <h6 class="text-primary fw-bold text-uppercase tracking-wider mb-2">Tentang Kami</h6>
        <h1 class="display-4 fw-bold mb-0">Profil Sekolah</h1>
    </div>
</section>

<!-- History Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="<?php echo $base_url; ?>assets/img/about/school_profile.png" class="img-fluid rounded-4 shadow-lg mb-4 mb-lg-0" alt="History">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Sejarah Berdiri</h2>
                <div class="text-muted lead mb-4" style="white-space: pre-line;">
                    <?php echo htmlspecialchars($profile['history_content']); ?>
                </div>
                <div class="row g-4 d-none d-md-flex mt-4">
                    <div class="col-6">
                        <div class="p-4 bg-primary bg-opacity-10 rounded-4 shadow-sm">
                            <h3 class="fw-bold text-primary mb-0">1,200+</h3>
                            <p class="small text-primary mb-0">Alumni Berprestasi</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-4 bg-primary bg-opacity-10 rounded-4 shadow-sm">
                            <h3 class="fw-bold text-primary mb-0">45+</h3>
                            <p class="small text-primary mb-0">Guru Berpengalaman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-5 bg-dark text-white overflow-hidden position-relative">
    <div class="container py-5 px-4">
        <div class="row g-5 text-center text-lg-start">
            <div class="col-lg-5">
                <h6 class="text-primary fw-bold text-uppercase tracking-wider mb-3">Visi & Misi</h6>
                <h2 class="display-5 fw-bold mb-4">Komitmen Kami dalam Pendidikan</h2>
                <p class="opacity-75 lead">Kami menyadari bahwa pendidikan bukan sekadar transfer ilmu pengetahuan, melainkan pembentukan karakter yang kokoh.</p>
            </div>
            <div class="col-lg-7">
                <div class="card-modern bg-white text-dark p-5 rounded-4 shadow-lg mb-4">
                    <h4 class="fw-bold text-primary mb-3">Visi</h4>
                    <p class="lead mb-0 italic">"<?php echo htmlspecialchars($profile['vision']); ?>"</p>
                </div>
                <div class="card-modern bg-white text-dark p-5 rounded-4 shadow-lg">
                    <h4 class="fw-bold text-primary mb-3">Misi</h4>
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <?php 
                        $missions = explode("\n", $profile['mission']);
                        foreach($missions as $mission):
                            if(trim($mission)):
                        ?>
                        <li class="d-flex align-items-baseline gap-3 text-start">
                            <i data-lucide="check" class="text-primary flex-shrink-0" size="20"></i>
                            <span class="fw-medium"><?php echo htmlspecialchars(trim($mission)); ?></span>
                        </li>
                        <?php 
                            endif;
                        endforeach; 
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'application/views/layout/frontend/footer.php'; ?>
