<!DOCTYPE html>

<html lang="en">

    <?php
    // include page header template
    include('header.php');
    // snippet builds query, executes it, and stores in $result
    // check $_GET to see if id (#) was passed to query string
    if (isset($_GET['ID'])) {
        $sql = "SELECT * FROM Customers WHERE Customers.`ID` = " . $_GET['ID'] . ";";
    }
    // if no id was passed in $query string, list all
    else{
        $sql = "SELECT * FROM Customers ORDER BY 'ID';";
    }
    // call script to perform query and store in $result
    include('query_server.php');
    ?>

    <body>
        <div class="jumbotron"><a href="index.php">Classic Models dB:</a> Customers</div>
        <div class="container">
            <table class="table table-striped table-hover table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
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
                            echo "<td>" . $row["ID"] . "</td>";
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
