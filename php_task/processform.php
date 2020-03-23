<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_POST["first_name"] ?></title>
</head>

<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>First Name:</em> <?php echo $_POST["first_name"] ?></li>
        <li><em>Last Name:</em> <?php echo $_POST["last_name"] ?></li>
        <li><em>Email:</em> <?php echo $_POST["email"] ?></li>
        <li><em>Gender:</em> <?php echo $_POST["gender"] ?></li>
        <li><em>Subject:</em> <?php echo $_POST["subject"] ?></li>
        <li><em>Message:</em> <?php echo $_POST["message"] ?></li>
    </ol>
</body>

</html>