<?php 

    $myjson = new StdClass;
    $myjson->ID = 1;
    $myjson->POST_TYPE = "text";
    $myjson->POST = "thank you for your patience.";   
    $myjson->LIKE_COUNT = 1;
    $myjson->DISLIKE_COUNT = 1;
    $myjson->SUPER_LIKE_COUNT = 1;


    echo json_encode($myjson);
?>