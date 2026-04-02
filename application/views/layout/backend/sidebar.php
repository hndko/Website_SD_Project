<aside class="admin-sidebar">
    <div class="d-flex align-items-center gap-3 mb-4 px-2">
        <img src="<?php echo $base_url ?? ''; ?>assets/img/logo.png" alt="Logo" height="40">
        <h5 class="mb-0 fw-bold text-white">SD Cendekia</h5>
    </div>

    <ul class="sidebar-nav">
        <li class="sidebar-nav-item">
            <a href="<?php echo $base_url ?? ''; ?>admin" class="sidebar-nav-link <?php echo ($currentPage == 'dashboard') ? 'active' : ''; ?>">
                <i data-lucide="layout-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="<?php echo $base_url ?? ''; ?>admin/messages" class="sidebar-nav-link <?php echo ($currentPage == 'messages') ? 'active' : ''; ?>">
                <i data-lucide="mail"></i>
                <span>Inbox Pesan</span>
                <?php if (isset($unreadCount) && $unreadCount > 0): ?>
                    <span class="badge bg-danger ms-auto rounded-pill"><?php echo $unreadCount; ?></span>
                <?php endif; ?>
            </a>
        </li>
        <li class="sidebar-nav-item mt-4">
            <small class="text-uppercase text-muted fw-bold px-3" style="font-size: 0.65rem; letter-spacing: 0.1em;">Manajemen Konten</small>
        </li>
        <li class="sidebar-nav-item">
            <a href="<?php echo $base_url ?? ''; ?>profil" class="sidebar-nav-link">
                <i data-lucide="user-plus"></i>
                <span>Profil Sekolah</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="<?php echo $base_url ?? ''; ?>galeri" class="sidebar-nav-link">
                <i data-lucide="image"></i>
                <span>Galeri & Media</span>
            </a>
        </li>
        <li class="sidebar-nav-item mt-auto">
            <a href="<?php echo $base_url ?? ''; ?>logout" class="sidebar-nav-link text-danger">
                <i data-lucide="log-out"></i>
                <span>Keluar Sesi</span>
            </a>
        </li>
    </ul>
</aside>
