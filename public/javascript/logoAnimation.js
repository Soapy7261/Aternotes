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
