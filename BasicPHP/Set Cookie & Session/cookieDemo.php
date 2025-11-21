<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Set a cookie named "user" with the value "John Doe" that expires in 30 days
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day it will expire in 30 days
    ?>

    
</body>
</html>
<?php
// Check if the cookie is set and display its value this is necessay because cookies are only available on the next page load
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value: " . $_COOKIE[$cookie_name];
}
?>
    <h1>Cookie Demo</h1>
    <p>A cookie named "user" has been set with the value "John Doe".</p>
    <p>Refresh the page to see the cookie value.</p>
    <?php
    // To delete the cookie, set its expiration time to one hour ago
    setcookie($cookie_name, "", time() - 3600, "/");//""-->leaving value empty
    ?><html>
      <body>
        <?php
        echo"Cookie 'user' id deleted.";
        ?>
      </body>
    </html>

