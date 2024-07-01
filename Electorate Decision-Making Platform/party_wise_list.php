<!DOCTYPE HTML>
<html>
<head>
    <title>Electoral Bond - Party Wise</title>
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
    </style>
</head>
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "polidb";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM party_wise_list";
$result = $conn->query($sql);
include("header.html");
?>
    

    <div class="container mt-5">
        <h2>Party-wise List</h2>
        <table class="w3-table w3-striped">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Party Name</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["party_name"] . "</td>";
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
