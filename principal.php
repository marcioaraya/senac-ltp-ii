<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

<?php

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        if ($i==$j) {
           $vetor[$i][$j] = 'X'; 
           setcookie("vetor[$i][$j]", 'X');
        } else {
             $vetor[$i][$j] = 'O'; 
             setcookie("vetor[$i][$j]", 'O');
        }
    }
}

print_r($vetor);

echo "<hr>";
echo "<hr>";

// set the cookies
setcookie("cookie[three]", "cookiethree");
setcookie("cookie[two]", "cookietwo");
setcookie("cookie[one]", "cookieone");

// after the page reloads, print them out
print_r($_COOKIE);
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br />\n";
    }
    foreach ($_COOKIE['vetor'] as $i => $value) {
        foreach($value as $j) {
            echo "$j ";
        }
        echo "<br>";
        
    }
    
    }


?>

    </body>
</html>
