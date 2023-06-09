<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
  

<?php
if (isset ($_GET['sana'])){
        switch($_GET['sana']){
            case'1':
                include './includes/about-me.html';
                break;
                case'2':
                    include './includes/my-dreams.html';
                    break;
                    case'3':
                        include './includes/my-passions.html';
                        break;

        }
    }else {
        include './includes/index.html';
}


 
?>





</body>

</html>