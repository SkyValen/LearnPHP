<?php
/**
 * 
 */
class Model{
    public function getGamesList() {

        $mysqli = new mysqli('localhost', 'root', '', 'games');

        if(mysqli_connect_errno()){
            echo ('Соединение потеряно');
            exit();
        }

        $mysqli->set_charset('utf8');

        $query = "Select * From games";

        $result = $mysqli->query($query);
        $entity = $result->fetch_all(MYSQLI_ASSOC);

        return $entity;
    }

    public function getGame($title) {
        $allGames = Model::getGamesList();
        $i=0;
        $test = array(false);
        foreach ($allGames as $oneGame) {
            if ($oneGame['TITLE'] ==$title){
                $test = array(true, $allGames[$i]);
                return $test;
            }
            $i++;
        }
        return $test;
    }
}
?>