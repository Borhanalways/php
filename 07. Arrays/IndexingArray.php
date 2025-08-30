<?php
    //Indexing array
    $laptop = array ("Apple", "HP", "DELL");
    var_dump($laptop);

    //Associative array
    $mobile = array ("brand" => "Redmi", "Model" => "Note 13", "made in" => "China");
    var_dump($mobile);

    //Associative Array

    $person = array ("Name" => "Borhan", "City" => "Sylhet", "Number"=> "017884949006");
    foreach ($person as $key => $value){
        echo "key : $value\n";
    }
    //print_r($person);
    unset($person['Name']);
    print_r($person);

    $data = ['mango', '', null];
    $filtered = array_filter($data);
    print_r($filtered);

    $user = ['name' => 'Borhan', 'email' => 'borhanuddin0600@gmail.com'];
    extract($user);
    echo $email;

    $number = range (1, 15);
    $sliced = array_slice($number,5,5);
    print_r($number);
    print_r($sliced);

    $arr1 = ['Mango', 'Jackfruit'];
    $arr2 = ['Litchi', 'Pineapple'];
    $merged = array_merge($arr1, $arr2);
    print_r($merged);

    $fruits = ['Mango','Jackfruit'];
    if(in_array('Litchi', $fruits)){
        echo "Found";
    }else{
        echo "Not Found";
    }

    $arr1 = ['Mango','Litchi'];
    $arr2 = ['Litchi','Pineapple'];
    $differecnce = array_diff($arr1,$arr2);
    print_r($differecnce);

    $numbers = range(1, 15, 2);
    print_r($numbers);
?>