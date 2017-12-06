<?php


//Все континенты и их животные
$continents = [
    "Africa" => ["African Hare", "Baboon", "Elephant Shrew"],
    "Australia" => ["Platypus", "Sugar Glider", "Dingo"],
    "South America" => ["Anaconda", "Andean Condor", "Llama"],
    "Antarctica" => ["Warty Squid", "Albatross", "Hourglass dolphin"],
    "Asia" => ["White Tiger", "Russian Bear", "Lepus europaeus"]
];

$newArrContinents = [];
$secondPart = [];
foreach ($continents as $continent => $animals) {
    foreach ($animals as $animal) {
        $sliced = explode(' ', $animal);
        if (count($sliced) == 2) {
            $newArrContinents[$continent][] = $sliced[0];
            $secondPart[] = $sliced[1];
        }
    }
}
shuffle($secondPart);

foreach ($newArrContinents as $continent => $animalsName) {
    echo "<h2>".$continent."</h2>";
    $fantasyAnimalNamesOfContinent = [];
    foreach ($animalsName as $animal) {
        $fantasyAnimalNamesOfContinent[] = $animal.' '.array_pop($secondPart);
    }
    echo implode(', ', $fantasyAnimalNamesOfContinent);
}







//******************************************************************
// С Т А Р А Я   Р Е А Л И З А Ц И Я
//******************************************************************






////Ищем животных из двух слов
//$animalsOfTwoWords = [];
//foreach ($continents as $continent => $animals) {
//    foreach ($animals as $animal) {
//        $slice = explode(' ', $animal);
//        if(count($slice) == 2) {
//            $animalsOfTwoWords[] = $animal;
//        }
//    }
//}
//
////Делим названия на первое и второе слово
//$newAnimals = [
//    'firstPart' => [],
//    'secondPart' => []
//];
//foreach ($animalsOfTwoWords as $animal) {
//    $slice = explode(' ', $animal);
//    $newAnimals['firstPart'][] = $slice[0];
//    $newAnimals['secondPart'][] = $slice[1];
//}
//shuffle($newAnimals['firstPart']);
//shuffle($newAnimals['secondPart']);
//
////Назначаем рендомно имена
//$randomNames = [];
//foreach ($newAnimals['firstPart'] as $name) {
//    foreach ($continents as $continent => $animals) {
//        foreach ($animals as $animal) {
//            $slice = explode(' ', $animal);
//            if(count($slice) == 2 && $slice[0] == $name) {
//                $randomNames[$continent][] = $name.' '.array_pop($newAnimals['secondPart']);
//            }
//        }
//    }
//}
//
////Выводим на экран название животных и место их обитания
//foreach ($randomNames as $country => $animals) {
//    echo "<h2>".$country."</h2>";
//    echo implode(', ', $animals);
//}