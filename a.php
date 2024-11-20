<?php
$randomValue = rand(1, 100);
session_start();
$_SESSION['value'] = $randomValue;
?>

<!DOCTYPE html>
<html>
<body>
    <a href="b.php?value=<?php echo $randomValue; ?>">Přes GET</a><br>
    <form action="b.php" method="post">
        <input type="hidden" name="value" value="<?php echo $randomValue; ?>">
        <button type="submit">Přes POST</button>
    </form>
    <a href="b.php?method=session">Přes SESSION</a>
</body>
</html>
