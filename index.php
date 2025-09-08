<?php
include 'config.php';
requireLogin();

$pageTitle = 'Dashboard';
include 'header.php';

$totalStudents = count(getStudents());
$loginTime = isset($_SESSION['login_time']) ? date('M j, Y g:i A', $_SESSION['login_time']) : 'Unknown';
?>

<div class="dashboard">
    <div class="welcome-section">
        <h1>Welcome to Student Portal Dashboard</h1>
        <p class="lead">Manage student registrations and information from this central hub.</p>
    </div>
    
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">👥</div>
            <div class="stat-content">
                <h3><?php echo $totalStudents; ?></h3>
                <p>Total Students</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">🕒</div>
            <div class="stat-content">
                <h3><?php echo $loginTime; ?></h3>
                <p>Last Login</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">📚</div>
            <div class="stat-content">
                <h3><?php echo date('M j, Y'); ?></h3>
                <p>Today's Date</p>
            </div>
        </div>
    </div>
    
    <div class="quick-actions">
        <h2>Quick Actions</h2>
        <div class="action-grid">
            <a href="register.php" class="action-card">
                <div class="action-icon">➕</div>
                <h3>Register New Student</h3>
                <p>Add a new student to the system</p>
            </a>
            
            <a href="students.php" class="action-card">
                <div class="action-icon">📋</div>
                <h3>View All Students</h3>
                <p>Browse registered student records</p>
            </a>
            
            <a href="about.php" class="action-card">
                <div class="action-icon">ℹ️</div>
                <h3>About Portal</h3>
                <p>Learn more about this system</p>
            </a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>