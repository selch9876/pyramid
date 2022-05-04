<?php
/*

    *
   ***
  *****
 *******
*********

Write a script to output this pyramid on console (with leading spaces)

*/
 
function pyramid($height)
{
    echo "<script> let str = ''; </script>";//JS variable for the console 
    for($i = 1; $i <= $height; $i++){

        for($j = 1; $j <= $height-$i; $j++){
            echo "&nbsp;&nbsp;";
            echo "<script> str += ' '; </script>";
        }
        
        for($k = 0; $k < 2 * $i - 1; $k++){
            echo ("*");
            echo "<script> str += '*'; </script>";
            
        }
        echo '<script> str += "\n"; </script>';
        echo "<br />";
    }
    echo "<script> console.log(str); </script>";
}

pyramid(5);
