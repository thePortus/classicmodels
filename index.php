<!DOCTYPE html>
<!-- You can use HTML just like normal on a .php document -->
<html lang="en">

    <!-- You can also include another PHP file, which will run where you include
    it, just as if you had copied and pasted it. It is an easy way to make
    templates so you don't have to repeat yourself over multiple documents.

    This includes the header, including title and CSS dependencies-->
    <?php include('header.php'); ?>

    <body>

        <!-- You can insert a PHP snippet anywhere, which can dynamically
        generate html. The snipped below just prints the headline with 'echo'-->
        <?php
            # echo is even more powerful when used with variables and loops
            echo "<div class=\"jumbotron\"><a href=\"index.php\">Classic Models Database</a> - PHP Example Pages</div>"
        ?>

        <div class="container">
            <ul>
                <li><a href="employees.php">employees.php</a></li>
                <li><a href="products.php">products.php</a></li>
                <li><a href="customers.php">customers.php</a></li>
            </ul>
        </div>

        <!-- Includes Bootstrap JavaScript dependencies -->
        <?php include('footer.php'); ?>
    </body>
</html>
