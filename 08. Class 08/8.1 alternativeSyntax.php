<?php
    if($condition){
        //statements
    }else{
        //statements
    }

    //Alternative Syntax
    if($condition):
        //statments
    else:
        //statements
    endif;

    if($condition){
        //statements
    }elseif($anotherCondition){
        //statements
    }


    //Alternative syntax
    if($condition):
        // Statements
    elseif($anotherCondition):
        // Statements
    else: 
        // Statements
    endif;

    while ($condition){
        // Statements
    }

    // Alternative Syntax
    while($condition):
        // Statements
    endwhile;

    for( ; ; ):
        // Statements
    endfor;
?>