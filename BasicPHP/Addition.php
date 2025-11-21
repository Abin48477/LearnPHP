<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition of two numbers</title>
</head>
<body>
    <?php
    if(isset($_POST["num1"]) && isset($_POST["num2"]))
    {
        $n1 = floatval ($_POST["num1"]);
        $n2 = floatval($_POST["num2"]);
        $sum = $n1 +$n2;
        echo "<h1> Sum of $n1 & $n2 is $sum</h1>";

    }
    else{

    ?>
    <form method="Post">
<label>Number 1:</label>
<input type ="number" name="num1"/><br><br>
<label>Number 2:</label>
<input type ="number" name = "num2"/><br><br>

<input type="Submit" name="btn1" value="sum"/>
<input type="reset" name="btn2" value ="cancel"/>
    </form>
    <?php
    }
    ?>

</body>
</html>