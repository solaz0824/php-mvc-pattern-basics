<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THIS IS MAIN VIEW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
    <section class="text-center pt-3">
        <h2 class="mb-3 pt-2">MVC Pattern basics - Employees & Movies </h2>
        <ul class="link-group w-50 rounded mainList">
            <li class="list-group-item"><a href="index.php?controller=employee&action=getAllEmployees">Employees</a></li>
            <li class="list-group-item"><a href="index.php?controller=movie&action=getAllMovies">Movies</a></li>

            <!-- Where the user is interacting, clicking, etc, we call to Controllers -->
        </ul>
    </section>
</body>

</html>
<?php
?>