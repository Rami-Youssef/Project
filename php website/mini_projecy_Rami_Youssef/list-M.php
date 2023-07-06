<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        
        a {
            text-decoration: none;
            color: #333;
        }
        nav {
            background-color: #f2f2f2;
            padding: 10px;
        }
        
        nav a {
            text-decoration: none;
            margin-right: 10px;
            color: #333;
        }
    </style>
</head>
<body>
<table>
    <nav>
        <a href="ajouter.php">ajouter</a>
        <a href="index.php">sign-out</a>
    </nav>
    <tr>
        <th>nom</th>
        <th>debut</th>
        <th>fin</th>
        <th>validée</th>
        <th>nombre</th>
    </tr>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "mini");
        $query = "SELECT * FROM team where valid='validée'";
        $result = mysqli_query($conn, $query);
        
        while ($line = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$line['name']."</td>";
            echo "<td>".$line['debut']."</td>";
            echo "<td>".$line['fin']."</td>";
            echo "<td>".$line['nombre']."</td>";
            echo "<td><a href='participer.php?id=".$line['id_team']."'>participer</a></td>";
            echo "</tr>";
        }
    ?>
</table>

</body>
</html>