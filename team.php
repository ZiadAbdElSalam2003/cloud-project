<!DOCTYPE html>
<html>
<head>
    <title>Team Data</title>
    <style>
        body {
            background-image: url('pexels.jpg'); /* Specify the filename of the background image */
            background-size: cover; /* Cover the entire background */
            background-repeat: no-repeat; /* Prevent background image from repeating */
            font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', 'sans-serif';
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }

        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
    
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Team Data</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Age</th>
            <th>CGPA</th>
        </tr>
        <?php
        $servername = "db";
        $username = "root";
        $password = "root";
        $dbname = "mydatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Select data from database
        $sql = "SELECT * FROM team";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["name"] . "</td><td>" . $row["id"] . "</td><td>" . $row["age"] . "</td><td>" . $row["cgpa"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>