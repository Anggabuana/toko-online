<?php
 include 'koneksi.php';

 if (isset($_POST['login'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
   $login = mysqli_query($koneksi,"select * admin='$username' and password=$password ");
   if (mysqli_num_rows($login) > 0) {
    header("location: dashboard.php");
    }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <div id="error-message" class="error"></div>
        <form id="loginForm">
            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Password" required>
            <button type="button" onclick="login()">Login</button>
        </form>
    </div>

    <script>
        // Simulasi database pengguna
        const users = {
            'user1': 'password123',
            'user2': 'mypassword'
        };

        function login() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('error-message');
            
            if (users[username] && users[username] === password) {
                errorMessage.textContent = '';
                alert('Login successful!');
                // Redirect or other actions after successful login
                // window.location.href = 'home.html'; // Example redirect
            } else {
                errorMessage.textContent = 'Invalid username or password';
            }
        }
    </script>
</body>
</html>
