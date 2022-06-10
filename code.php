<?php
//ARRAY
$cars = array("Volvo", "BMW", "Toyota", "Ford");

//SHOW
function show($cars) {
    //echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".\n";
    print_r($cars);
    echo "COUNT:"." ". count($cars);
}

//APPEND
function append($cars) {
    array_push($cars, "Fiat", "Chrysler");
    print_r($cars);
    echo "Append: Fiat, Chrysler <br>";
    echo "COUNT:"." ". count($cars);
}

//PREPEND
function prepend($cars) {
    array_unshift($cars, "Ferrari", "GM");
    print_r($cars);
    echo "Prepend: Ferrari, GM <br>";
    echo "COUNT:"." ". count($cars);
}

//DEL
function del($cars) {
    $removed = array_shift($cars);
    print_r($cars);
    echo "Removed:  <br>";
    var_dump($removed);
    echo "COUNT:"." ". count($cars);

}

//DELE_END
function del_end($cars) {
    $removed = array_pop($cars);
    print_r($cars);
    echo "Removed: <br>";
    var_dump($removed);
    echo "COUNT:"." ". count($cars);
}

//POST via index.php
if(isset($_POST['show'])) {
    show($cars);
}

if(isset($_POST['append'])) {
    append($cars);
}

if(isset($_POST['prepend'])) {
    prepend($cars);
}

if(isset($_POST['del'])) {
    del($cars);
}

if(isset($_POST['del_end'])) {
    del_end($cars);
}

?>