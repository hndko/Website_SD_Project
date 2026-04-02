<?php
// application/views/backend/profile_edit.php
$pageTitle = "Manajemen Profil Sekolah";
$currentPage = "profile";
$dashboardTitle = "Edit Profil Sekolah";
$breadcrumbActive = "Profil";

checkAdminLogin();
$conn = connectDB();

$message = "";
$error = "";

// Handle Form Submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $history = $conn->real_escape_string($_POST['history_content']);
    $vision = $conn->real_escape_string($_POST['vision']);
    $mission = $conn->real_escape_string($_POST['mission']);

    $updateSql = "UPDATE `school_profile` SET 
                  `history_content` = '$history', 
                  `vision` = '$vision', 
                  `mission` = '$mission' 
                  WHERE `id` = 1";

    if ($conn->query($updateSql) === TRUE) {
        $message = "Profil sekolah berhasil diperbarui!";
    } else {
        $error = "Gagal memperbarui profil: " . $conn->error;
    }
}

// Fetch current data
$profile = $conn->query("SELECT * FROM `school_profile` WHERE `id` = 1")->fetch_assoc();

include 'application/views/layout/backend/header.php';
include 'application/views/layout/backend/sidebar.php';
?>

<!-- Main Content -->
<main class="admin-content">
    <?php include 'application/views/layout/backend/topbar.php'; ?>

    <div class="row">
        <div class="col-lg-12">
            <?php if ($message): ?>
                <div class="alert alert-success border-0 shadow-sm mb-4" style="border-radius: 15px;">
                    <i data-lucide="check-circle" class="me-2"></i> <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <?php if ($error): ?>
                <div class="alert alert-danger border-0 shadow-sm mb-4" style="border-radius: 15px;">
                    <i data-lucide="alert-circle" class="me-2"></i> <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <div class="card border-0 shadow-sm" style="border-radius: 20px;">
                <div class="card-body p-4 p-md-5">
                    <form method="POST">
                        <div class="mb-5">
                            <h5 class="fw-bold text-primary mb-3">
                                <i data-lucide="book-open" class="me-2" size="20"></i> Sejarah Sekolah
                            </h5>
                            <textarea name="history_content" class="form-control bg-light border-0" rows="8" placeholder="Masukkan sejarah berdirinya sekolah..." required style="border-radius: 15px; padding: 20px;"><?php echo htmlspecialchars($profile['history_content']); ?></textarea>
                        </div>

                        <div class="mb-5">
                            <h5 class="fw-bold text-primary mb-3">
                                <i data-lucide="target" class="me-2" size="20"></i> Visi Sekolah
                            </h5>
                            <textarea name="vision" class="form-control bg-light border-0" rows="3" placeholder="Masukkan visi sekolah..." required style="border-radius: 15px; padding: 20px;"><?php echo htmlspecialchars($profile['vision']); ?></textarea>
                        </div>

                        <div class="mb-5">
                            <h5 class="fw-bold text-primary mb-3">
                                <i data-lucide="list-checks" class="me-2" size="20"></i> Misi Sekolah
                            </h5>
                            <p class="text-muted small mb-2">* Masukkan misi sekolah, satu poin per baris.</p>
                            <textarea name="mission" class="form-control bg-light border-0" rows="6" placeholder="Misi 1&#10;Misi 2&#10;Misi 3" required style="border-radius: 15px; padding: 20px;"><?php echo htmlspecialchars($profile['mission']); ?></textarea>
                        </div>

                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-primary btn-lg px-5 shadow-sm fw-bold" style="border-radius: 15px;">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'application/views/layout/backend/footer.php'; ?>
