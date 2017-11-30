<!DOCTYPE html>

<?php

// Enter server and user authentication information
$servername = "localhost";
$username = "classicmodels_app";
$password = "usfdh_student";
$dbname = "classicmodels";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form the query
$sql = "SELECT * FROM customers ORDER BY customers.customerNumber;";

// Send query to server and store returned data in $result
$result = $conn->query($sql);
?>

<html lang="en">
    <head>
        <title>Classic Models MySQL-PHP</title>
        <!-- include Bootstrap CSS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    </head>

    <body>
        <div class="jumbotron"><a href="index.php">Classic Models dB:</a> Customers</div>
        <div class="container">
            <table class="table table-striped table-hover table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Country</th>
                        <th>Credit Limit</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        // loop through each record, $row
                        while($row = $result->fetch_assoc()) {
                            // start a new table row for each record
                            echo "<tr>";
                            // write out each field as a cell
                            echo "<td>" . $row["customerNumber"] . "</td>";
                            echo "<td>" . $row["customerName"] . "</td>";
                            echo "<td>" . $row["contactFirstName"] . " " . $row["contactLastName"] . "</td>";
                            echo "<td>" . $row["phone"] . "</td>";
                            echo "<td>" . $row["addressLine1"] . " " . $row["addressLine2"] . "</td>";
                            echo "<td>" . $row["city"] . "</td>";
                            echo "<td>" . $row["state"] . "</td>";
                            echo "<td>" . $row["postalCode"] . "</td>";
                            echo "<td>" . $row["country"] . "</td>";
                            echo "<td>" . $row["creditLimit"] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                </tbody>
            </table>
        </div>
        <!-- include bootstrap javascript -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>

<?php
// close the connection to the database
$conn->close();
?>
