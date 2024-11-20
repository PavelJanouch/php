<?php
session_start();
$value = null;

if (isset($_GET['value'])) {
    $value = $_GET['value'];
} elseif (isset($_POST['value'])) {
    $value = $_POST['value'];
} elseif (isset($_GET['method']) && $_GET['method'] === 'session') {
    $value = $_SESSION['value'];
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1><?php echo $value !== null ? $value : 'Nebyla předána žádná hodnota.'; ?></h1>
</body>
</html>
