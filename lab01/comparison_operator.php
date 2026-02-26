<!DOCTYPE html>
<html>
<head>
    <title>Comparison Operators</title>
</head>
<body>
    <h1>Hello World!</h1>

    <?php
        echo "<p>Ini adalah script PHP pertama saya</p>";

        $x = 100;
        $y = "100";

    
        var_dump($y);
        echo "<br>";

       
        var_dump($x == $y);
        echo "<br>";

        var_dump($x === $y);
        echo "<br>";

        var_dump($x !== $y);
        echo "<br>";

        $y = (int) $y;
        var_dump($y);
        echo "<br>";

        var_dump($x != $y);
        echo "<br>";

        var_dump($x <> $y);
        echo "<br>";

        var_dump($x !== $y);
        echo "<br>";

        var_dump($x > $y);
        echo "<br>";

        var_dump($x < $y);
        echo "<br>";

        var_dump($x >= $y);
        echo "<br>";

        var_dump($x <= $y);
        echo "<br>";

        var_dump($x <=> $y);
        echo "<br>";
    ?>

</body>
</html>