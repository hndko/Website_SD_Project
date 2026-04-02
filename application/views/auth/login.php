<?php
// login.php
// login.php logic is handled via index.php router context

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = connectDB();
    $stmt = $conn->prepare("SELECT `id`, password FROM `admin_users` WHERE `username` = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_id'] = $row['id'];
            header("Location: " . ($base_url ?? '') . "admin");
            exit();
        }
    }
    $error = "Username atau password salah!";
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | SD Cendekia</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $base_url ?? ''; ?>assets/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #0062ff;
            --primary-hover: #004ecc;
            --dark-color: #1e293b;
            --light-color: #f1f5f9;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-color);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .login-card {
            background: white;
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 98, 255, 0.1);
            width: 100%;
            max-width: 400px;
            padding: 40px;
            overflow: hidden;
            position: relative;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--primary-color);
        }

        .brand-logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .brand-logo img {
            height: 60px;
            margin-bottom: 15px;
        }

        .brand-logo h4 {
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 5px;
        }

        .brand-logo p {
            color: #64748b;
            font-size: 0.875rem;
        }

        .form-label {
            font-weight: 600;
            color: var(--dark-color);
            font-size: 0.875rem;
        }

        .form-control {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            background-color: white;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(0, 98, 255, 0.1);
            outline: none;
        }

        .btn-login {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            width: 100%;
            margin-top: 10px;
            transition: all 0.2s ease;
        }

        .btn-login:hover {
            background-color: var(--primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 98, 255, 0.2);
        }

        .back-link {
            text-align: center;
            margin-top: 25px;
        }

        .back-link a {
            color: #64748b;
            text-decoration: none;
            font-size: 0.875rem;
            transition: color 0.2s ease;
        }

        .back-link a:hover {
            color: var(--primary-color);
        }
    </style>
</head>

<body>
    <div class="login-card">
        <div class="brand-logo">
            <img src="<?php echo $base_url ?? ''; ?>assets/img/logo.png" alt="SD Cendekia Logo">
            <h4>Admin Login</h4>
            <p>Akses Panel Administrasi SD Cendekia</p>
        </div>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger border-0 small text-center mb-4 py-2" style="border-radius: 10px;"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required autocomplete="username">
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required autocomplete="current-password">
            </div>
            <button type="submit" class="btn-login">Masuk ke Panel</button>
        </form>

        <div class="back-link">
            <a href="<?php echo $base_url ?? ''; ?>"> Kembali ke Website</a>
        </div>
    </div>
</body>

</html>