<?php

// get data from homepage
function getData() {

    // check request method
    if($_SERVER['REQUEST_METHOD'] === 'GET') {

        // check name and surname aren't empty
        if(!empty($_GET['name']) && !empty($_GET['surname'])) {

            // get name and surname from GET method
            $name = $_GET['name'];
            $surname = $_GET['surname'];

            // call saveToCSV function - to save data to csv file
            saveToCSV($name, $surname);

            // show user name and surname
            echo '<p> Witaj '. $name .' '. $surname. '</p>';

        // if name or surname is empty show message
        } else {

            echo 'Podaj imię i nazwisko';
        }
    }

}
// save data to csv file - remember to change permission to file if occur error - permission denied
function saveToCSV($name, $surname){

    // open or create (if doesn't exist) file to add new data
    $fp = fopen('list.csv', 'a');

    // create array with data to save
    $array = [$name, $surname];

    // save data in file
    fputcsv($fp, $array);

    // good practice - close file
    fclose($fp);
}


// call main function
getData();
