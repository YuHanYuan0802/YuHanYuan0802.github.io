<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_folder/phpform.css">
    <title>Submitted-Form</title>
</head>
<body>
    <h1>You Got Message From: </h1>
    <?php echo $_POST["firstname"];?> 
    <?php echo $_POST["lastname"];?>
    <h1>Email: </h1> <?php echo $_POST["email"];?>
    <h1>Phone: </h1> <?php echo $_POST["phone"];?>
    <h1>Message: </h1>
    <?php echo $_POST["text"];?>
</body>
</html>