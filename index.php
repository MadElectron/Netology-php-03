<?php 

    $animals = [
        'Africa' => [
            'African buffalo',
            'Giant river hog',
            'Impala'
        ],
        'Australia' => [
            'Echidna',
            'Kangaroo',
            'Tasmanian tiger'
        ],
        'Eurasia' => [
            'Blind mole',
            'Indian elephant',
            'Moose'
        ],
        'North America' => [
            'Racoon',
            'Gray fox',
            'Eastern chipmunk'   
        ],
        'South America' => [
            'Armadillo',
            'Ocelot',
            'Pampas deer'
        ]
    ];

    $animalsDouble = [];

    foreach($animals as $continent) {
        foreach ($continent as $animal) {
            if (count(explode(' ', $animal)) == 2 ) {
                $animalsDouble[] = $animal;
            }
        }
    }

    $firstNames = [];
    $lastNames = [];

    foreach($animalsDouble as $animal) {
        list($firstName, $lastName) = explode(' ', $animal);
        $firstNames[] = $firstName;
        $lastNames[] = $lastName;
    }

    shuffle($firstNames);
    shuffle($lastNames);

    $fantasticAnimals = [];

    foreach (array_combine($firstNames, $lastNames) as $firstName => $lastName) {
        $fantasticAnimals[] = "$firstName $lastName";
    }

    echo implode(', ', $fantasticAnimals);
