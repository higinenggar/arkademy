<?php

$biodata = Array (
    "0" => Array (
        "name" => "Higin Enggartiasto",
        "age" => "24",
        "address" => "Larangan Kulon, Mojotengah, Wonosobo, Jawa Tengah",
        "hobbies"=> "Gaming, Creates Game",
        "married" => "No",
        "school" => "Universitas Sains Al-Qur'an Wonosobo, In : 2013, Out : 2018, Major : Bachelor degree",
        "skill" => "Php : Beginner, MySql : Beginner, Game Developer : Advanced",
        "interest in coding " =>"YES"
        
    ),
    
);


$json = json_encode(array('MY BIODATA' => $biodata));


if (file_put_contents("data.json", $json)){
    echo "File JSON sukses dibuat...";
} else {
    echo "Oops! Terjadi error saat membuat file JSON...";
}
?>