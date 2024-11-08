<?php
    $host = explode('?', $_SERVER['REQUEST_URI'])[0];

    $num = substr_count($host, '/');
    $way = explode('/', $host)[$num];

    if($way == '' || $way == 'index.php') {
        $response = Controller::StartSite();
    }
    elseif ($way =='games') {
        $response = Controller::gameList();
    }
    elseif ($way =='game') {
        if (isset($_GET['title'])) {
            $title = $_GET['title'];
        }
        $response = Controller::gameOne($title);
    }
    else {
        $response = Controller::error404();
    }

?>