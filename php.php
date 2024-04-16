<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <label for="username">What is your name</label>
        <input type="text" name="username">
        
        <button>send</button>
    </form>
    
<?php
  
       $name = $_GET["username"];
        echo $name. " is a good boy";



?>

</body>
</html>