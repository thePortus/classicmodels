<!DOCTYPE html>
<!-- You can use HTML just like normal on a .php document -->
<html lang="en">
    <head>
        <title>Classic Models MySQL-PHP</title>
        <!-- include Bootstrap CSS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    </head>

    <body>
        <!-- You can insert a PHP snippet anywhere, which can dynamically
        generate html. The snipped below just prints the headline with 'echo'-->
        <?php
            # echo is even more powerful when used with variables and loops
            echo "<div class=\"jumbotron\">Classic Models Database - PHP Example Pages</div>"
        ?>
        <div class="container">
            <ul>
                <li><a href="customers.php">customers.php - Lists all customers</a></li>
                <li><a href="customers.php">customer.php - Looks up a single customer</a></li>
            </ul>
        </div>
        <!-- include bootstrap javascript -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
