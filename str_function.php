<?php

$lang = 'ua';
	
switch ($lang) {
   case 'ua':
      $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
      break;
   case 'en':
       $arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
       break;
}
var_dump($arr);


echo sqrt(16) .'</br>'; //вироховування кваратного кореня

echo pow (2, 3) .'</br>'; // 2 в ступені 3 (зведення до степеня)

echo sqrt(400) .'</br>';//корінь квадратний
echo pow (16, 50) .'</br>';

echo round(3.4) .'</br>'; //округлюємо до цілого числа
echo round(3.448687297, 4) .'</br>'; //округлюємо до  числа значання після коми 4 цифра

echo ceil(6.1) .'</br>'; //округлюємо до цілого числа в більшу сторону (7)
echo floor(6.9) .'</br>'; //округлюємо до цілого числа в меншу сторону (6)

echo max(1,2,3,4,5,6,7,8,9) .'</br>';//виводит максимальне значення
echo min(1,2,3,4,5,6,7,8,9) .'</br>';//виводит минимальне значення

echo mt_rand(5, 99) .'</br>';// виводить рандомно значення
echo abs(1) .'</br>';//повертає модуль числа 

$a = 12;
$b = --$a;
echo  'a='.$a .'</br>' .'b='.$b .'</br>';




////СТРОКОВІ ФУНКЦЇ

echo "функція strtolower " .strtolower('GHYTFCJK') .'</br>';//з великого регистру робіть строчні літири
echo "функція strtoupper " .strtoupper('hj85ber4vstvesc3wt') .'</br>';//зі строчних літеру робіть великі літири
echo "функція ucfirst " .ucfirst('ierglthhrth') .'</br>';// Ierglthhrth
echo "функція lcfirst " .lcfirst('Terglthhrth') .'</br>';// terglthhrth

echo "функція ucwords " .ucwords('fhf fjrgj reghigh') .'</br>';// Fhf Fjrgj Reghigh

echo "функція strlen " .strlen('hreggz') .'</br>';
echo "функція strlen " .strlen('будь якись текст') .'</br>';
//Дана змінна $password, //в якій зберігається пароль користувача. Якщо кількість символів пароля більше 5 і 
//менше 10, то виведіть користувачеві повідомлення про те, що пароль підходить, інакше повідомлення про те, що 
//потрібно придумати інший пароль.

echo strlen($sdf);

function kds(){

}

$password = "serkjjhgfd";
if (strlen($password) >5 && strlen($password) <10){
    echo "Пароль підходить";
}
else{
    echo "Пароль не відповідає вимогам";
}


echo "функція substr " .substr($password, -3).'</br>';//gfd
echo "функція substr " .substr($password, 3).'</br>';//kjjhgfd
echo "функція substr " .substr($password, 3, 5).'</br>';//kjjhg

echo ord('a'); // виведе 97 - код цієї літери (а)
echo chr(97);// виведе літеру - a (яка має код 97)

echo strip_tags('eryb6etbyhe56u56ebhe56b').'</br>';//вони працюють впарі
echo htmlspecialchars('eryb6etbyhe56u56ebhe56b').'</br>';//вони працюють впарі

echo strip_tags(htmlspecialchars('eryb6etbyhe56u56ebhe56b')).'</br>';

echo str_repeat('m', 5).'</br>';

include('lesson1.index.php'); //Додає код функції з файлу lesson1.index.php в місце свого виклику
//include('lesson1.index.php'); //Цей виклик спрацює
//include('lesson1.index.php'); //При повторному виклику буде помилка Fatal error: Cannot redeclare AddNumbersColor()

//Рекурсія, функція викликає сама себе
// $y=1;
// function fnas($y){
//     echo $y;
//     $y++;

//     if($key <=10){
//         fnas();
//     }
// }




?>