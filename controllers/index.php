<?php

view("index.view.php", [
    'heading' => 'Home'
]);

/*$books = [
       [
           'name' => 'Book1',
           'author' => 'Author1',
           'releaseDate'=> '2000',
           'purchaseUrl' => 'http:example.com'
       ],
       [
           'name' => 'Book2',
           'author' => 'Author2',
           'releaseDate'=> '2001',
           'purchaseUrl' => 'http:example.com'
       ],
       [
           'name' => 'Book3',
           'author' => 'Author3',
           'releaseDate'=> '2002',
           'purchaseUrl' => 'http:example.com'
       ]
   ];

   function filter($items, $fn){
       $filteredItems = [];
       foreach($items as $item){
           if($fn($item)){
               $filteredItems[] = $item;
           }
       }
       return $filteredItems;
   }

   $filteredBooks = filter($books, function ($book){
       return $book['releaseDate'] >2000;
   });

   $business = [
    'name' => 'Laracast',
    'cost' => 15,
    'categories' => ["testing", "PHP", "JS"]
   ];

    $fh = fopen('file\test_user_list.csv',"r");
    $file_name = 'file\test_user_list.csv';
    $lines = file($file_name) or die("Unable to open file!");
    echo fread($fh, filesize($file_name));//READS THE WHOLE FILE
    echo fgets($fh); //read a single line
    //while(!feof($fh))
   fclose($fh);

   //print_r($lines);
    //foreach($lines as $line_num => $line){
      //  echo "Line #<b>{$line_num}</b> : ".htmlspecialchars($line)."<br/>\n";
    //}

    //$trimmed = file($file_name, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
*/


// $fh = fopen($_FILES["upcsv"]["tmpname"], 'r');
// if($fh === false){
//     exit("Failed to open uploaded CSV file");
// }

// while (($row = fgetcsv($fh)) !== false){
//     $stmt = $pdo->prepare("INSERT INTO `pratice` (`Staff)")
// }