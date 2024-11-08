<?php
ob_start();

    echo '<article>';
    echo '<h3>'.$game['TITLE'].'</h3>';
    echo '<img src = "'.$game['IMAGE'].'">';
    echo '<p>Author(s): '.$game['AUTHOR'].'</p>';
    echo '<p>Price: '.$game['PRICE'];
    echo '<p>Содержание: '.$game['description'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '<a href="games" role="button"> Back &raquo;</a>';
    echo '</p>';
    echo '</article>';


    echo '<div style="clear::both;"></div>';

    $content = ob_get_clean();

    include 'view/templates/layout.php';

