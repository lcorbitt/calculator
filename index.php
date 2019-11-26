<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Calculator</title>
</head>
<body>

<form action="calculator.php" method="post">
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num1" placeholder="Number 2">
    <select>
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button name="submit" value="submit" type="submit">Calculate</button>
</form>
<br>
<p>The answer is: </p>

<?php
    
    if (isset($_GET["submit"])) {
        $result1 = $_GET["num1"];
        $result2 = $_GET["num2"];
        $operator = $_GET["operator"];
        switch ($operator) {
            case "None":
                echo "You must select a method!";
            break;
            case "Add":
                echo $result1 + $result2
            break;
            case "Subtract":
                echo $result1 - $result2
            break;
            case "Multiply":
                echo $result1 * $result2
            break;
            case "Divide":
                echo $result1 / $result2
            break;
        }
    }

?>

</body>
</html>