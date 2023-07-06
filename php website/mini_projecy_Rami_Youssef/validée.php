<?php
        $conn = mysqli_connect("localhost", "root", "", "mini");
        session_start();
        $id = $_GET['id'];
        $query = "update team set valid='validée' where id_team=$id ";
        $result=mysqli_query($conn,$query);
        header('location:list-A.php');
        

