<?php

session_start();

define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', '1234');

define('STUDENTS_FILE', 'students.txt');

function saveStudent($name, $age, $email, $course) {
    $studentData = date('Y-m-d H:i:s') . " | " . $name . " | " . $age . " | " . $email . " | " . $course . "\n";
    file_put_contents(STUDENTS_FILE, $studentData, FILE_APPEND | LOCK_EX);
}

function getStudents() {
    if (!file_exists(STUDENTS_FILE)) {
        return [];
    }
    
    $students = [];
    $lines = file(STUDENTS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    foreach ($lines as $line) {
        $parts = explode(' | ', $line);
        if (count($parts) >= 5) {
            $students[] = [
                'date' => $parts[0],
                'name' => $parts[1],
                'age' => $parts[2],
                'email' => $parts[3],
                'course' => $parts[4]
            ];
        }
    }
    
    return array_reverse($students);
}

function isLoggedIn() {
    return isset($_SESSION['username']) && $_SESSION['username'] === ADMIN_USERNAME;
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: login.php');
        exit();
    }
}
?>