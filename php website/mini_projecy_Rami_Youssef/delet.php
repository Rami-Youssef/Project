<?php
        $conn = mysqli_connect("localhost", "root", "", "mini");
        session_start();
        $id = $_GET['id'];
        $query = "DELETE FROM team WHERE id_team=$id; ";
        $result=mysqli_query($conn,$query);
        header('location:list-A.php');