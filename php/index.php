<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/about-me.css">
    <link rel="stylesheet" href="css/my-dreams.css">
    <link rel="stylesheet" href="css/my-passions.css">
    <link rel="stylesheet" href="#cv">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include './includes/header.html'; ?>

<?php include './includes/nav.html'; ?>

<?php
if (isset ($_GET['sana'])){
        $url = $_GET['sana'];
       
    if ($url === 'about-me.html') {
      include './includes/about-me.html';
    } else if ($url === 'my-dreams.html') {
        include './includes/my-dreams.html';
    } else if ($url === 'my-passions.html') {
        include './includes/my-passions.html';
    }
      
    
}

 
?>

<?php include './includes/footer.html'; ?>



</body>

</html>