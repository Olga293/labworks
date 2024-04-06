<?php
    if($arrA[$i]["price"]>=20){
        echo "<h2>".$arrA[$i]["title"]."</h2>";
        echo "<p>".$arrA[$i]["description"]."</p>";
        echo "<a href=''>".$arrA[$i]["price"]."</a>";
        echo "<br><br>";
    }
    else{
        echo "<h2><font color='green'>".$arrA[$i]["title"]."</font></h2>";
        echo "<p><font color='green'>".$arrA[$i]["description"]."</font></p>";
        echo "<a href=''><font color='green'>".$arrA[$i]["price"]."</font></a>";
        echo "<br><br>";
    }
?>