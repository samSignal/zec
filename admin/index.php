<?php
require '../includes/db.php';
require '../includes/functions.php';

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    if (login($pdo, $_POST['username'], $_POST['password'])) {
        header('Location: dashboard.php');
        exit;
    }
    $error = "Invalid credentials";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #f5f5f5;
        }
        .wrapper {
            min-height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            margin: 2rem auto;
        }
        .user-icon {
            width: 80px;
            height: 80px;
            background: #3498db;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
        }
        .user-icon i {
            font-size: 40px;
            color: white;
        }
        .form-control {
            border-radius: 8px;
            padding: 0.8rem 1rem;
            margin-bottom: 1rem;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
        }
        .btn-login {
            background-color: #3498db;
            border: none;
            border-radius: 8px;
            padding: 0.8rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .forgot-password {
            text-align: center;
            margin-top: 1rem;
        }
        .forgot-password a {
            color: #6c757d;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="login-card">
                        <div class="user-icon">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <h3 class="text-center mb-4">User Log in</h3>
                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>
                        <form method="post">
                            <div class="mb-3">
                                <input type="text" name="username" class="form-control" placeholder="User ID" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-login w-100">LOGIN</button>
                            <div class="forgot-password">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>