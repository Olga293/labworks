<?php
    function Cramer($X, $Y, $result){
        $determinant = $X[0] * $Y[1] - $Y[0] * $X[1];
        //echo '<br>';
        //var_dump($determinant);
        if($determinant != 0){
            $determinant_X = $result[0] * $Y[1] - $Y[0] * $result[1];
            //echo '<br>';
            //var_dump($determinant_X);
            $determinant_Y = $X[0] * $result[1] - $result[0] * $X[1];
            //echo '<br>';
            //var_dump($determinant_Y);
            $x = $determinant_X / $determinant;
            $y = $determinant_Y / $determinant;
            $result = array($x, $y);
            return $result;
        }
        else{
            return "<br>Определитель равен нулю, метод Крамера использовать нельзя";
        }
    }
?>