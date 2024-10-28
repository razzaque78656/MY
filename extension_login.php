<?php

    $data = [
        'name' => 'John Doe',
        'age' => 30,
        'email' => 'john@example.com',
        'isLoggedIn' => true
    ];
    
    $jsonString = json_encode($data);
   echo $jsonString;


