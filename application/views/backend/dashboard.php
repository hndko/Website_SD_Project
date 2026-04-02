<?php
// application/views/backend/dashboard.php
$pageTitle = "Dashboard Admin";
$currentPage = "dashboard";
$dashboardTitle = "Ringkasan Dashboard";
$breadcrumbActive = "Dashboard";

$conn = connectDB();

// Statistics
$unreadCount = $conn->query("SELECT COUNT(*) as total FROM `messages` WHERE `status` = 'unread'")->fetch_assoc()['total'];
$totalCount = $conn->query("SELECT COUNT(*) as total FROM `messages`")->fetch_assoc()['total'];
$readCount = $totalCount - $unreadCount;

// Recent Messages
$recentMessages = $conn->query("SELECT * FROM `messages` ORDER BY `created_at` DESC LIMIT 5");

include 'application/views/layout/backend/header.php';
include 'application/views/layout/backend/sidebar.php';
?>

<!-- Main Content -->
<main class="admin-content">
    <?php include 'application/views/layout/backend/topbar.php'; ?>

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
                    <a href="<?php echo $base_url; ?>admin/messages" class="btn btn-primary btn-sm px-3 rounded-pill fw-medium">Lihat Semua</a>
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
                                    <a href="<?php echo $base_url; ?>admin/messages?action=read&id=<?php echo $msg['id']; ?>" class="btn btn-light btn-sm rounded-circle p-2" title="Tandai Selesai">
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

<?php include 'application/views/layout/backend/footer.php'; ?>