<?php
//Part 1//
$name = ["Nikita","Dima","Alex","Sergey","Vlad","Andrey","Artem","Ivan","Anton","Maxim","Oleg","Roman"];
$surname = ["Melnyk","Shevchenko","Boyko","Kovalenko","Bondarenko","Tkachenko","Kovalchuk","Kravchenko",
    "Oliynyk","Shevchuk","Polishchuk","Lysenko"];

for ($i = 1; $i <= 30; $i++){
    $nameNew = array_rand($name, 1);
    $surnameNew = array_rand($surname, 1);
    $age = rand(18, 60);
    $participants [$i] = ["name" => $name[$nameNew], "surname" => $surname[$surnameNew], "age" => $age];
}
echo '<pre>';
print_r($participants);
echo '</pre>';

//Part 2//
shuffle($participants);

foreach($participants as $key => $values){
    if($key <= 28){
        $key++;
        echo "В {$key} день из игры выбыл: {$values['name']} {$values['surname']} в возрасте {$values['age']} <br>";
    }else{
        echo "<b><i>Победитель: {$values['name']}  {$values['surname']} в возрасте {$values['age']} </b><i>";
    }
}

?>

