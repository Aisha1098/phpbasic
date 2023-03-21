<?php 

const BASE_PATH = __DIR__. '/..'.'/';

require BASE_PATH.'functions.php';

spl_autoload_register(function ($class){
    require base_path("Core/".$class.'.php');
});

require base_path('router.php');


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
