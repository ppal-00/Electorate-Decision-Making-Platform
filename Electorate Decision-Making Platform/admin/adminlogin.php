<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
        }

        .form-wrapper {
            width: 100%;
        }

        .form-header {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .form-header button {
            background: none;
            border: none;
            font-size: 18px;
            padding: 10px 20px;
            cursor: pointer;
            transition: color 0.3s, border-bottom 0.3s;
            color: #888;
        }

        .form-header button.active {
            color: #333;
            border-bottom: 2px solid #6e8efb;
        }

        .form-container {
            width: 100%;
        }

        .form {
            display: none;
            animation: fadeIn 0.5s;
        }

        .form.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            position: relative;
        }

        .form-title::after {
            content: '';
            width: 50px;
            height: 3px;
            background: #6e8efb;
            display: block;
            margin: 10px auto 0;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .input-group input:focus {
            border-color: #6e8efb;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #6e8efb;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button[type="submit"]:hover {
            background: #a777e3;
        }

        .mt-3 {
            margin-top: 1rem;
        }

        .text-danger {
            color: #dc3545 !important;
        }
    </style>
</head>
<body>

<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['admin_username'])) {
    header("Location: admin_dashboard.php");
    exit;
} elseif (isset($_SESSION['user_username'])) {
    header("Location: ../index.php");
    exit;
}

// Assuming you have a database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "polidb";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL injection prevention
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Hash the password for comparison
    $hashed_password = md5($password);

    // Query to check if the user exists as admin
    $sql_admin = "SELECT * FROM admins WHERE username='$username' AND password='$hashed_password'";
    $result_admin = $conn->query($sql_admin);

    // Query to check if the user exists as regular user
    $sql_user = "SELECT * FROM users WHERE name='$username' AND password='$hashed_password'";
    $result_user = $conn->query($sql_user);

    if ($result_admin->num_rows == 1) {
        // Admin authenticated, set session variables
        $_SESSION['admin_username'] = $username;
        header("Location: admin_dashboard.php"); // Redirect to admin dashboard
        exit;
    } elseif ($result_user->num_rows == 1) {
        // User authenticated, set session variables
        $_SESSION['user_username'] = $username;
        header("Location: ../index.php"); // Redirect to user dashboard
        exit;
    } else {
        // Authentication failed
        $error_message = "Invalid username or password.";
    }
}

$conn->close();
?>

<div class="container mt-5">
    <div class="form-wrapper">
        <div class="form-header">
            <button id="loginBtn" class="active">Login</button>
            <button id="registerBtn">Register</button>
        </div>
        <div class="form-container">
            <form id="loginForm" class="form active" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h2 class="form-title">Login</h2>
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <?php if (isset($error_message)) { ?>
                    <p class="mt-3 text-danger"><?php echo $error_message; ?></p>
                <?php } ?>
            </form>
            
            <form id="registerForm" class="form" action="register.php" method="post">
                <h2 class="form-title">Register</h2>
                <div class="input-group">
                    <label for="registerName">Name:</label>
                    <input type="text" id="registerName" name="registerName" class="form-control" required>
                </div>
                <div class="input-group">
                    <label for="registerEmail">Email:</label>
                    <input type="email" id="registerEmail" name="registerEmail" class="form-control" required>
                </div>
                <div class="input-group">
                    <label for="registerPassword">Password:</label>
                    <input type="password" id="registerPassword" name="registerPassword" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const loginForm = document.getElementById("loginForm");
        const registerForm = document.getElementById("registerForm");
        const loginBtn = document.getElementById("loginBtn");
        const registerBtn = document.getElementById("registerBtn");

        loginBtn.addEventListener("click", function() {
            loginForm.classList.add("active");
            registerForm.classList.remove("active");
            loginBtn.classList.add("active");
            registerBtn.classList.remove("active");
        });

        registerBtn.addEventListener("click", function() {
            registerForm.classList.add("active");
            loginForm.classList.remove("active");
            registerBtn.classList.add("active");
            loginBtn.classList.remove("active");
        });
    });
</script>
</body>
</html>
