<?php
include 'config.php';
requireLogin();

$pageTitle = 'About';
include 'header.php';
?>

<div class="content-container">
    <div class="about-section">
        <h2>ℹ️ About Student Portal</h2>
        
        <div class="about-content">
            <div class="about-card">
                <h3>🎯 Purpose</h3>
                <p>The Student Portal is a comprehensive web application built with PHP that demonstrates fundamental web development concepts including session management, form handling, input validation, and file storage.</p>
            </div>
            
            <div class="about-card">
                <h3>✨ Features</h3>
                <ul>
                    <li>Secure user authentication with PHP sessions</li>
                    <li>Student registration with form validation</li>
                    <li>File-based data storage system</li>
                    <li>Responsive design with modern CSS</li>
                    <li>Reusable header and footer components</li>
                    <li>Interactive JavaScript enhancements</li>
                </ul>
            </div>
            
            <div class="about-card">
                <h3>🛠️ Technologies Used</h3>
                <div class="tech-grid">
                    <div class="tech-item">
                        <strong>PHP 7+</strong>
                        <span>Server-side scripting</span>
                    </div>
                    <div class="tech-item">
                        <strong>HTML5</strong>
                        <span>Semantic markup</span>
                    </div>
                    <div class="tech-item">
                        <strong>CSS3</strong>
                        <span>Modern styling & animations</span>
                    </div>
                    <div class="tech-item">
                        <strong>JavaScript</strong>
                        <span>Interactive functionality</span>
                    </div>
                </div>
            </div>
            
            <div class="about-card">
                <h3>🔐 Security Features</h3>
                <ul>
                    <li>Session-based authentication</li>
                    <li>Input sanitization and validation</li>
                    <li>XSS prevention with htmlspecialchars()</li>
                    <li>Protected routes requiring login</li>
                    <li>Secure file handling</li>
                </ul>
            </div>
        </div>
        
        <div class="version-info">
            <p><strong>Version:</strong> 1.0.0</p>
            <p><strong>Last Updated:</strong> <?php echo date('F j, Y'); ?></p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>