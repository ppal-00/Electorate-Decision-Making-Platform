<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['admin_username'])) {
    header("Location: admin_login.php");
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
    $party_name = $_POST['party_name'];
    $amount = $_POST['amount'];

    // SQL injection prevention
    $party_name = mysqli_real_escape_string($conn, $party_name);
    $amount = mysqli_real_escape_string($conn, $amount);

    // Insert data into database
    $insert_query = "INSERT INTO party_wise_list (party_name, amount) VALUES ('$party_name', '$amount')";
    if ($conn->query($insert_query) === TRUE) {
        $success_message = "Party-wise details inserted successfully.";
        header("location:displaypartywiselist.php");
    } else {
        $error_message = "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Party-wise List Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin_dashboard">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Party-wise List Form</div>
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label for="party_name">Party Name:</label>
                            <input type="text" class="form-control" id="party_name" name="party_name" required>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount:</label>
                            <input type="number" class="form-control" id="amount" name="amount" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php if(isset($error_message)) { ?>
                        <p class="mt-3 text-danger"><?php echo $error_message; ?></p>
                    <?php } ?>
                    <?php if(isset($success_message)) { ?>
                        <p class="mt-3 text-success"><?php echo $success_message; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
