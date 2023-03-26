<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

//validate input form
$errors=[];
if(!Validator::email($email)){
    $errors['email'] = "Please provide a valid email address";
}

if(!Validator::string($password, 7, 255)){
    $errors['password'] = "Please provide a password of atleast 7 characters";
}

if(! empty($errors)){
    return view('registration/create.view.php',[
        'errors' => $errors
    ]);
}



$db = App::resolve(Database::class);
//check if the account alreay exitsts
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if($user){
    //then someone with that email already exists and has an account
    //it yes, redirect to a login page
    header('location: /');
    exit();
}else{
    //if no, save to the database, and then log the user in and redirect
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)',[
        'email'=>$email,
        'password'=>$password
    ]);

    //mark that user has logged in
    //$_SESSION['logged_in']=true;
    $_SESSION['user']=[
        'email' => $email
    ];

    header('location: /');
    exit();
}








