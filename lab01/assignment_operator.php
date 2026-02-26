<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Web Programming</title>
</head>
<body>
    <h1>Hello World!</h1>

    <?php
        echo "<p>Ini adalah script PHP pertama saya</p>";

     
        $name = "Nama Saya";
        $npm = "123456";
        $a = 8;
        $b = 4;

      
        echo "<p>Nama saya: $name</p>";
        echo "<p>NPM: $npm</p>";

       
        echo "<p>Hari ini: " . date("d-m-Y H:i") . "</p>";

        
        echo "<p>$a + $b = " . ($a + $b) . "</p>";
        echo "<p>$a - $b = " . ($a - $b) . "</p>";
        echo "<p>$a * $b = " . ($a * $b) . "</p>";
        echo "<p>$a / $b = " . ($a / $b) . "</p>";
        echo "<p>$a % $b = " . ($a % $b) . "</p>";

        echo "<hr>";

       
        echo "<p>a = $a</p>";
        echo "<p>b = $b</p>";

        // Assignment Operators
        $a += $b;
        echo "<p>a += b → $a</p>";

        $a -= $b;
        echo "<p>a -= b → $a</p>";

        $a *= $b;
        echo "<p>a *= b → $a</p>";

        $a /= $b;
        echo "<p>a /= b → $a</p>";

        $a %= $b;
        echo "<p>a %= b → $a</p>";
    ?>

</body>
</html>