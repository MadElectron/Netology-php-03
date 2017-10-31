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

    $firstNameContinents = [];
    $lastNames = [];

    foreach($animals as $continentName => $continent) {
        foreach ($continent as $animal) {
            $names = explode(' ', $animal);

            if (count($names) == 2 ) {
                list($firstName, $lastName) = $names;     
                $firstNameContinents[$firstName] = $continentName;
                $lastNames[] = $lastName;                
            }
        }
    }

    $firstNames = array_keys($firstNameContinents);

    shuffle($firstNames);
    shuffle($lastNames);

    foreach ($firstNames as $firstNameNumber => $firstName) {
        $continentName = $firstNameContinents[$firstName];
        $lastName = $lastNames[$firstNameNumber];
        $fantasticAnimalsContinents[$continentName][] = "$firstName $lastName";
    }

    ksort($fantasticAnimalsContinents);

    foreach($fantasticAnimalsContinents as $continentName => $animals) {
        echo "<h2>$continentName</h2>";
        echo implode(', ', $animals); 
    }
