<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Hello, Future Developers!<br>";
    $name="Md Borhan Uddin";
    echo"$name<br>";
    //Best Practices for variable/ function
    // my_name  ------ Snakecase (theme development)
    // myName   ------ Camelcase (Method)
    // MyName   ------ Titlecase/ pascalcase (Class)

    // Constant
    
    define("PI", "3.1416");
    echo PI;

    // Statment
    $x = 10;  // x akta expression & 1o akta expression r purata holo akta statement

    /* Data types
    A) Scalar type
        1) Integer
        2) Float/ Double
        3) String
    B) Compund type
        1) Array
        2) Object
    C) Special types
        1) NULL
        2) Resource

    */

        $age= 25;    // Integer
        $price= 40.43; // Float/ Double
        $myName= "Md Borhan Uddin";  // String
        $is_user= true; // Boolean
        $Flowers= ["Rose","Lily", "Sunflower"];
    //  $user1 = new user(); // Object
        $variable= NULL;
        //$file= fopen("text.txt", "r");

        echo "is_int($price)<br>";

        //Arithmetic Operators
        $a= 15;
        $b= 4;

        $addition = $a + $b;
        $subtraction = $a - $b;
        $multiplication = $a * $b;
        $division = $a / $b;
        $modulus = $a % $b;
        $exponentiation = $a ** $b;


        echo "$addition<br>";
        echo "$subtraction<br>";
        echo "$multiplication<br>";
        echo "$division<br>";
        echo "$modulus<br>";
        echo "$exponentiation<br>";

    // Assignment Operator

        $a += 2;  // $a= $a + 2
        echo "$a<br>";
        $a -= 2;  // $a= $a - 2
        echo "$a<br>";
        $a *= 2;  // $a= $a * 2
        echo "$a<br>";
        $a /= 2;  // $a= $a / 2
        echo "$a<br>";
        $a %= 2;  // $a= $a % 2
        echo "$a<br>";
        

    ?>
</body>
</html>