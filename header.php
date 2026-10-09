<?php
$pageTitle = $pageTitle ?? 'Hanin Alibrahim | Software Developer';
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f8f5f1">
    <meta name="description" content="Hanin Alibrahim — software development student interested in C#, web development, sensor technology, games and space engineering.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body id="top">

<header class="site-header">
    <div class="nav-wrap">
        <a class="brand" href="index.php" aria-label="Hanin Alibrahim home">
            <span class="brand-mark">H</span>
            <span>hanin<span class="brand-dot">.</span></span>
        </a>

        <nav class="main-nav" id="main-nav" aria-label="Main navigation">
            <a href="index.php" class="<?= $currentPage === 'index.php' ? 'active' : '' ?>">Home</a>
            <a href="about.php" class="<?= $currentPage === 'about.php' ? 'active' : '' ?>">About</a>
            <a href="projects.php" class="<?= $currentPage === 'projects.php' ? 'active' : '' ?>">Projects</a>
            <a href="skills.php" class="<?= $currentPage === 'skills.php' ? 'active' : '' ?>">Skills</a>
            <a class="nav-contact <?= $currentPage === 'contact.php' ? 'active' : '' ?>" href="contact.php">
                Contact <span aria-hidden="true">↗</span>
            </a>
        </nav>

        <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="main-nav">☰</button>
    </div>
</header>