



<?php
$email = $_POST['email'];
$password = $_POST['password'];

// Connect to the database
$con = new mysqli("127.0.0.1", "admin", "admin", "register");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    $stmt = $con->prepare("select * from register where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if (password_verify($password, $data['password'])) {
            //  echo "Login success...";
            $myfile = fopen("index.html", "r");
            echo fread($myfile,filesize("index.html"));
            fclose($myfile);
        } else {
            echo file_get_contents("header.html");
            echo "Invalid password...";
            echo file_get_contents("footer.html");
        }
    } else {
        echo file_get_contents("header.html");
        echo "Invalid email...";
        echo file_get_contents("footer.html");
    }
}
?>

