<!-- Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php
    $matches = [
        [
            "squadra_casa" => "Olimpia Milano",
            "squadra_ospite" => "Grissinbon Reggio Emilia",
            "punti_casa" => 70,
            "punti_ospiti" => 90
        ],
        [
            "squadra_casa" => "Dinamo Sassari",
            "squadra_ospite" => "Treviso",
            "punti_casa" => 100,
            "punti_ospiti" => 99
        ]
    ];

    foreach ($matches as $match) {
        echo $match["squadra_casa"] . " - " . $match["squadra_ospite"] . " | " . $match["punti_casa"] . " - " . $match["punti_ospiti"]. "<br>";     
    }
?>