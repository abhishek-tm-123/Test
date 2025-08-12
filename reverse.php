
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="reverse.php" method="post">
        <input type="text" name="str">
        <button type="submit">click</button>
    </form>
    
</body>
</html>
<?php
    $str=$_POST['str'];
    $rstr = strrev($str);



    echo "<h1>$rstr</h1>" ;

?>