<?php 
    header('Content-Type: application/json');

    $myjson = new StdClass;
    $myjson->ID = 1;
    $myjson->POST_TYPE = "text";
    $myjson->POST = "thank you for your patience.";   
    $myjson->LIKE_COUNT = 1;
    $myjson->DISLIKE_COUNT = 1;
    $myjson->SUPER_LIKE_COUNT = 1;


    $postArray = array();
    $postArray[0] = $myjson;
    $postArray[1] = $myjson;


    echo json_encode($postArray);
?>