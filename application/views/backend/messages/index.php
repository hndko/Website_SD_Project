<?php
// application/views/backend/messages.php
$pageTitle = "Manajemen Pesan";
$currentPage = "messages";
$dashboardTitle = "Daftar Pesan Masuk";
$breadcrumbActive = "Pesan";

checkAdminLogin();

// Handle Mark as Read or Delete via models
if (isset($_GET['action'])) {
    $id = (int)$_GET['id'];
    if ($_GET['action'] == 'read') {
        $Message_model->mark_as_read($id);
    } elseif ($_GET['action'] == 'delete') {
        $Message_model->delete($id);
    }
    header("Location: " . $base_url . "messages");
    exit();
}

// Unread Count for sidebar
$unreadCount = $Message_model->get_unread_count();

// Get all messages
$result = $Message_model->get_all();

include 'application/views/layout/backend/header.php';
include 'application/views/layout/backend/sidebar.php';
?>

<!-- Main Content -->
<main class="admin-content">
    <?php include 'application/views/layout/backend/topbar.php'; ?>

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
                                        <a href="<?php echo $base_url; ?>messages?action=read&id=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-sm rounded-circle p-2" title="Tandai Selesai">
                                            <i data-lucide="check" size="18"></i>
                                        </a>
                                    <?php endif; ?>
                                    <a href="<?php echo $base_url; ?>messages?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm rounded-circle p-2" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
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

<?php include 'application/views/layout/backend/footer.php'; ?>