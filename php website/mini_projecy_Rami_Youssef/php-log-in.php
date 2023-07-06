<?php
    $conn = mysqli_connect("localhost", "root", "", "mini");
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT id FROM membre WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        header('location: list-M.php');
    } else {
        
        header('location: log-in.php');
        $_SESSION['error']="Invalid email or password";
    }
?>
