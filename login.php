<?php
include 'config.php';

$error = '';
$success = '';

// Redirect to index if already logged in
if (isLoggedIn()) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    
    if (empty($username) || empty($password)) {
        $error = 'Please fill in all fields.';
    } elseif ($username === ADMIN_USERNAME && $password === ADMIN_PASSWORD) {
        $_SESSION['username'] = $username;
        $_SESSION['login_time'] = time();
        header('Location: index.php');
        exit();
    } else {
        $error = 'Invalid username or password.';
    }
}

$pageTitle = 'Login';
include 'header.php';
?>

<div class="auth-container">
    <div class="auth-card">
        <h2>🔐 Login to Student Portal</h2>
        
        <?php if ($error): ?>
            <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <form method="POST" class="auth-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        
        <div class="auth-help">
            <p><strong>Demo Credentials:</strong></p>
            <p>Username: admin<br>Password: 1234</p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>