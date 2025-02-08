<?php
include 'src/Controllers/UrlController.php';
include 'src/Controllers/ConfigController.php';

//echo phpinfo()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="src/resources/styles/home.css">
    <link rel="stylesheet" href="src/resources/styles/root.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav class="navbar">
        <a class="navbar__container" href="src/resources/views/public/home.php">
            <button class="navbar__button">
                <span class="navbar_button--paddingEven">Log in</span>
            </button>
        </a>
    </nav>
    <div class="body__header">
        <img src="src/resources/images/logo_green.png" class="body__header__image">
        <h2>tools for the people, by Aternos moderators.</h2>
        <div class="body__header__cards">
            <div class="body__header__card">
                <h3>Guides</h3>
                <p>A central location for helpful and factual community-driven guides, fact-checked by reliable members</p>
            </div>
            <div class="body__header__card body__header__card--central">
                <h3>A4M Team</h3>
                <p>Get to know the team behind A4M and the Aternos discord's moderation and support</p>
            </div>
            <div class="body__header__card">
                <h3>Resources</h3>
                <p>Discover Aternos and exaroton from another angle through our information and facts.</p>
            </div>
        </div>
    </div>
</body>
</html>