<?php

echo '<p><b> ЕКЗАМЕН.</b></p>';
echo '<p><b>Завдання 1. Функція fmod.</b></p>';


$sum = 0;

for ($i = 20; $i <= 45; $i++) {
    if (fmod($i, 5) == 0) {
        echo "$i діляться на 5.<br>";
        $sum += $i;
    }
}

echo "<b>Сума цих чисел: $sum</b>"."<br>";

echo '<p><b>Завдання 2 функція shortestAngleBetweenClockHands.</b> Дано час у форматі hh:mm. 
Знайдіть найкоротший кут між годинниковою та хвилинною стрілками на аналоговому 
годиннику.</p>';

function shortestAngleBetweenClockHands($hours, $minutes) {
    $hourAngle = 0.5 * (60 * $hours + $minutes);
    $minuteAngle = 6 * $minutes;

    $angle = abs($hourAngle - $minuteAngle);//abc возвращает модуль числа

    // Найменший кут між стрілками (враховуючи обертання годинникової стрілки)
    $angle = min(360 - $angle, $angle);

    return $angle;
}

// Приклад виклику функції
$hours = 12;
$minutes = 25;

$minAngle = shortestAngleBetweenClockHands($hours, $minutes);
echo "Найкоротший кут між годинниковою та хвилинною стрілками для $hours:$minutes = $minAngle градусів";


echo '<p><b>Завдання 3 функція compareConcatenatedNumbers та функція findLargestConcatenatedNumber.</b></p>';

function compareConcatenatedNumbers($a, $b) {
    // Об'єднання чисел в обидва порядки і порівняння
    $ab = $a . $b;
    $ba = $b . $a;

    return strcmp($ba, $ab); // порівняння у зворотньому порядку
}

function findLargestConcatenatedNumber($numbers) {
    usort($numbers, 'compareConcatenatedNumbers');
    return implode('', $numbers);
}

// Приклад виклику функції
$str = "38 146 58 93";
$numbers = explode(' ', $str);

$maxNumber = findLargestConcatenatedNumber($numbers);

echo "Найбільше число, складене шляхом конкатенації: $maxNumber";


echo '<p><b>Завдання 4 функція generateCombinations та рекурсивна функція printCombinations.</b></p>';

function printCombinations($arr, $n, $k, $index, $data, $i) {
    // Якщо всі елементи комбінації вибрані, виведіть комбінацію
    if ($index == $k) {
        echo implode(' ', $data) . "\n";
        return;
    }

    // Виберіть поточний елемент і викликайте рекурсивно для наступних позицій
    while ($i < $n) {
        $data[$index] = $arr[$i];
        printCombinations($arr, $n, $k, $index + 1, $data, $i + 1);
        $i++;
    }
}

// Функція для виведення всіх можливих комбінацій
function generateCombinations($arr, $k) {
    $n = count($arr);
    $data = array_fill(0, $k, 0);

    printCombinations($arr, $n, $k, 0, $data, 0);
}

// Приклад виклику функції
$str = "1 2 3 4 5";
$inputK = 2;

$numbers = explode(' ', $str);
generateCombinations($numbers, $inputK);

// У цьому прикладі функція generateCombinations визначає масив унікальних чисел та довжину комбінації, 
// а потім викликає рекурсивну функцію printCombinations, яка виводить всі можливі комбінації заданої довжини.

echo '<p><b>Завдання 5 функція findMaxSubarraySum.</b></p>';

function findMaxSubarraySum($arr) {
    $maxEndingHere = $maxSoFar = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        // Здійснюємо вибір між додаванням поточного елементу до попередньої суми і використанням поточного елементу як початку нової підпослідовності
        $maxEndingHere = max($arr[$i], $maxEndingHere + $arr[$i]);

        // Зберігаємо максимальну суму підпослідовності
        $maxSoFar = max($maxSoFar, $maxEndingHere);
    }

    return $maxSoFar;
}

// Приклад виклику функції
$inputNumbers = "-2 1 -3 4 -1 2 1 -5 4";
$numbers = array_map('intval', explode(' ', $inputNumbers));// Преобразование строки в массив целых чисел

$maxSubarraySum = findMaxSubarraySum($numbers);

echo "Максимальна сума послідовності: $maxSubarraySum";

// У цьому коді функція findMaxSubarraySum обчислює максимальну суму послідовності за допомогою Kadane's algorithm. 
// При виклику цієї функції з введеними числами виводиться максимальна сума послідовності.


echo '<p><b>Завдання 6. Функція getZodiacSign.</b></p>';

