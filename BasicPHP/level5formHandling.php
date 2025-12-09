<?php
// ---------- PROCESSING GET DATA ----------
$getName = isset($_GET['get_name']) ? $_GET['get_name'] : "";
$getAge  = isset($_GET['get_age']) ? $_GET['get_age'] : "";

// ---------- PROCESSING POST DATA ----------
$postEmail = "";
$postPass  = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['email'])) {
        $error = "Email is required!";
    } else {
        $postEmail = $_POST['email'];
    }

    if (empty($_POST['pass'])) {
        $error .= "<br>Password is required!";
    } else {
        $postPass = $_POST['pass'];
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>⭐ ALL IN ONE FORM HANDLING (GET + POST + VALIDATION)</h2>

<!-- ================== GET FORM ================== -->
<h3>GET Form</h3>
<form method="GET" action="">
    Name: <input type="text" name="get_name"><br><br>
    Age: <input type="number" name="get_age"><br><br>
    <button type="submit">Submit GET</button>
</form>

<?php
if ($getName || $getAge) {
    echo "<h4>GET Result:</h4>";
    echo "Name: $getName <br>";
    echo "Age: $getAge <br><br>";
}
?>

<hr>

<!-- ================== POST FORM ================== -->
<h3>POST Form (with basic validation)</h3>
<form method="POST" action="">
    Email: <input type="email" name="email"><br><br>
    Password: <input type="password" name="pass"><br><br>
    <button type="submit">Submit POST</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h4>POST Result:</h4>";

    if ($error) {
        echo "<span style='color:red;'>$error</span>";
    } else {
        echo "Email: $postEmail <br>";
        echo "Password: $postPass <br>";
    }
}
?>

</body>
</html>
