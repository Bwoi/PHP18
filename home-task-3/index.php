<?php


//Все континенты и их животные
$continents = [
    "Africa" => ["African Hare", "Baboon", "Elephant Shrew"],
    "Australia" => ["Platypus", "Sugar Glider", "Dingo"],
    "South America" => ["Anaconda", "Andean Condor", "Llama"],
    "Antarctica" => ["Warty Squid", "Albatross", "Hourglass dolphin"],
    "Asia" => ["White Tiger", "Russian Bear", "Lepus europaeus"]
];

//Ищем животных из двух слов
$animalsOfTwoWords = [];
foreach ($continents as $continent => $animals) {
    foreach ($animals as $animal) {
        $slice = explode(' ', $animal);
        if(count($slice) == 2) {
            $animalsOfTwoWords[] = $animal;
        }
    }
}

//Делим названия на первое и второе слово
$newAnimals = [
    'firstPart' => [],
    'secondPart' => []
];
foreach ($animalsOfTwoWords as $animal) {
    $slice = explode(' ', $animal);
    $newAnimals['firstPart'][] = $slice[0];
    $newAnimals['secondPart'][] = $slice[1];
}
shuffle($newAnimals['firstPart']);
shuffle($newAnimals['secondPart']);

//Назначаем рендомно имена
$randomNames = [];
foreach ($newAnimals['firstPart'] as $name) {
    foreach ($continents as $continent => $animals) {
        foreach ($animals as $animal) {
            $slice = explode(' ', $animal);
            if(count($slice) == 2 && $slice[0] == $name) {
                $randomNames[$continent][] = $name.' '.array_pop($newAnimals['secondPart']);
            }
        }
    }
}

//Выводим на экран название животных и место их обитания
foreach ($randomNames as $country => $animals) {
    echo "<h2>".$country."</h2>";
    echo implode(', ', $animals);
}