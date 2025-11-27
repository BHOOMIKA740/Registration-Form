<?php
// Fetch form values
$name = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Application Submitted Successfully!</h2>

    <div class="result-box">
        <p><strong>Full Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Phone:</strong> <?php echo $phone; ?></p>
        <p><strong>Gender:</strong> <?php echo $gender; ?></p>
        <p><strong>Address:</strong> <?php echo nl2br($address); ?></p>
    </div>

    <a href="index.html" class="btn">Go Back</a>

</div>

</body>
</html>
