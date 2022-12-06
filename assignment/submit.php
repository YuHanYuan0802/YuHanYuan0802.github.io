<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_folder/phpform.css">
    <title>Submitted-Form</title>
</head>
<body>
    You Got Message From: <?php echo $_POST["firstname"];?> 
    <?php echo $_POST["lastname"];?><br>
    Email: <?php echo $_POST["email"];?><br>
    Phone: <?php echo $_POST["phone"];?><br><br>
    Message: <br>
    <?php echo $_POST["text"];?>
</body>
</html>