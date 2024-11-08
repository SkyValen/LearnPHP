<?php
    ob_start();
?>
<?php
foreach ($allGames as $gameOne) {
    echo '<a class="scale" href="#"><img src = "'.$gameOne['IMAGE'].'"></a>';
}

?>

<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
?>