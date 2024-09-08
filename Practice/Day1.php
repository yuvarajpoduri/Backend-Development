<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    </style>
</head>
<body>
<?php
$books=[
    [
        'name'=>"They Call Him OG",
        'director'=>"Sujeeth",
        'imdblink'=>'https://www.imdb.com/title/tt24060892/',
        'year'=>2025
    ],
    [
        'name'=>"aapadbandhavudu",
        'director'=>"K.Viswanath",
        'imdblink'=>'https://www.imdb.com/title/tt0245679/',
        'year'=>1992
    ],
    [
        'name'=>"Kusi",
        'director'=>"S.J.Surya",
        'imdblink'=>'https://www.imdb.com/title/tt0258490/',
        'year'=>2001
    ]
    ];
function sortbydate($books,$year){
    $sorteddates=[];
    foreach($books as $book){
        if($book['year']>=$year){
            $sorteddates[] = $book;
        }
    }
    return $sorteddates;
}
?>
<!-- <ul>
    <?php foreach($books as $book) : ?>
        <li>
            <a href="<?= $book['website']?>">
            <?= $book['name']?> (<?=$book['year']?>)
        </a>
        </li>
    <?php endforeach;?>
</ul> -->
<ul>
        <?php foreach(sortbydate($books,2000) as $book) : ?>
        <li>
            <a href="<?=$book['imdblink']?>">
                <?= $book['name']?> - (<?=$book['year']?>)
            </a>
        </li>
        <?php endforeach;?>
</ul>
</body>
</html>