function getZodiacSign($day, $month) {
    $signs = array(
        array("name" => "Овен", "start" => array(21, 3), "end" => array(20, 4)),
        array("name" => "Телець", "start" => array(21, 4), "end" => array(20, 5)),
        array("name" => "Близнюки", "start" => array(21, 5), "end" => array(21, 6)),
        array("name" => "Рак", "start" => array(22, 6), "end" => array(22, 7)),
        array("name" => "Лев", "start" => array(23, 7), "end" => array(22, 8)),
        array("name" => "Діва", "start" => array(23, 8), "end" => array(22, 9)),
        array("name" => "Терези", "start" => array(23, 9), "end" => array(22, 10)),
        array("name" => "Скорпіон", "start" => array(23, 10), "end" => array(21, 11)),
        array("name" => "Стрілець", "start" => array(22, 11), "end" => array(21, 12)),
        array("name" => "Козеріг", "start" => array(22, 12), "end" => array(20, 1)),
        array("name" => "Водолій", "start" => array(21, 1), "end" => array(19, 2)),
        array("name" => "Риби", "start" => array(20, 2), "end" => array(20, 3))
    );

    foreach ($signs as $sign) {
        $startDay = $sign['start'][0];
        $startMonth = $sign['start'][1];
        $endDay = $sign['end'][0];
        $endMonth = $sign['end'][1];

        if (($month == $startMonth && $day >= $startDay) || ($month == $endMonth && $day <= $endDay)) {
            return array(
                'name' => $sign['name'],
                'period' => sprintf("%02d.%02d - %02d.%02d", $startDay, $startMonth, $endDay, $endMonth)
            );
        }
    }

    return "Не знайдено знак зодіаку для введеної дати.";
}

// Приклад виклику функції
$dateInput = "05.10.1975 року";
list($day, $month, $year) = sscanf($dateInput, "%d.%d.%d");

$zodiacSignInfo = getZodiacSign($day, $month);

if (is_array($zodiacSignInfo)) {
    echo "Знак зодіаку для мого дня народження $dateInput: {$zodiacSignInfo['name']}, період {$zodiacSignInfo['period']}";
} else {
    echo $zodiacSignInfo;
}

// У цьому коді функція getZodiacSign повертає масив з інформацією про знак зодіаку, який містить ім'я знака 
// та його період у вигляді рядка "число.місяць - число.місяць". Якщо знак зодіаку не знайдено, повертається 
// відповідне повідомлення.

echo '<p><b>Завдання 7. Функція getCorrectForm.</b></p>';

function getCorrectForm($number, $singular, $pluralTwo, $pluralFive) {
    $result = '';

    if ($number == 1) {
        $result = "$number $singular";
    } elseif ($number >= 2 && $number <= 4) {
        $result = "$number $pluralTwo";
    } elseif ($number >= 5 || $number == 0) {
        $result = "$number $pluralFive";
    }

    return $result;
}

// Приклад виклику функції
$number = 1;
$singularForm = "яблуко";
$pluralTwoForm = "яблука";
$pluralFiveForm = "яблук";

$resultPhrase = getCorrectForm($number, $singularForm, $pluralTwoForm, $pluralFiveForm);

echo $resultPhrase;

// У цьому коді функція getCorrectForm приймає число та три форми слова: для одного об'єкта, для двох об'єктів 
// та для п'яти об'єктів. Функція визначає правильну форму слова в залежності від числа та повертає рядок, який 
// складається з числа та відповідної форми слова.

echo '<p><b>Завдання 8. Функція isLuckyTicket, функція findLuckyTicketsInRange.</b></p>';

function isLuckyTicket($number) {
    // Перевірка, чи є квиток щасливим
    $digits = str_split($number);//розбіває строку на масив символів (подстрок) на основі заданої дліни
    $halfLength = count($digits) / 2;//полудліна
    $firstHalfSum = array_sum(array_slice($digits, 0, $halfLength));//перша полудліна
    $secondHalfSum = array_sum(array_slice($digits, $halfLength));//друга полудліна

    return $firstHalfSum == $secondHalfSum;
}

function findLuckyTicketsInRange($start, $end) {
    // Знаходження всіх щасливих квитків у заданому діапазоні
    $luckyTickets = array();

    for ($i = $start; $i <= $end; $i++) {
        if (isLuckyTicket($i)) {
            $luckyTickets[] = $i;
        }
    }

    return $luckyTickets;
}

// Приклад виклику функції
$startTicket = 111111;
$endTicket = 123321;

$luckyTicketsInRange = findLuckyTicketsInRange($startTicket, $endTicket);
$LuckyTickets = count($luckyTicketsInRange);

echo "<b>Щасливі квитки у діапазоні від $startTicket до $endTicket:</b> " . implode(", ", $luckyTicketsInRange) . "\n".'</br>';
echo "<b>Кількість щасливих квитків: $LuckyTickets.</b>";

// У цьому коді функція isLuckyTicket перевіряє, чи є номер квитка щасливим, а функція findLuckyTicketsInRange 
// знаходить всі щасливі квитки у заданому діапазоні. Змінна $LuckyTickets, зберігає кількіть 
// счастливих квитків, та виводить їх.
?>