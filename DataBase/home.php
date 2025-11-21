<html>
<head>
<title> this is database connectivity example </title>
</head>
<body>
<?php
if(isset($_POST["name"]))
{
    $sname = $_POST["name"];
    $sphone = $_POST["phone"];
    $scourse = $_POST["course"];
    $sage = $_POST["age"];
   

    require_once "connection.php";

$sql = "insert into student(stu_name,age,course,phone) values('$sname',$sage,'$scourse','$sphone')";
$result = $conn->query($sql);
if($result)
{
    echo "data inserted successfully";
}
else{
    echo "sorry data not inserted successfully";
}
$conn->close();
}
else{
    header("location:index.html");
}
?>
</body>
</html>