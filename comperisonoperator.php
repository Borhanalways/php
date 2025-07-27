
    <?php
        $n1 = 10;
        $n2 = "10";

        $equal = $n1 == $n2;
        var_dump($equal);

        $f1 = 10;
        $f2 = "10";
        $notEqual = $f1 !== $f2;
        var_dump($notEqual);

        // Identical Operator

            $d1 = 10;
            $d2 = "10";

            $identical = $d1 === $d2;
            var_dump($identical);

            // Not Identical

            $notIdentical = $d1 !== $d2;
            var_dump($notIdentical);

            // Greater then

            $p1 = 12;
            $p2 = 10;

            $greater = $p1 > $p2;
            var_dump($greater);

        // less then
            $lessThen = $p1 < $p2;
            var_dump($lessThen);

        // Greater or Equal
        $greaterOrEqual = $p1 >= $p2;
        var_dump($greaterOrEqual);

        //Less than or equal
        $lessThenOrEqual = $p1 <= $p2;
        var_dump($lessThenOrEqual);

        // Logical Operator
        //And Operator

        $t = true;
        $f = false;
        $and = $t && $f;
        var_dump($and);

        // Or Operator

        $or = $t || $f;
        var_dump($or);

        // Not Operator
        $not = !$f;
        var_dump($not);

        var_dump($t && $f);
        var_dump($t || $f);
        var_dump(!$t);

        // Increment Operator
        $a = 5;
        $b = 5;
        $c = $a++;
        echo $a;
    
        // Decrement Operator

        $d = $a--;
        echo $d;
        $g = --$a;
        echo $g;
    ?>