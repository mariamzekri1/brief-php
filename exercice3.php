<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action = "<?php print $_SERVER['PHP_SELF'];?>" method ="POST">
 
 Valeur 1:<br>
<input type = "text" name = "val1" size = "10"><br>
 Valeur 2:<br>
<input type = "text" name = "val2" size = "10"><br>

 Opération: <br>
<input type = "radio" name = "operation" value = "add"> Addition<br>
<input type = "radio" name = "operation" value = "sous"> Sustraction<br>
<input type = "radio" name = "operation" value = "mul"> Multiplication<br>
<input type = "radio" name = "operation" value = "div"> Division<br>
<input type = "submit" value = "Calculate"><br>
<?php

switch($_POST["operation"]){
        case "sous":
            echo $_POST["val1"]-$_POST["val2"];
            break;
        case "add":
            echo $_POST["val1"]+$_POST["val2"];
            break;
        case "mul":
            echo $_POST["val1"]*$_POST["val2"];

            break;
        case "div":
            echo $_POST["val1"]/$_POST["val2"];

            break;
        default:
            echo "inconnu";
            break;
     
}


?>
</form>
</body>
</html>