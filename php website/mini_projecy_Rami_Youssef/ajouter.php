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
        .hide{
         display: none;
        }
    </style>
</head>
<body>
    <nav><a href="list-M.php">list</a><a href="index.php">sign-out</a></nav>
    <body>
        <form action="add.php" method="post">
            <legend>ajouter</legend>
            <div> 
                <label for="">nom</label>
                <input type="text" name="name">
             </div>

             <div> 
                <label for="">date de debut</label>
                <input type="date" name="debut">
             </div>
             
             <div> 
                <label for="">date de fin</label>
                <input type="date" name="fin">
             </div>
             <div class="hide"> 
                <input type="text" name="valid" value="non" >
                <input type="number" name="number" value="1" >
             </div>

             
             <div> 
                <input type="submit">
             </div>
        </form>
        
    </body>
</body>
</html>