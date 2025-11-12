<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="Post">
        <label for="name">Student Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" />

        <label for="rollno">Student Roll_Num:</label>
        <input type="number" id="rollno" name="rollno" />

        <label for="class">Class:</label>
        <input type="number" id="class" value="class" name="class" />

        <label for="phone">Phone:</label>
        <input type="number" id=phone name="phone" />

        <label for="email">Email:/label>
            <input type="email" id="email" name="email" />

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" />

            <button type="submit">Save</button>
            <button type="reset">Calcel</button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "Post") {
        $name = $_POST["name"];
        $rollno = $_POST["rollno"];
        $class = $_POST["class"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $myfile = fopen("studentDetails.txt", "a") or die("unable to open file");
        $txt = $name . " " . $rollno . " " . $class . " " . $phone . " " . $email . " " . $address . " " . "\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        echo "Record saved successfully!";
    }
    ?>


</body>

</html>