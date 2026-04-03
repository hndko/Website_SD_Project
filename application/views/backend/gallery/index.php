<?php
/**
 * Backend Gallery Management Index
 */
checkAdminLogin();

$pageTitle = "Manajemen Galeri";
$currentPage = "gallery";
$dashboardTitle = "Daftar Galeri & Media";
$breadcrumbActive = "Galeri";

include 'application/views/layout/backend/header.php';
include 'application/views/layout/backend/sidebar.php';
?>

<!-- Main Content -->
<main class="admin-content">
    <?php include 'application/views/layout/backend/topbar.php'; ?>

    <div class="d-flex justify-content-end mb-4">
        <button class="btn btn-primary d-flex align-items-center gap-2 px-4 py-2 rounded-pill shadow-sm">
            <i data-lucide="plus" size="18"></i>
            <span class="fw-bold">Tambah Foto</span>
        </button>
    </div>

    <div class="table-custom-wrapper">
        <div class="table-responsive">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th width="80">NO</th>
                        <th width="150">FOTO</th>
                        <th>KETERANGAN</th>
                        <th>KATEGORI</th>
                        <th>TANGGAL</th>
                        <th class="text-end">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Mock Data for now -->
                    <tr>
                        <td class="text-muted fw-medium">1</td>
                        <td>
                            <div class="gallery-img-preview rounded" style="width: 120px; height: 80px; overflow: hidden;">
                                <img src="<?php echo $base_url ?? ''; ?>assets/img/gallery/coloring_contest.png" alt="Galeri" class="w-100 h-100 object-fit-cover shadow-sm">
                            </div>
                        </td>
                        <td>
                            <div class="fw-bold text-dark">Lomba Mewarnai Tingkat Kecamatan</div>
                        </td>
                        <td>
                            <span class="badge badge-soft-primary px-3 py-2 rounded-pill">Kegiatan</span>
                        </td>
                        <td class="small text-muted">20 Mar 2024</td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <button class="btn btn-outline-primary btn-sm rounded-circle p-2" title="Edit">
                                    <i data-lucide="edit-2" size="18"></i>
                                </button>
                                <button class="btn btn-outline-danger btn-sm rounded-circle p-2" title="Hapus">
                                    <i data-lucide="trash-2" size="18"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted fw-medium">2</td>
                        <td>
                            <div class="gallery-img-preview rounded" style="width: 120px; height: 80px; overflow: hidden;">
                                <img src="<?php echo $base_url ?? ''; ?>assets/img/gallery/education_trip.png" alt="Galeri" class="w-100 h-100 object-fit-cover shadow-sm">
                            </div>
                        </td>
                        <td>
                            <div class="fw-bold text-dark">Kunjungan Edukasi Museum</div>
                        </td>
                        <td>
                            <span class="badge badge-soft-primary px-3 py-2 rounded-pill">Kegiatan</span>
                        </td>
                        <td class="small text-muted">15 Mar 2024</td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <button class="btn btn-outline-primary btn-sm rounded-circle p-2" title="Edit">
                                    <i data-lucide="edit-2" size="18"></i>
                                </button>
                                <button class="btn btn-outline-danger btn-sm rounded-circle p-2" title="Hapus">
                                    <i data-lucide="trash-2" size="18"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted fw-medium">3</td>
                        <td>
                            <div class="gallery-img-preview rounded" style="width: 120px; height: 80px; overflow: hidden;">
                                <img src="<?php echo $base_url ?? ''; ?>assets/img/facilities/classroom.png" alt="Galeri" class="w-100 h-100 object-fit-cover shadow-sm">
                            </div>
                        </td>
                        <td>
                            <div class="fw-bold text-dark">Ruang Kelas Baru Gedung B</div>
                        </td>
                        <td>
                            <span class="badge badge-soft-info px-3 py-2 rounded-pill">Fasilitas</span>
                        </td>
                        <td class="small text-muted">10 Mar 2024</td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <button class="btn btn-outline-primary btn-sm rounded-circle p-2" title="Edit">
                                    <i data-lucide="edit-2" size="18"></i>
                                </button>
                                <button class="btn btn-outline-danger btn-sm rounded-circle p-2" title="Hapus">
                                    <i data-lucide="trash-2" size="18"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include 'application/views/layout/backend/footer.php'; ?>
