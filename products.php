<!DOCTYPE html>

<html lang="en">

    <?php
    // include page header template
    include('header.php');
    // snippet builds query, executes it, and stores in $result
    // check $_GET to see if id (#) was passed to query string
    if (isset($_GET['ID'])) {
        $sql = "SELECT * FROM Products WHERE Products.`ID` = " . $_GET['ID'] . ";";
    }
    // if no id was passed in $query string, list all
    else{
        $sql = "SELECT * FROM Products ORDER BY 'ID';";
    }
    // call script to perform query and store in $result
    include('query_server.php');
    ?>

    <body>
        <div class="jumbotron"><a href="index.php">Classic Models dB:</a> Products</div>
        <div class="container scrollTable">
            <table class="table table-striped table-hover table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Description</th>
                        <th>Vendor</th>
                        <th>Product Line</th>
                        <th>Line Description</th>
                        <th>Scale</th>
                        <th>Buy Price</th>
                        <th>MSRP</th>
                        <th>Quantity in Stock</th>
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
                            echo "<td>" . $row["Product"] . "</td>";
                            echo "<td>" . $row["Description"] . "</td>";
                            echo "<td>" . $row["Vendor"] . "</td>";
                            echo "<td>" . $row["Product Line"] . "</td>";
                            echo "<td>" . $row["Line Description"] . "</td>";
                            echo "<td>" . $row["Scale"] . "</td>";
                            echo "<td>" . $row["Buy Price"] . "</td>";
                            echo "<td>" . $row["MSRP"] . "</td>";
                            echo "<td>" . $row["Quantity in Stock"] . "</td>";
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
