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
// foreach loop to get info inside the arrays.
foreach($books as $book => $info) {
   echo "{$book}" .PHP_EOL;
   foreach($info as $key => $innerInfo) {
    echo " {$key} {$innerInfo}" .PHP_EOL;
   }
    echo "=======================".PHP_EOL;
    echo PHP_EOL;
}
 // Skipped through each array to only spit out books published after 1950  
foreach($books as $book => $info) {
    echo "$book" .PHP_EOL;
   foreach($info as $key => $innerInfo) {
    if($innerInfo > 1950) {
      echo " {$key} {$innerInfo}" .PHP_EOL;
    }
   }
}








