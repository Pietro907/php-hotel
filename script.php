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

$parking = $_GET['parking'];
//var_dump($parking);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        height: 150px;
        width: 50%;
        margin: 0 auto;
    }
    h3{
        padding-left: 5rem;
    }
</style>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card w-50">
                    <div class="table m-0">
                        <thead>

                            <tr>
                                <th>
                                    <h3 class="border m-0 py-3 ps-3">Risultati: </h3>
                                </th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td class="border">
                                    <?php
                                    if ($parking != null) {
                                        echo `<h3>Risultati parcheggio: </h3>`;
                                        foreach ($hotels as $hotel) {

                                            if ($hotel['parking'] == true) {
                                                echo "<h3 class='m-0 py-3 border d-flex justify-content-start align-items-center'> - {$hotel['name']}</h3>";
                                            }
                                        }
                                    } else {

                                        echo "<h3>Tutto esaurito</h3>";
                                    };

                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </div>

                    <!-- <h3>
                        Risultati
                        <p>
                            <?php
                            if ($parking != null) {
                                echo `<h3>Risultati parcheggio: </h3>`;
                                foreach ($hotels as $hotel) {

                                    if ($hotel['parking'] == true) {
                                        echo "<h3>{$hotel['name']}</h3>";
                                    }
                                }
                            } else {

                                echo 'Tutto esaurito';
                            };

                            ?>
                        </p>

                    </h3> -->


                </div>
            </div>
        </div>

    </div>


</body>

</html>