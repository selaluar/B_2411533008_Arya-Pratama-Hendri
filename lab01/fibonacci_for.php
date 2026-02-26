<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci - For Loop</title>
</head>
<body>

<h2>Deret Fibonacci (For Loop)</h2>

<?php
$a = 0;
$b = 1;

for ($i = 1; $i <= 10; $i++) {
    echo $a . "<br>";
    
    $next = $a + $b;
    $a = $b;
    $b = $next;
}
?>

</body>
</html>