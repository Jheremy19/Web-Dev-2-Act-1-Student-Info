<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <h1><a href="index.php">Student Portal</a></h1>
            <?php if (isLoggedIn()): ?>
                <nav class="main-nav">
                    <ul>
                        <li><a href="index.php" <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'class="active"' : ''; ?>>Home</a></li>
                        <li><a href="register.php" <?php echo basename($_SERVER['PHP_SELF']) == 'register.php' ? 'class="active"' : ''; ?>>Register</a></li>
                        <li><a href="students.php" <?php echo basename($_SERVER['PHP_SELF']) == 'students.php' ? 'class="active"' : ''; ?>>Students</a></li>
                        <li><a href="about.php" <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'class="active"' : ''; ?>>About</a></li>
                        <li><a href="contact.php" <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'class="active"' : ''; ?>>Contact</a></li>
                        <li><a href="logout.php" class="logout-btn">Logout</a></li>
                    </ul>
                </nav>
                <div class="user-info">
                    Welcome, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>
                </div>
            <?php endif; ?>
        </div>
    </header>
    <main class="main-content">
        <div class="container">