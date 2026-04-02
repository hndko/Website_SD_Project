<header class="d-flex justify-content-between align-items-center mb-5">
    <div>
        <h1 class="h3 fw-bold mb-1"><?php echo $dashboardTitle ?? 'Dashboard'; ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item text-muted">Aplikasi</li>
                <li class="breadcrumb-item active fw-medium text-primary"><?php echo $breadcrumbActive ?? 'Dashboard'; ?></li>
            </ol>
        </nav>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="text-end d-none d-md-block">
            <h6 class="mb-0 fw-bold">Admin Utama</h6>
            <small class="text-muted">Administrator</small>
        </div>
        <div class="bg-white p-1 rounded-circle shadow-sm">
            <img src="https://ui-avatars.com/api/?name=Admin&background=0062ff&color=fff" class="rounded-circle" width="40" height="40" alt="Avatar">
        </div>
    </div>
</header>
