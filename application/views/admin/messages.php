<?php
// admin/messages/index.php
require_once '../../application/config/database.php';
checkAdminLogin("../../auth/login.php");

$conn = connectDB();

// Handle Mark as Read or Delete
if (isset($_GET['action'])) {
    $id = (int)$_GET['id'];
    if ($_GET['action'] == 'read') {
        $conn->query("UPDATE `messages` SET `status` = 'read' WHERE `id` = $id");
    } elseif ($_GET['action'] == 'delete') {
        $conn->query("DELETE FROM `messages` WHERE `id` = $id");
    }
    header("Location: index.php");
    exit();
}

// Unread Count for sidebar
$unreadCount = $conn->query("SELECT COUNT(*) as total FROM `messages` WHERE `status` = 'unread'")->fetch_assoc()['total'];

$result = $conn->query("SELECT * FROM `messages` ORDER BY `created_at` DESC");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pesan | SD Cendekia</title>
    
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
                <a href="<?php echo $base_url ?? ''; ?>admin" class="sidebar-nav-link">
                    <i data-lucide="layout-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="<?php echo $base_url ?? ''; ?>admin/messages" class="sidebar-nav-link active">
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
                <h1 class="h3 fw-bold mb-1">Daftar Pesan Masuk</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 small">
                        <li class="breadcrumb-item text-muted">Aplikasi</li>
                        <li class="breadcrumb-item"><a href="<?php echo $base_url ?? ''; ?>admin" class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item active fw-medium text-primary">Pesan</li>
                    </ol>
                </nav>
            </div>
        </header>

        <div class="table-custom-wrapper">
            <div class="table-responsive">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th>WAKTU</th>
                            <th>PENGIRIM</th>
                            <th>SUBJEK</th>
                            <th>STATUS</th>
                            <th class="text-end">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td class="small text-muted">
                                    <?php echo date('d M Y, H:i', strtotime($row['created_at'])); ?>
                                </td>
                                <td>
                                    <div class="fw-bold text-dark"><?php echo htmlspecialchars($row['name']); ?></div>
                                    <div class="small text-muted"><?php echo htmlspecialchars($row['email']); ?></div>
                                    <div class="small text-muted"><?php echo htmlspecialchars($row['phone']); ?></div>
                                </td>
                                <td>
                                    <div class="fw-medium text-primary mb-1"><?php echo htmlspecialchars($row['subject']); ?></div>
                                    <div class="small text-muted" style="max-width: 400px;"><?php echo htmlspecialchars($row['message']); ?></div>
                                </td>
                                <td>
                                    <?php if($row['status'] == 'unread'): ?>
                                        <span class="badge badge-soft-danger px-3 py-2 rounded-pill">Belum Dibaca</span>
                                    <?php else: ?>
                                        <span class="badge badge-soft-success px-3 py-2 rounded-pill">Sudah Dibaca</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-end">
                                    <div class="d-flex gap-2 justify-content-end">
                                        <?php if ($row['status'] == 'unread'): ?>
                                            <a href="index.php?action=read&id=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-sm rounded-circle p-2" title="Tandai Selesai">
                                                <i data-lucide="check" size="18"></i>
                                            </a>
                                        <?php endif; ?>
                                        <a href="index.php?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm rounded-circle p-2" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                                            <i data-lucide="trash-2" size="18"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                        
                        <?php if ($result->num_rows == 0): ?>
                            <tr>
                                <td colspan="5" class="text-center py-5 text-muted">Tidak ada pesan masuk.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

<script>
    lucide.createIcons();
</script>
</body>

</html>