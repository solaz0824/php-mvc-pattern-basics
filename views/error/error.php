<!-- This is the error view that you should show when the request was wrong -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Document</title>
</head>

<body>
    <a class="btn btn-primary stretched-link m-3" href="index.php">GO BACK</a>
    <?php
    if (isset($errorMsg)) {
        echo "<h3 class='ml-3'>" . $errorMsg . "</h3>";
    }
    ?>
</body>

</html>