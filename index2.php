<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $TP = array("Tokyo"," Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
     foreach($TP as $item){
        echo  $item;

     }
     echo"<br>";
     sort( $TP);
     ?>
     <ul>
        <?php
        for($i=0;$i<count(value:$TP);$i++ ){
            echo"<li>".$TP[$i]."</li>";

        }
        array_push($TP, "Los Angeles", "Calcutta", "Osaka", "Beijing");
        echo"<br>";
        ?>
     </ul>
     <ul>
        <?php
        for($i=0;$i<count(value:$TP);$i++){
            echo"<li>".$TP[$i]."</li>";
        }
        ?>
     </ul>
    
</body>
</html>