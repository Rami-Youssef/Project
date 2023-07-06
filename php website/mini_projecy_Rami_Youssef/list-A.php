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
    <nav><a href="index.php">log-out</a></nav>
    <tr>
        <th>nom</th>
        <th>debut</th>
        <th>fin</th>
        <th>validée</th>
        <th>annuler</th>
    </tr>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "mini");
        $query = "SELECT * FROM team where valid='non'";
        $result = mysqli_query($conn, $query);
        
        while ($line = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$line['name']."</td>";
            echo "<td>".$line['debut']."</td>";
            echo "<td>".$line['fin']."</td>";
            echo "<td><a href='validée.php?id=".$line['id_team']."'>validée</a></td>";
            echo "<td><a href='delet.php?id=".$line['id_team']."'>annuler</a></td>";
            echo "</tr>";
        }
    ?>
</table>

</body>
</html>