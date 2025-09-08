<?php
include 'config.php';
requireLogin();

$students = getStudents();
$pageTitle = 'Students List';
include 'header.php';
?>

<div class="students-container">
    <div class="page-header">
        <h2>📋 Registered Students</h2>
        <a href="register.php" class="btn btn-primary">Register New Student</a>
    </div>
    
    <?php if (empty($students)): ?>
        <div class="empty-state">
            <div class="empty-icon">📚</div>
            <h3>No Students Registered Yet</h3>
            <p>Start by registering your first student!</p>
            <a href="register.php" class="btn btn-primary">Register Student</a>
        </div>
    <?php else: ?>
        <div class="students-count">
            <p>Total Students: <strong><?php echo count($students); ?></strong></p>
        </div>
        
        <div class="students-grid">
            <?php foreach ($students as $student): ?>
                <div class="student-card">
                    <div class="student-avatar">
                        <?php echo strtoupper(substr($student['name'], 0, 1)); ?>
                    </div>
                    <div class="student-info">
                        <h3><?php echo htmlspecialchars($student['name']); ?></h3>
                        <div class="student-details">
                            <p><strong>Age:</strong> <?php echo htmlspecialchars($student['age']); ?> years</p>
                            <p><strong>Email:</strong> <?php echo htmlspecialchars($student['email']); ?></p>
                            <p><strong>Course:</strong> <?php echo htmlspecialchars($student['course']); ?></p>
                            <p><strong>Registered:</strong> <?php echo htmlspecialchars($student['date']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>