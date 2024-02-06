<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
$filterOption = $_GET['filter'];

$filtered = [];
    foreach ($hotels as $singleHotel) {
        if ($singleHotel['parking'] && $filterOption == "1") {
            $filtered[] = $singleHotel;
        } elseif ($singleHotel['parking'] == false && $filterOption == "2") {
            $filtered[] = $singleHotel;
        } else {
            $filtered = $hotels;
        }
    }
    $hotels = $filtered;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Php-hotel</title>
</head>

<body>
    <div class="form-container p-5">
        <h2>Cerca il tuo Hotel</h2>
        <form action="" method="$_GET">


            <select class="form-select w-25 " name="filter" aria-label="Default select example">
                <option value="">All</option>
                <option value="1">Free parking</option>
                <option value="2">No parking</option>
            </select>
            <button class="btn btn-outline-primary mt-2"> 
                Cerca
            </button>
        </form>
    </div>
    <div class="container-fluid p-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">description</th>
                    <th scope="col">parking</th>
                    <th scope="col">vote</th>
                    <th scope="col">distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotels as $hotel) {
                ?>

                    <tr>
                        <th scope="row"><?php echo $hotel['name'] ?></th>
                        <td><?php echo $hotel['description'] ?></td>
                        <td><?php
                            if ($hotel['parking'] == true) {
                                echo 'yes';
                            } else {
                                echo 'no';
                            }
                            ?></td>
                        <td><?php echo $hotel['vote'] ?></td>
                        <td><?php echo $hotel['distance_to_center'] . ' ' . 'Km' ?></td>
                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>