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
    <title>Electoral Bond - Party Wise</title>
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
            max-width: 95%;
            overflow-x: auto; /* Allow horizontal scroll if needed */
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

        @media screen and (max-width: 600px) {
            table {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <?php
    include("header.html");
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

    if (!$result) {
        die("Error fetching data: " . $conn->error);
    }
    ?>
    
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
<?php include("includes/footer.php");?>
</body>
</html>
