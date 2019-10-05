<?php

function getData() {
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        if(!empty($_GET['name']) && !empty($_GET['surname'])) {
            $name = $_GET['name'];
            $surname = $_GET['surname'];

            saveToCSV($name, $surname);

            echo '<p> Witaj '. $name .' '. $surname. '</p>';

            readFromCSV();

        } else {
            echo 'Podaj imię i nazwisko';
        }
    }

}

function saveToCSV($name, $surname) {
    $fp = fopen('list.csv', 'a');
    $array = [$name, $surname];

    fputcsv($fp, $array);

    fclose($fp);
}

function readFromCSV() {
    $handle = fopen('list.csv', 'r');
    
     while(($data = fgetcsv($handle, "," )) !== false) {
        $num = count($data);
        for ($i=0; $i<$num; $i+=2) {
          echo $data[$i]. ' '. $data[$i+1]. '<br>';
        }
    }
    fclose($handle);
}

getData();
