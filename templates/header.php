<!-- CONNECT TO DATABASE -->
<?php
require_once('config/connect.php');
session_start();
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="templates/style.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Film Bibliotek</title>
</head>

<body>

    <header>
        <!-- HEADER -->
        <!-- menu -->
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <!-- logo -->
                    <a href="index.php" class="brand-logo">Film Bibliotek</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">


                        <!-- button -->

                        <li>film<a href="index.php" class="btn-floating waves-effect waves-light red"><i class="material-icons">local_movies</i></a></li>
                        <li><a href="add.php" class="btn-floating waves-effect waves-light red"><i class="material-icons">add</i></a></li>


                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>