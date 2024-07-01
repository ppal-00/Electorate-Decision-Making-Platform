<!DOCTYPE HTML>
<html>
<head>
    <title>Electoral Bond - Party Wise (Highest to Lowest)</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/w3.css" rel="stylesheet"/>
    <link href="../css/styles.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet"/>
    <style>
        /* Styles for header */
        header {
            background-color: #c66c27;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header p {
            margin: 0;
            font-weight: bold;
        }

        .container {
            width: 50%;
            margin: auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php
include("../includes/session.php");
$host = "localhost";
$username = "root";
$password = "";
$database = "polidb";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donor = $_POST["donor"];
    $amount = $_POST["amount"];

    $sql = "INSERT INTO donations (donor, amount) VALUES ('$donor', '$amount')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("location:displaydonor.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<?php include("../includes/adminheader.php") ?>
<!-- <header>
    <p>A Digital India Initiative</p>
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="social-icons">
                <a href="https://www.facebook.com/"><img src="img/logo/fb-icon.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/"><img src="img/logo/insta.png" alt="Instagram"></a>
                <a href="https://twitter.com/"><img src="img/logo/X-icon.png" alt="Twitter"></a>
            </div>
        </div>
    </div>
</header>


<div class='w3-bar w3-border w3-light-gray'>
    <div class="sub-header">
        <img src="img/logo/FAIR POLITICIAN.png" alt="Logo" style="height: 50px;">
        <img src="img/logo/logo2.jpeg" alt="Logo" style="height: 50px; float: left">
        <a class='w3-bar-item w3-button' href='admin_dashboard'>Home</a>
       
</div> -->

<div class="container mt-5">
    <h2>Add Donation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
            <label for="donor">Donor Name:</label>
            <input type="text" class="form-control" id="donor" name="donor" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" class="form-control" id="amount" name="amount" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
