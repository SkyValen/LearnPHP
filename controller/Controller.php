<?php
/**
 *
 */
class Controller{
    public $model;


    public function StartSite() {
        include 'view/main.php';
    }

    public function gameList() {
        $model = new Model();
        $allGames = $model->getGamesList();
        include 'view/gamesList.php';
    }

    public function gameOne($title){
        $test = Model::getGame($title);
        if ($test[0]==true){
            $game = $test[1];
            include 'view/gameOne.php';
        }
        else {
            include 'view/error404.php';
        }
    }
    public function error404() {
        include 'view/error404.php';
    }
}
?>