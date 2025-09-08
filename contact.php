<?php
include 'config.php';
requireLogin();

$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $success = 'Thank you for your message! We\'ll get back to you soon.';
}

$pageTitle = 'Contact';
include 'header.php';
?>

<div class="content-container">
    <div class="contact-section">
        <h2>📞 Contact Us</h2>
        
        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
        <?php endif; ?>
        
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <p>We'd love to hear from you! Send us a message and we'll respond as soon as possible.</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">📧</div>
                        <div>
                            <strong>Email</strong>
                            <span>portal@student.edu</span>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📱</div>
                        <div>
                            <strong>Phone</strong>
                            <span>+1 (555) 123-4567</span>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div>
                            <strong>Address</strong>
                            <span>123 Education Street<br>Learning City, LC 12345</span>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">🕒</div>
                        <div>
                            <strong>Office Hours</strong>
                            <span>Mon-Fri: 9:00 AM - 5:00 PM<br>Sat-Sun: Closed</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <form method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <select id="subject" name="subject" required>
                        <option value="">Select a subject...</option>
                        <option value="general">General Inquiry</option>
                        <option value="technical">Technical Support</option>
                        <option value="registration">Registration Issues</option>
                        <option value="feedback">Feedback</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="6" required placeholder="Please describe your inquiry or feedback..."></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>