<?php

if (! function_exists('show')) {

    function show($message)
    {
        echo "<p>$message</p>";
    }
}

if (! function_exists('dd')) {

    function dd($data)
    {
        var_dump($data);
        die();
    }
}
