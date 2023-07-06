<?php
            $conn=mysqli_connect("localhost","root","","mini");
            session_start();
            $name=$_POST['name'];
            $debut=$_POST['debut'];
            $fin=$_POST['fin'];
            $number=$_POST['number'];
            $valid=$_POST['valid'];
            $query="insert into team(name,debut,fin,nombre,valid)values('$name','$debut','$fin' ,'$number','$valid')";
            $result=mysqli_query($conn,$query);
            $_SESSION['id']=mysqli_insert_id($conn);
            header('location:list-M.php');
?>