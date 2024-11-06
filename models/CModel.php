<?php

class CModel {
    public function GetData() {

        $mysqli = new mysqli('localhost', 'root', '', 'blog');

        if(mysqli_connect_errno()) {
            echo ('Соединение не установлено');
            exit();
        }

        $mysqli->set_charset('utf8');

        $query = "Select * From News2";

        $result = $mysqli->query($query);
        $arrayResult = $result->fetch_all(MYSQLI_ASSOC);

        /*$arrayResult[] = array(
            'TITLE' => 'Blog Hosting Site',
            'DATE' => '22.06.2020',
            'AUTHOR' => 'VolDeMort',
            'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT' => 'Nulla morbi, ad pur Portwisu morbsed id, arou vestibulum dolor conmtum ac egestas lorem elit libero.'
        );
        $arrayResult[] = array(
            'TITLE' => 'Blog Hosting Site NEW',
            'DATE' => '21.10.2021',
            'AUTHOR' => 'Igor',
            'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        );*/
        return $arrayResult;
    }
}