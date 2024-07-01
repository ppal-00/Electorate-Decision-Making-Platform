<?php
include('../includes/header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1014965724"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="../js/script.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-1014965724');
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>Lok Sabha Elections 2024</title>
    <meta name="description" content="It provides criminal and financial background information on candidates, MPs and MLAs contesting in elections.It also has information on income and expenditure of political parties.">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/w3.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet"/>
    <link href="../css/styles.css" rel="stylesheet"/>
    <link href="../css/modal.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        /* #header {
            /* Your header styles 
        } */
        .w3-panel {
            padding: 10px;
            margin-bottom: 20px;
        }
        .w3-leftbar {
            border-left: 6px solid #ddd;
        }
        .w3-light-gray {
            background-color: #f5f5f5;
        }
        .w3-khaki {
            background-color: #f0e68c;
        }
        .container {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-x: auto; /* Add horizontal scroll for small screens */
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tbody tr:hover {
            background-color: #ddd;
        }
        .no-data {
            text-align: center;
            color: #666;
            font-style: italic;
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
$sql = "SELECT * FROM candidates where constituency='lok sabha-south delhi' and zone='lok sabha'" ;
// $sql = "SELECT * FROM candidates where zone='central'" ;
$result = $conn->query($sql);

if (!$result) {
    die("Error fetching data: " . $conn->error);
}
?>
<!-- <div id="header"></div> -->
<!--Main Content-->

<div class='w3-panel w3-leftbar w3-light-gray'>
    <a href="../index.php">Home</a>
    &rarr; <b>Lok Sabha Elections 2024</b>
    &rarr; <b>South Delhi</b>
</div>
<div class='w3w3-leftbar w3-khaki'>
    <h2>South Delhi</h2>
</div>

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
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td><a href='profile.php?name=" . urlencode($row["candidate_name"]) . "'>" . htmlspecialchars($row["candidate_name"]) . "</a></td>";
            // echo "<td>" . $row["candidate_name"] . "</td>";
            echo "<td><a href='party_profile.php?party=" . urlencode($row["party"]) . "'>" . htmlspecialchars($row["party"]) . "</a></td>";
            // echo "<td>" . $row["party"] . "</td>";
            echo "<td>" . $row["criminal_cases"] . "</td>";
            echo "<td>" . $row["education"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>" . $row["total_assets"] . "</td>";
            echo "<td>" . $row["liabilities"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8' class='no-data'>No candidates available</td></tr>";
    }
    ?>
    </tbody>
</table>
</div>
<?php include('../includes/footer.php'); ?>
<!-- <div id="footer"></div> -->
<script src="https://www.myneta.info/lib/js/hs.js.php"></script>
</body>
</html>

