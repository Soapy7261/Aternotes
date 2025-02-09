<?php
include 'bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/resources/styles/root.css">
    <link rel="stylesheet" href="src/resources/styles/home.css">
</head>
<body>
    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar__left">
                <button id="theme-toggle" class="theme-toggle__button" aria-pressed="false">
                    <span id="theme-icon">Light Mode</span>
                </button>
            </div>
            <div class="navbar__right">
                <a class="navbar__container" href="<?php echo htmlspecialchars(urlHandler('src/resources/views/public/home.php')); ?>">
                    <button class="navbar__button">
                        <span class="navbar_button--paddingEven">Log in</span>
                    </button>
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div class="body__header">
            <div class="hero__animation">
                <img src="src/resources/images/logo_green.png" class="body__header__image" alt="Logo">
            </div>
            <h2 class="hero__tagline">Tools for the people, by Aternos moderators.</h2>
            <div class="body__header__cards">
                <div class="body__header__card">
                    <h3>Guides</h3>
                    <p>A central location for helpful and factual community-driven guides, fact-checked by reliable members.</p>
                </div>
                <div class="body__header__card body__header__card--central">
                    <h3>A4M Team</h3>
                    <p>Get to know the team behind A4M and the Aternos discord's moderation and support.</p>
                </div>
                <div class="body__header__card">
                    <h3>Resources</h3>
                    <p>Discover Aternos and exaroton from another angle through our information and facts.</p>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const themeToggle = document.getElementById('theme-toggle');
            const themeIcon = document.getElementById('theme-icon');
            const body = document.body;

            const darkMode = localStorage.getItem('darkMode');
            if (darkMode === 'enabled') {
                body.classList.add('dark-mode');
                themeIcon.textContent = 'Dark Mode';
                themeToggle.setAttribute('aria-pressed', 'true');
            }

            themeToggle.addEventListener('click', () => {
                body.classList.toggle('dark-mode');
                const isDarkMode = body.classList.contains('dark-mode');
                themeIcon.textContent = isDarkMode ? 'Dark Mode' : 'Light Mode';
                localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
                themeToggle.setAttribute('aria-pressed', isDarkMode.toString());
            });
        });
    </script>
</body>
</html>