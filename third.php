<?php 

    $myjson = new StdClass;
    
    // SET VALUE
    $myjson->name = "Hello";
    $myjson->id = 1234;

    // GET VALUE
    // echo $myjson->name . " ## " . $myjson->id;

    // echo "{ name : ".$myjson->name  . "}"

    echo json_encode($myjson);
?>