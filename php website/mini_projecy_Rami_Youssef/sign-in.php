<?php
            $conn=mysqli_connect("localhost","root","","mini");
            session_start();
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $id_team=$_POST['id_team'];
            $query="insert into membre(nom,prenom,email,password,id_team)values('$nom','$prenom','$email' ,'$password',' $id_team')";
            $result=mysqli_query($conn,$query);
            $_SESSION['id']=mysqli_insert_id($conn);
            echo $_SESSION['id'];
            header('location:list-M.php');
?>