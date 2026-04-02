<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-custom py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?php echo $base_url ?? ''; ?>">
            <img src="<?php echo $base_url ?? ''; ?>assets/img/logo.png" alt="SD Cendekia Logo" class="me-2">
            <span class="fw-bold text-dark fs-5">SD Cendekia</span>
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i data-lucide="menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item">
                    <a class="nav-link fw-medium <?php echo ($currentPage == 'index') ? 'active text-primary' : ''; ?>" href="<?php echo $base_url ?? ''; ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium <?php echo ($currentPage == 'profil') ? 'active text-primary' : ''; ?>" href="<?php echo $base_url ?? ''; ?>profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium <?php echo ($currentPage == 'fasilitas') ? 'active text-primary' : ''; ?>" href="<?php echo $base_url ?? ''; ?>fasilitas">Fasilitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium <?php echo ($currentPage == 'galeri') ? 'active text-primary' : ''; ?>" href="<?php echo $base_url ?? ''; ?>galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium <?php echo ($currentPage == 'kontak') ? 'active text-primary' : ''; ?>" href="<?php echo $base_url ?? ''; ?>kontak">Kontak</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-premium shadow-sm" href="<?php echo $base_url ?? ''; ?>login">Login Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Initialize Lucide icons
    lucide.createIcons();
</script>
