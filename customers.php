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
$sql = "SELECT * FROM customers";

// Send query to server and store returned data in $result
$result = $conn->query($sql);

?>

<html>
    <head>
        <title>Classic Models MySQL-PHP</title>
    </head>

    <body>
        <h1>Classic Models Customers</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th><th>Name</th><th>Contact</th><th>Phone</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>Country</th><th>Credit Limit</th>
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
                        echo "<td>" . $row["creditLimie"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </body>
</html>

<?php
// close the connection to the database
$conn->close();
?>
