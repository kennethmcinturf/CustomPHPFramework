<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
    header{
        background: grey;
        padding: 2em;
        text-align: center;
    }
    </style>
</head>
<body>

<header>

    <h1>
    <?= 
    
    "Hello, " . htmlspecialchars($_GET['name']); 
    
    ?>
    </h1>

</header>

</body>
</html>