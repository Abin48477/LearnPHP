<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Tabular details</title>
</head>

<body>
    <?php
    if (file_exists("studentDetails.txt")) {
        $fp = fopen("studentDetails.txt", "r") or die("File doesnot exits");
        echo "<h1> student record</h1>
        <table border= '1'>
        <tr>
        <th>sNo.</th>
        <th>Student name: </th>
        <th>Student Rollno.: </th>
        <th>Course: </th>
        <th>Phone: </th>
        <th>Email: </th>
        <th>Address: </th>";

        $sno = 0;
        while (! feof($fp)) {

            $str = fgets($fp);
            $arr = explode("," ,$str);
            if ($arr[0]!= "") {
                $sno++;

                echo"<tr>
                <td>$sno </td>
                <td>$arr[0] </td>
                <td>$arr[1] </td>
                <td>$arr[2] </td>
                <td>$arr[3] </td>
                <td>$arr[4] </td>
                <td>$arr[5] </td>
                </tr>";
            }
        }
        echo"</table>";
        fclose($fp);//close the file pointer

    }
    else{
        echo "Unable to open the file!";
    }
    ?>
</body>

</html>