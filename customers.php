<!DOCTYPE html>

<?php
// ensure that all output is utf-8 unicode character set
header('Content-Type: text/html; charset=utf-8');

// form the query
$sql = "SELECT * FROM Employees ORDER BY '#';";

// call script to perform query and store in $result
include('query.php');
?>

<html lang="en">

    <?php include('header.php'); ?>

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

        <?php include('footer.php'); ?>

    </body>
</html>

<?php
// close the connection to the database
$conn->close();
?>
