<?php

    if($_SERVER['REQUEST_METHOD'] == "POST") {

    echo calculate();

    function calculate(){
    $num1=(int)$_POST["num1"];
    $num2=(int)$_POST["num2"];

        switch($_POST["op"]) {
            case 'sub':
                return $num1 - $num2;
                break;

            case 'sum':
                return $num1 + $num2;
                break;

            case 'multiply':
                return $num1 * $num2;
                break;

            case 'divide':
                if ($num2 == 0) {
                    return "Cannot divide by zero";
                }
                return $num1 / $num2;
                break;
           }
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="num1">
        <br><br>
        <input type="text" name="num2">
        <br><br>
        <select name="op" id="">
            <option value="sum">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>