<!DOCTYPE html>

<?php
// ensure that all output is utf-8 unicode character set
header('Content-Type: text/html; charset=utf-8');

// call script to check the query string and story results in $query
include('query_string.php');

// if no id was passed in $query string, list all
if(!array_key_exists('#', $query)) {
    $sql = "SELECT * FROM Customers ORDER BY '#';";
}
// if id was passed in $query string, filter to that item
elseif {
    $sql = "SELECT * FROM Customers WHERE Customers.`#` == " . $query['#'] . ";";
}
// call script to perform query and store in $result
include('query_server.php');
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
                        <th>Credit Limit</th>
                        <th>Contact</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Country</th>
                        <th>Sales Rep.</th>
                        <th>Sales Rep. Phone</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        // loop through each record, $row
                        while($row = $result->fetch_assoc()) {
                            // start a new table row for each record
                            echo "<tr>";
                            // write out each field as a cell
                            echo "<td>" . $row["#"] . "</td>";
                            echo "<td>" . $row["Name"] . "</td>";
                            echo "<td>" . $row["Credit Limit"] . "</td>";
                            echo "<td>" . $row["Contact First"] . " " . $row["Contact Last"] . "</td>";
                            echo "<td>" . $row["Phone"] . "</td>";
                            echo "<td>" . $row["Address"] . " " . $row["Address 2"] . "</td>";
                            echo "<td>" . $row["City"] . "</td>";
                            echo "<td>" . $row["State"] . "</td>";
                            echo "<td>" . $row["Zip"] . "</td>";
                            echo "<td>" . $row["Country"] . "</td>";
                            echo "<td>" . $row["Sales Rep."] . "</td>";
                            echo "<td>" . $row["Sales Rep. Phone"] . "</td>";
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
