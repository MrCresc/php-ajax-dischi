<?php

    $database = [
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
        ],
        [
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'year' => 1992,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg'
        ],
        [
            'title' => 'Ten\'s Summoner\'s Tales',
            'author' => 'Sting',
            'year' => 1993,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg'
        ],
        [
            'title' => 'Steve Gadd band',
            'author' => 'Steve Gadd Band',
            'year' => 2018,
            'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg'
        ],
        [
            'title' => 'Brave new World',
            'author' => 'Iron Maiden',
            'year' => 2000,
            'poster' => 'https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg'
        ],
        [
            'title' => 'One more car, one more rider',
            'author' => 'Eric Clapton',
            'year' => 2002,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg'
        ]
    ];

    if (!empty($_GET['authorList'])) {
      $authorArray = [];
      foreach ($database as $song) {
        $authorArray[] = $song['author'];
      }
      echo json_encode($authorArray);
    } elseif (!empty($_GET['author'])) {
      $filteredArray = [];
      foreach ($database as $song) {
        if ($song['author'] === $_GET['author']) {
          $filteredArray[] = $song;
        }
      }
      echo json_encode($filteredArray);
    } else {
      echo json_encode($database);
    }

    header('Content-Type: application/json');

?>
