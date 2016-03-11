<?php
$participants = [
    ['name' => 'Nikita',
     'surname' => 'Lysenko',
     'age' => 32
    ],

    ['name' => 'Dima',
     'surname' => 'Polishchuk',
     'age' => 28
    ],

    ['name' => 'Alex',
     'surname' => 'Shevchuk',
     'age' => 25
    ],

    ['name' => 'Sergey',
     'surname' => 'Oliynyk',
     'age' => 22
    ],

    ['name' => 'Vlad',
     'surname' => 'Kravchenko',
     'age' => 30
    ],

    ['name' => 'Andrey',
     'surname' => 'Tkachenko',
     'age' => 29
    ],

    ['name' => 'Artem',
     'surname' => 'Bondarenko',
     'age' => 24
    ],

    ['name' => 'Ivan',
     'surname' => 'Kovalchuk',
     'age' => 26
    ],

    ['name' => 'Anton',
     'surname' => 'Kovalenko',
     'age' => 31
    ],

    ['name' => 'Maxim',
     'surname' => 'Shevchenko',
     'age' => 28
    ],

    ['name' => 'Oleg',
     'surname' => 'Boyko',
     'age' => 27
    ],

    ['name' => 'Roman',
     'surname' => 'Melnyk',
     'age' => 22
    ],

    ['name' => 'Vlad',
     'surname' => 'Shevchenko',
     'age' => 23
    ],

    ['name' => 'Nikita',
     'surname' => 'Melnyk',
     'age' => 21
    ],

    ['name' => 'Dima',
     'surname' => 'Shevchenko',
     'age' => 26
    ],

    ['name' => 'Alex',
     'surname' => 'Boyko',
     'age' => 37
    ],

    ['name' => 'Vlad',
     'surname' => 'Melnyk',
     'age' => 29
    ],

    ['name' => 'Sergey',
     'surname' => 'Kovalenko',
     'age' => 28
    ],

    ['name' => 'Vlad',
     'surname' => 'Bondarenko',
     'age' => 23
    ],

    ['name' => 'Andrey',
     'surname' => 'Lysenko',
     'age' => 27
    ],

    ['name' => 'Artem',
     'surname' => 'Polishchuk',
     'age' => 24
    ],

    ['name' => 'Ivan',
     'surname' => 'Shevchenko',
     'age' => 30
    ],

    ['name' => 'Anton',
     'surname' => 'Shevchuk',
     'age' => 22
    ],

    ['name' => 'Maxim',
     'surname' => 'Oliynyk',
     'age' => 28
    ],

    ['name' => 'Oleg',
     'surname' => 'Kovalenko',
     'age' => 26
    ],

    ['name' => 'Roman',
     'surname' => 'Melnyk',
     'age' => 25
    ],

    ['name' => 'Vlad',
     'surname' => 'Tkachenko',
     'age' => 19
    ],

    ['name' => 'Dima',
     'surname' => 'Bondarenko',
     'age' => 33
    ],

    ['name' => 'Nikita',
     'surname' => 'Kovalchuk',
     'age' => 24
    ],

    ['name' => 'Andrey',
     'surname' => 'Shevchenko',
     'age' => 35
    ],
];
echo "<pre>";
print_r($participants);

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