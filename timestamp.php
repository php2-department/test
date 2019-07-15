<?php

function timestamp() {
    if (isset($_REQUEST['submit'])) {
        echo $p1 = $_REQUEST['p1'] . "<br>";
        echo $p2 = $_REQUEST['p2']. "<br>";
        echo $t1 = $_REQUEST['t1']. "<br>";
        echo $t2 = $_REQUEST['t2']. "<br>";
    
        if (($p1 > $t1 && $p2 < $t2) || ($p1 < $t1 && $p2 > $t2) || ($p1 < $t1 && $p2 > $t1) || ($p1 > $t1 && $p1 < $t2) ) {
            echo "booked";
            true;
        } else {
            false;
        }
    }
}

timestamp();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="timestamp.php" method ="POST">
    p1 <input type="datetime-local" name = 'p1'> <br><br>
    p2 <input type="datetime-local" name = 'p2'><br><br>
    t1 <input type="datetime-local" name = 't1'><br><br>
    t2 <input type="datetime-local" name = 't2'>  <br> <br> 
    <input type="submit" name = 'submit'>
    </form>  
</body>
</html>