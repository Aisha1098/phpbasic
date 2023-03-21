<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

/*if($_SERVER['REQUEST_URI'] === '/') {
    echo 'bg-gray-900 text-white';
}else{
    echo 'text-gray-300';
}

echo $_SERVER['REQUEST_URI'] === '/' ? 'bg-gray-900 text-white' : 'text-gray-300';
*/

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;  
}

function authorize($condition, $status = RESPONSE::FORBIDDEN){
    if(! $condition){
        abort($status);
    }
}

function base_path($path){
    return BASE_PATH.$path;
}

function view($path, $attribute = []){
    extract($attribute);

    require base_path('views/'.$path);
}