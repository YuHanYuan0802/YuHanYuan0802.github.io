<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="phpform.css">
    <link rel="shortcut icon" href="img/y-logo.png">
    <title>Submitted-Form</title>
</head>
<body>
    You Got Message From: <?php echo $_POST['firstname'] $_POST['lastname'];?><br>
    Email: <?php echo $_POST['email'];?><br>
    Phone: <?php echo $_POST['phone'];?><br><br>
    Message: <br>
    <?php echo $_POST['text'];?>
</body>
</html>