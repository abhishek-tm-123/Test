<?php
$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$phoneno=$_POST['Phone'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2> BIODATA </h2>
    <h3>Name: <?php echo $name?></h3>
    <h3>Age : <?php echo $age?></h3>
    <h3>Address: <?php echo $address?></h3>
    <h3>Gender: <?php echo $gender?></h3>
    <h3>PhoneNumber: <?php echo $phoneno?></h3>
        

</body>
</html>