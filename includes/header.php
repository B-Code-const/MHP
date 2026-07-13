<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'MindSpace'; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo" style="width: 20%;">
        <nav>
            <ul>
                <li><a href="index.php" class="<?php echo ($active_page ?? '') === 'home' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="resources.php" class="<?php echo ($active_page ?? '') === 'resources' ? 'active' : ''; ?>">Resources</a></li>
                <li><a href="journal.php" class="<?php echo ($active_page ?? '') === 'journal' ? 'active' : ''; ?>">Journal</a></li>
                <li><a href="breathe.php" class="<?php echo ($active_page ?? '') === 'breathe' ? 'active' : ''; ?>">Breathe</a></li>
                <li><a href="summary.php" class="<?php echo ($active_page ?? '') === 'summary' ? 'active' : ''; ?>">Summary</a></li>
            </ul>
        </nav>
    </header>
