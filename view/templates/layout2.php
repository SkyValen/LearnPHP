<html>
<head>
<link href="public/css/bootstrap.min.css" rel="stylesheet">
<link href="public/css/mystyle.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header clearfix">
            <h2>Магазин игр</h2>
            <h4 class="text-muted">
                <?php
                    echo '<a href="./">Главная</a> &#187';
                    echo '<a href="games">Игры</a>';
                    if (!empty($game['TITLE'])) echo ' &#187'.$game['TITLE'];
                ?>


            </h4>
        </div>
        <div id="content" style="padding-top:20px;">
            <?php
                    echo $content
            
            ?>


        </div>
        <footer class="footer">
            <p>&copy; Year Design <i class="fa fa-child"></i></p>
        </footer>
    </div> <!-- container -->
</body>
</html>