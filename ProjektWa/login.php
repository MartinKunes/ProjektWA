<?php
session_start();

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


        $user = $stmt_result->fetch_all()[0];

        if (password_verify($password, $user[2])) {
            //  echo "Login success...";

            $_SESSION["email"] = $user[1];
            header("Location: index.php");
            return;
        } else {
            $_SESSION['fail']++;
            if($_SESSION['fail'] >=3){
                $myfile = fopen("prihlaseni.txt", "a") or die("Unable to open file!");
                $txt = "$email\n";
                fwrite($myfile, $txt);
                fclose($myfile);
                session_destroy();

            }
            header("Location: loginDesign.php");
            return;

        }
    } else {
        echo file_get_contents("header.php");
        echo "Invalid email...";
        echo file_get_contents("footer.php");
    }
}
?>

