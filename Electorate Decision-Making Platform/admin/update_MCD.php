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
    <title>MCD Elections</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/w3.css" rel="stylesheet"/>
    <link href="../css/styles.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet"/>
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
    include("../includes/adminheader.php");

    // Database connection parameters
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

    // Insert candidate data if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $candidate_name = $_POST['candidate_name'];
        $party = $_POST['party'];
        $criminal_cases = $_POST['criminal_cases'];
        $education = $_POST['education'];
        $age = $_POST['age'];
        $total_assets = $_POST['total_assets'];
        $liabilities = $_POST['liabilities'];
        // $constituency = $_POST['constituency'];
        $zone = $_POST['zone'];

        // Prepare SQL statement to insert data into the candidates table
        $sql = "INSERT INTO candidatesMCD (candidate_name, party, criminal_cases, education, age, total_assets, liabilities, zone)
                VALUES ('$candidate_name', '$party', '$criminal_cases', '$education', '$age', '$total_assets', '$liabilities','$zone')";

        if ($conn->query($sql) === TRUE) {
            echo "Candidate details inserted successfully";
            header("location:admin_dashboard.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
    
    <div class="container">
        <h2>Add Candidate</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="candidate_name">Candidate Name:</label>
                <input type="text" id="candidate_name" name="candidate_name" required>
            </div>
            <div class="form-group">
                <label for="party">Party:</label>
                <input type="text" id="party" name="party" required>
            </div>
            <div class="form-group">
                <label for="criminal_cases">Criminal Cases:</label>
                <input type="number" id="criminal_cases" name="criminal_cases" required>
            </div>
            <div class="form-group">
                <label for="education">Education:</label>
                <input type="text" id="education" name="education" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="total_assets">Total Assets:</label>
                <input type="text" id="total_assets" name="total_assets" required>
            </div>
            <div class="form-group">
                <label for="liabilities">Liabilities:</label>
                <input type="text" id="liabilities" name="liabilities" required>
            </div>
            <!-- <div class="form-group">
                <label for="constitiency">Constituency:</label>
                <input type="text" id="constituency" name="constituency" required>
            </div> -->
            <div class="form-group">
                <label for="zone">Zone:</label>
                <select id="zone" name="zone" required>
                    <option value="central">central</option>
                    <option value="east">east</option>
                    <option value="new delhi">new delhi</option>
                    <option value="north">north</option>
                    <option value="north-east">north-east</option>
                    <option value="north-west">north-west</option>
                    <option value="shahdara">shahdara</option>
                    <option value="south">south</option>
                    <option value="south-east">south-east</option>
                    <option value="south-west">south-west</option>
                    <option value="west">west</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="zone">Zone:</label>
                <input type="text" id="zone" name="zone" required>
            </div> -->

            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
