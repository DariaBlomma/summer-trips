<?php
// get json
$json = file_get_contents('php://input');
// data is object
$data = json_decode($json);
// var_dump($data);
// обратились к свойству объекта
$name = $data->real_name;
if ($data === null) {
    echo 'empty';
    echo $name;
}



?>