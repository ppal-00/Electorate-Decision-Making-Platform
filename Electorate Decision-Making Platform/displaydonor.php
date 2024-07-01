<!DOCTYPE HTML>
<html>
<head>
    <title>Electoral Bond - Party Wise (Highest to Lowest)</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/w3.css" rel="stylesheet"/>
    <link href="css/styles.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
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
            width: 70%;
            margin: auto;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "polidb";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all data from the donations table
$sql = "SELECT * FROM donations";
$result = $conn->query($sql);
?>
<header>
    <a href="admin_dashboard.php">A Digital India Initiative</a>
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

<div class="container">
    <h2>Donations</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Donor Name</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["donor"] . "</td>";
                    echo "<td>" . $row["amount"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No data available</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
