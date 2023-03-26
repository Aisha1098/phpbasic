<?php 

session_start();

const BASE_PATH = __DIR__. '/../';

require BASE_PATH.'Core/functions.php';

spl_autoload_register(function ($class){
    $class = str_replace('\\','/', $class);
    require base_path("$class.php");
});

require base_path('bootstrap.php');

$router = new \Core\Router();
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

// connect to our MySQL database
// class Person {
//     public $name;
//     public $age;

//     public function breathe(){
//         echo $this->name . ' is breathing';
//     }
// }

// $person = new Person();

//     $person->name = "John Doe";
//     $person->age = 25;

//     dd($person->breathe());

//Connect to database an execute a query



// $id = $_GET['id'];

// $query = "select * from posts where id = :id";

// $posts = $db->query($query, [':id'=>$id])-> fetchAll();

// dd($posts);

// foreach($posts as $post){
//     echo "<li>" . $post['title']."</li>";
// }
