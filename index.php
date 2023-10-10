<!-- Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.

Iniziate in modo graduale. Prima stampate in pagina i dati, senza preoccuparvi dello stile. 

Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

Bonus:
 Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.

Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore) Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. -->



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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>

                    </tr>
                </thead>
                <tbody>



                    <tr>

                        <?php foreach ($hotels as $hotel) : ?>

                            <!-- name -->
                            <td>
                                <?php echo $hotel['name']; ?>
                            </td>

                            <!-- description -->
                            <td>
                                <?php echo $hotel['dscription']; ?>
                            </td>

                            <!-- parking -->
                            <td>
                                <?php echo $hotel['parking']; ?>
                                <?php
                                if ($hotel['parking'] == 'true') {
                                    echo 'true';
                                } else {
                                    echo 'false';
                                }
                                ?>
                            </td>

                            <!-- vote -->
                            <td>
                                <?php echo $hotel['vote']; ?>
                            </td>


                            <!-- distance_of_center -->
                            <td>
                                <?php echo $hotel['distance_of_center']; ?>
                            </td>


                        <?php endforeach ?>

                    </tr>





                </tbody>
            </table>
        </div>
    </div>



    <ul>
        <?php foreach ($hotels as $hotel) : ?>

            <li>

                <?php
                echo $hotel['name'] . ' - ' . $hotel['description'] . ' - ' . $hotel['parking'] . ' - ' . $hotel['vote'] . ' - ' . $hotel['distance_to_center']
                ?>

                <?php
                if ($hotel['parking'] == 'true') {
                    echo 'true';
                } else {
                    echo 'false';
                }
                ?>

            </li>

        <?php endforeach; ?>

    </ul>







</body>

</html>