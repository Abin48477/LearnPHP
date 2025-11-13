<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
     <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $rollno = $_POST["rollno"];
        $class = $_POST["class"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $txt = "$name, $rollno, $class, $phone ,$email, $address\n";
        $myfile = fopen("studentDetails.txt", "a+") or die("unable to open file");
        fwrite($myfile, $txt);
        fclose($myfile);
        echo "Record saved successfully!";
    }
    else{
    ?>
    <form action="#" method="POST">
        <label for="name">Student Name: </label>
        <input type="text" id="name" name="name" placeholder="Enter your name" /><br><br>

        <label for="rollno">Student Roll_Num:</label>
        <input type="number" id="rollno" name="rollno" /><br><br>

        <label for="class">Class:</label>
        <select id="class"  name="class">
            <option value="BCA"> BCA</option>
            <option value="BIM"> BIM</option>
            <option value="CSIT"> CSIT</option>
            <option value="BIT"> BIT</option>
        </select><br><br>
            

        <label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone" /><br><br>

        <label for="email">Email:</label>
            <input type="email" id="email" name="email" /><br><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" /><br><br>

           <input type="submit" value="Submit">
           <input type="reset" value="Cancel">

    </form>
<?php 

    }
    ?>
</body>

</html>