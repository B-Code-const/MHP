<?php
$page_title = "Home";
$active_page = "home";
include 'includes/header.php';
?>
<?php
// DAILY CHECK IN STREAK
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$today = date('Y-m-d');
$yesterday = date('Y-m-d', strtotime('yesterday'));

if (!isset($_SESSION['last_checkin'])) {
    // First time visiting: start streak at 1
    $_SESSION['last_checkin'] = $today;
    $_SESSION['streak'] = 1;
} else {
    $last_visit = $_SESSION['last_checkin'];
    
    if ($last_visit !== $today) {
        if ($last_visit === $yesterday) {
            // Visited yesterday! Increment streak
            $_SESSION['streak'] = ($_SESSION['streak'] ?? 0) + 1;
        } else {
            // Missed a day: reset streak to 1
            $_SESSION['streak'] = 1;
        }
        // Update last check-in date to today
        $_SESSION['last_checkin'] = $today;
    }
}
?>

<main>
    <h1>Welcome to MindSpace</h1>
    <p>This is the main content area of the home page. Take a moment to reflect on your wellness today.</p>
</main>

<?php
include 'includes/footer.php';
?>
