<?php
// admin/dashboard.php
require_once '../application/config/database.php';
checkAdminLogin();

$conn = connectDB();

// Statistics
$unreadCount = $conn->query("SELECT COUNT(*) as total FROM `messages` WHERE `status` = 'unread'")->fetch_assoc()['total'];
$totalCount = $conn->query("SELECT COUNT(*) as total FROM `messages`")->fetch_assoc()['total'];
$readCount = $totalCount - $unreadCount;

// Recent Messages
$recentMessages = $conn->query("SELECT * FROM `messages` ORDER BY `created_at` DESC LIMIT 5");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | SD Cendekia</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $base_url ?? ''; ?>favicon.ico">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5.3 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url ?? ''; ?>assets/css/style.css">
    
    <!-- Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-light">

<div class="admin-wrapper">
    <!-- Sidebar -->
    <aside class="admin-sidebar">
        <div class="d-flex align-items-center gap-3 mb-4 px-2">
            <img src="<?php echo $base_url ?? ''; ?>assets/img/logo.png" alt="Logo" height="40">
            <h5 class="mb-0 fw-bold text-white">SD Cendekia</h5>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-nav-item">
                <a href="<?php echo $base_url ?? ''; ?>admin" class="sidebar-nav-link active">
                    <i data-lucide="layout-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="<?php echo $base_url ?? ''; ?>admin/messages" class="sidebar-nav-link">
                    <i data-lucide="mail"></i>
                    <span>Inbox Pesan</span>
                    <?php if ($unreadCount > 0): ?>
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

    <!-- Main Content -->
    <main class="admin-content">
        <header class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h1 class="h3 fw-bold mb-1">Ringkasan Dashboard</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 small">
                        <li class="breadcrumb-item text-muted">Aplikasi</li>
                        <li class="breadcrumb-item active fw-medium text-primary">Dashboard</li>
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

        <!-- Stats Cards -->
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="stat-card-premium blue">
                    <i data-lucide="mail" class="icon-bg"></i>
                    <p class="text-white text-opacity-75 mb-1 small fw-medium">Total Pesan Masuk</p>
                    <h2 class="display-6 fw-bold mb-0"><?php echo $totalCount; ?></h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card-premium purple">
                    <i data-lucide="bell" class="icon-bg"></i>
                    <p class="text-white text-opacity-75 mb-1 small fw-medium">Pesan Belum Dibaca</p>
                    <h2 class="display-6 fw-bold mb-0"><?php echo $unreadCount; ?></h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card-premium orange">
                    <i data-lucide="check-check" class="icon-bg"></i>
                    <p class="text-white text-opacity-75 mb-1 small fw-medium">Pesan Selesai</p>
                    <h2 class="display-6 fw-bold mb-0"><?php echo $readCount; ?></h2>
                </div>
            </div>
        </div>

        <!-- Recent Activities / Messages -->
        <div class="row">
            <div class="col-lg-12">
                <div class="table-custom-wrapper">
                    <div class="d-flex justify-content-between align-items-center p-4 border-bottom">
                        <h5 class="fw-bold mb-0">Pesan Terbaru</h5>
                        <a href="messages" class="btn btn-primary btn-sm px-3 rounded-pill fw-medium">Lihat Semua</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom">
                            <thead>
                                <tr>
                                    <th>PENGIRIM</th>
                                    <th>SUBJEK</th>
                                    <th>TANGGAL</th>
                                    <th>STATUS</th>
                                    <th class="text-end">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($msg = $recentMessages->fetch_assoc()): ?>
                                <tr>
                                    <td>
                                        <div class="fw-bold"><?php echo htmlspecialchars($msg['name']); ?></div>
                                        <small class="text-muted"><?php echo htmlspecialchars($msg['email']); ?></small>
                                    </td>
                                    <td>
                                        <div class="text-truncate" style="max-width: 200px;"><?php echo htmlspecialchars($msg['subject']); ?></div>
                                    </td>
                                    <td class="small text-muted">
                                        <?php echo date('d M Y, H:i', strtotime($msg['created_at'])); ?>
                                    </td>
                                    <td>
                                        <?php if($msg['status'] == 'unread'): ?>
                                            <span class="badge badge-soft-danger px-3 py-2 rounded-pill">Belum Dibaca</span>
                                        <?php else: ?>
                                            <span class="badge badge-soft-success px-3 py-2 rounded-pill">Sudah Dibaca</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-end">
                                        <a href="<?php echo $base_url ?? ''; ?>admin/messages?action=read&id=<?php echo $msg['id']; ?>" class="btn btn-light btn-sm rounded-circle p-2" title="Tandai Selesai">
                                            <i data-lucide="check" size="16"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                                <?php if($recentMessages->num_rows == 0): ?>
                                <tr>
                                    <td colspan="5" class="text-center py-5 text-muted">Belum ada pesan yang masuk.</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    lucide.createIcons();
</script>
</body>

</html>