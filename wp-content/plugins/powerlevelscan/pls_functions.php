<?php

function checkValidShortcode()
{
    if($input[0] === '[' && $input[strlen($input)-1] === ']')
    {
        echo('true');
    }
    return $input;
}

?>