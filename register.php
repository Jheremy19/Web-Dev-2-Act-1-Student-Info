<?php
include 'config.php';
requireLogin();

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $age = trim($_POST['age'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $course = trim($_POST['course'] ?? '');
    
    // Validation
    if (empty($name) || empty($age) || empty($email) || empty($course)) {
        $error = 'Please fill in all fields.';
    } elseif (!is_numeric($age) || $age < 16 || $age > 100) {
        $error = 'Please enter a valid age between 16 and 100.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        // Save student data
        saveStudent($name, $age, $email, $course);
        $success = "Student '{$name}' has been successfully registered!";
        
        // Clear form data after successful submission
        $_POST = [];
    }
}

$pageTitle = 'Register Student';
include 'header.php';
?>

<div class="form-container">
    <div class="form-card">
        <h2>📝 Register New Student</h2>
        
        <?php if ($error): ?>
            <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <div class="alert alert-success">
                <?php echo htmlspecialchars($success); ?>
                <a href="students.php" class="btn btn-link">View All Students</a>
            </div>
        <?php endif; ?>
        
        <form method="POST" class="registration-form">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" min="16" max="100" value="<?php echo htmlspecialchars($_POST['age'] ?? ''); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="course">Course:</label>
                <select id="course" name="course" required>
                    <option value="">Select a course...</option>
                    <option value="Computer Science" <?php echo ($_POST['course'] ?? '') === 'Computer Science' ? 'selected' : ''; ?>>Computer Science</option>
                    <option value="Information Technology" <?php echo ($_POST['course'] ?? '') === 'Information Technology' ? 'selected' : ''; ?>>Information Technology</option>
                    <option value="Business Administration" <?php echo ($_POST['course'] ?? '') === 'Business Administration' ? 'selected' : ''; ?>>Business Administration</option>
                    <option value="Engineering" <?php echo ($_POST['course'] ?? '') === 'Engineering' ? 'selected' : ''; ?>>Engineering</option>
                    <option value="Mathematics" <?php echo ($_POST['course'] ?? '') === 'Mathematics' ? 'selected' : ''; ?>>Mathematics</option>
                    <option value="Psychology" <?php echo ($_POST['course'] ?? '') === 'Psychology' ? 'selected' : ''; ?>>Psychology</option>
                    <option value="Other" <?php echo ($_POST['course'] ?? '') === 'Other' ? 'selected' : ''; ?>>Other</option>
                </select>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Register Student</button>
                <a href="index.php" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>