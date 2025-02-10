<main>
    <div class="container">
        <div class="login__container">
            <h1 class="login__header">Log in</h1>
            <img class="login__image" src="/src/resources/images/logo_green.png" alt="logo" style="height: 5rem">
            <form id="loginForm" class="login__form" action="" method="post">
                <div class="login__input__container">
                    <label for="username" class="login__label">Username</label>
                    <input type="text" id="username" name="username" class="login__input" required>
                </div>
                <div class="login__input__container">
                    <label for="password" class="login__label">Password</label>
                    <input type="password" id="password" name="password" class="login__input" required>
                </div>
                <button type="submit" class="login__button">Log in</button>
            </form>
        </div>
    </div>
    <script type="module">
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from reloading the page

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            let formData = new FormData();
            formData.append('function', 'userHandler');
            formData.append('username', username);
            formData.append('password', password);

            // AJAX request to submit form data without page reload
            axios.post('/src/Controllers/LoginController.php', formData)
                .then(function (response) {
                    console.log(response.data)
                })
                .catch(function (error) {
                    console.log(error.response.data.error);
                });
        });
    </script>
</main>