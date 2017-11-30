<!DOCTYPE html>

<html lang="en">

    <?php
    // include page header template
    include('templates/header.php');
    // snippet builds query, executes it, and stores in $result
    // check $_GET to see if id (#) was passed to query string
    if (isset($_GET['ID'])) {
        $sql = "SELECT * FROM Employees WHERE Employees.`ID` = " . $_GET['ID'] . ";";
    }
    // if no id was passed in $query string, list all
    else{
        $sql = "SELECT * FROM Employees ORDER BY 'ID' ASC;";
    }
    // call script to perform query and store in $result
    include('templates/query_server.php');
    ?>

    <body>
        <div class="jumbotron"><a href="index.php">Classic Models dB:</a>Employees</div>
        <div class="container scrollTable">
            <table class="table table-striped table-hover table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Supervisor</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Country</th>
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
                            echo "<td>" . $row["First"] . " " . $row["Last"] . "</td>";
                            echo "<td>" . $row["Title"] . "</td>";
                            echo "<td>" . $row["Supervisor"] . "</td>";
                            echo "<td>" . $row["Email"] . "</td>";
                            echo "<td>" . $row["Phone"] . "</td>";
                            echo "<td>" . $row["Address"] . " " . $row["Address 2"] . "</td>";
                            echo "<td>" . $row["City"] . "</td>";
                            echo "<td>" . $row["State"] . $row["Territory"] . "</td>";
                            echo "<td>" . $row["Zip"] . "</td>";
                            echo "<td>" . $row["Country"] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                </tbody>
            </table>
        </div>

        <?php include('templates/footer.php'); ?>

    </body>
</html>

<?php

?>
