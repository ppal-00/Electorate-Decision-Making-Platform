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
    include("../includes/session.php");

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
    <header>
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
 
    </div>
    <!--top Content-->
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
