<!DOCTYPE HTML>
<html>
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1014965724"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-1014965724');
    </script>
    <title>Electoral Bond - Party Wise (Highest to Lowest)</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/w3.css" rel="stylesheet"/>
    <link href="css/styles.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            margin: 20px auto;
            padding: 20px;
            max-width: 800px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "polidb";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all data from the candidates table
$sql = "SELECT * FROM candidates";
$result = $conn->query($sql);

if (!$result) {
    die("Error fetching data: " . $conn->error);
}
?>
<header>
    <a href="admin_dashboard">A Digital India Initiative</a>
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
        <a class='w3-bar-item w3-button' href='/'>Home</a>
        </li><a class='w3-bar-item w3-button' href='#' title='Lok Sabha'>Lok Sabha</a>
        <a class='w3-bar-item w3-button w3-hide-small' href='#' title='State Assemblies'>State Assemblies </a>
        <a class='w3-bar-item w3-button w3-hide-small' href='#' title='Rajya Sabha'>Rajya Sabha</a>
        <a class='w3-bar-item w3-button w3-hide-small' href='#' title='Political Parties'>Political Parties </a>
        <a class='w3-bar-item w3-button w3-hide-small' href='#' title='Electoral Bonds'>Electoral Bonds </a>
        <!-- <a class='w3-bar-item w3-button w3-hide-small' href=https://translate.google.co.in/translate?prev= hp&hl=en&js= y&u=myneta.info&sl= en&tl=hi&history_state0= style='text-decoration: none'>|| माय नेता हिंदी में  ||  </a> -->
        <a class='w3-bar-item w3-button w3-hide-small w3-right' rel='nofollow' target=_blank href='#'>Login </a>
        <a href='javascript:void(0)' class='w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium' onclick='bar_menu()'>&#9776;</a>
    </div>
    
    <div id='ham' class='w3-bar-block w3-hide w3-hide-large w3-hide-medium'>
        <a class='w3-bar-item w3-button' href='#' title='State Assemblies'>State Assemblies </a>
        <a class='w3-bar-item w3-button' href='#' title='Rajya Sabha'>Rajya Sabha</a>
        <a class='w3-bar-item w3-button' href='#' title='Political Parties'>Political Parties </a>
    </div>
</div>

<div class="container">
    <h2>Candidate List</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Candidate Name</th>
                <th>Party</th>
                <th>Criminal Cases</th>
                <th>Education</th>
                <th>Age</th>
                <th>Total Assets</th>
                <th>Liabilities</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["candidate_name"] . "</td>";
                    echo "<td>" . $row["party"] . "</td>";
                    echo "<td>" . $row["criminal_cases"] . "</td>";
                    echo "<td>" . $row["education"] . "</td>";
                    echo "<td>" . $row["age"] . "</td>";
                    echo "<td>" . $row["total_assets"] . "</td>";
                    echo "<td>" . $row["liabilities"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No candidates available</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
