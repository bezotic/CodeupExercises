<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach($books as $key => $title) {
    foreach ($title as $info => $innerInfo) {
     echo " {$key} {$info}  {$innerInfo}\n";         
    } 
}


foreach ($books as $key => $title) {
        if ($['published'] > 1950) {    
            echo "Title: {$key} " . PHP_EOL;
            echo "Published: {$book['published']} " . PHP_EOL;
            echo "Author: {$book['author']} " . PHP_EOL;
            
        }
    }



//foreach($books as $key => $value) {
//	echo "Title: {$key}\n";
 //	foreach ($value as $book) {
 	//	echo  "Published: {$book['published']}\n";
 	//	echo  "Author: {$book['author']}\n";
 	//	echo  "Pages: {$book['pages']}\n";
 	//} 
//}





