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

    foreach($animals as $continentName => $continent) {
        foreach ($continent as $animal) {
            if (count(explode(' ', $animal)) == 2 ) {
                $continentsByAnimal[$animal] = $continentName;
            }
        }
    }

    foreach($continentsByAnimal as $animal => $continent) {
        list($firstName, $lastName) = explode(' ', $animal);
        $firstNameContinents[$firstName] = $continent;
        $lastNames[] = $lastName;
    }

    $firstNames = array_keys($firstNameContinents);

    shuffle($firstNames);
    shuffle($lastNames);

    echo "<pre>";
    print_r($firstNameContinents);

    foreach (array_combine($firstNames, $lastNames) as $firstName => $lastName) {
        $continentName = $firstNameContinents[$firstName];
        $fantasticAnimalsContinents[$continentName][] = "$firstName $lastName";
    }

    ksort($fantasticAnimalsContinents);

    foreach($fantasticAnimalsContinents as $continentName => $animals) {
        echo "<h2>$continentName</h2>";
        echo implode(', ', $animals); 
    }
