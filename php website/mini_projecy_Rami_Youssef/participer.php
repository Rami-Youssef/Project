<?php
        $conn = mysqli_connect("localhost", "root", "", "mini");
        session_start();
        $id = $_GET['id'];
        $query = "update team set nombre=nombre + 1 where id_team=$id ";
        $result=mysqli_query($conn,$query);
        header('location:list-M.php');
       