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
    <title>HOTEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1 class="text-center text-uppercase fw-bold text-light">hotel</h1>
    </header>
    <main>
        <div class="container my-5">
            <table class="table table-hover">
                <!--heade-table-->
                <thead>
                    <tr>
                        <th scope="col">HOTEL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col" class="text-center">Vote</th>
                        <th scope="col" class="text-center">Parking</th>
                        <th scope="col" class="text-center">Distance to center</th>
                    </tr>
                </thead>
                <!--add-loop-for-body-table-->
                <?php foreach ($hotels as $hotel): ?>

                    <tbody>
                        <tr>
                            <th scope="row"><i class="fa-solid fa-hotel"></i></th>
                            <td><?= $hotel["name"] ?></td>
                            <td><?= $hotel["description"] ?></td>
                            <td class="text-center"><?= $hotel["vote"] ?></td>
                            <td class="text-center"><? if ($hotel["parking"]) echo "si" ?></td>
                            <td class="text-center"><?= $hotel["distance_to_center"] ?></td>
                        </tr>

                    </tbody>

                <?php endforeach; ?>

            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>


</html>