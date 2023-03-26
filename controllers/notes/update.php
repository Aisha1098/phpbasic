<?php


use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

//FIND THE CORRESPONING NOTE
$note = $db -> query('select * from notes where id = :id',[
    'id' => $_POST['id']
])->findOrFail();

//AUTHORIZE THE CURRENT USER CAN EDIT THE NOTE
authorize($note['user_id'] === $currentUserId);

//VALIDATE THE FORM
$errors = [];

if(! Validator::string($_POST['body'], 1, 1000)){
    $errors['body'] = 'A body of no more than 1000 characters is required';
}

//IF NO VALIDATION, UPDATE THE NOTE DATABASE TABLE
if(count($errors)){
    return view('notes/edit.view.php',[ 
        'heading'=> 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('update notes set body =:body where id =:id',[
    'id' => $_POST['id'],
    'body' => $_POST['body']

]);

//redirect the user
header('location: /notes');
die();