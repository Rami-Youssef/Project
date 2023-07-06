<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
        
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        legend {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        div {
            margin-bottom: 10px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 8px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #555;
        }
        .id{
         display: none;
        }
    </style>
</head>
<body>
    <nav>
        <a href="log-in.php">Log In</a>
        <a href="index.php">Sign-Up</a>
        <a href="list-A.php">admin</a>
    </nav>

    <form action="sign-in.php" method="post">
        <legend>Inscription</legend>
        <div> 
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required>
        </div>

        <div> 
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" required>
        </div>
             
        <div> 
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
             
        <div> 
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div class="id"> 
            <input type="text" name="id_team" value="20" required>
        </div>

        <div> 
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>

    </style>
</head>
</body>
</html>