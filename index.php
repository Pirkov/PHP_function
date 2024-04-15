<?php
$headers = apache_request_headers();
foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";
}
echo "</br>";
// Оголошення переміної $num
$num = 10;
// Виводит значенняпереміної $num на веб-сторінку
echo $num;

//міняєм значення переміної
$num = 22;
echo $num;

//Змінні
$a = 15;
$b = $a;
echo $b;

$num_1 = 11;
$num_2 = 35;
$num = $num_1 + $num_2;
echo "num_1 = $num_1 num_2 = $num_2 <br>";//num_1 = 11 num_2 = 35
echo 'num_1 = $num_1 num_2 = $num_2 <br>';//num_1 = $num_1 num_2 = $num_2
echo "$num_1 + $num_2= ".$num .'<br>';//11 + 35= 46
$name = 'Олександр Володимирович';
echo ("Hello, ".$name."!") .'<br>';//Hello, Олександр Володимирович!

//ТИПИ ДАННИХ

//itn (цілочисленний тип)
//Усі числа в десятковій системі мають значення28
$num_10 = 28; //десяткове число
$num_2 = 0b11100; //Двійкове число (28 у десятковій системі)
$num_8 = 034; //вісімкове число (28 у десятковій системі)
$num_16 = 0x1C; //шістнадцяткове число (28 у десятковій системі)
echo "num_10 = $num_10 <br>";
echo "num_2 = $num_2 <br>";
echo "num_8 = $num_8 <br>";
echo "num_16 = $num_16 <br>";

//Тип fload (числа з плаваючою точкою)
$a1 = 1.5;
$a2 = 1.3e4;// 1.3 * 10^4
$a3 = 6E-8; // 0.00000006
echo "$a1 <br>";
echo "$a2 <br>";
echo "$a3 <br>";

//Тип bool (лоічний тип)
$foo = true;
$boo = false;
echo "$foo <br>";
echo "$boo <br>";

//ПЕРЕМІННІ ТИПИ ДАНИХ

 //Тип string (сроки)
 $a = 10;
 $b = 5;
 $result = "$a+$b <br>";
 echo $result;
 $result = '$a+$b';
 echo "$result<br>";
 
 //Специальное значение nul - вдсутність значення
 $a;
 echo $a;
 
 //Динамическая типизация
 $id = 123;
 echo "<p>id = $id</p> <br>";
 $id = "jhveruuyeru";
 echo "<p>id = $id</p> <br>";
 
 
 //ОПЕРАЦІЇ В РНР
 //Арифметичні операції
 $a = 12;
 echo $a % 5; // равно 2 - отримання залишку від розподілу (2)
 $g = 8+2; // 10 додовання
 $b = 8-2; // 6 віднімання
 $c = 8*2; // 16 множення
 $d = 8/2; // 4 розподіл
 $e = 8%2; // 0, розподіл за модулем
 $f = 8**2; // 64, зведення на ступінь
 echo "<br>$g <br>";
 echo "$b <br>";
 echo "$c <br>";
 echo "$d <br>";
 echo "$e <br>";
 echo "$f <br>";
 echo sqrt(16) .'</br>'; //вироховування кваратного кореня

//Інкурмент
$a = 12;
$b = ++$a;//$b = 13 ( a=13 b=13)
echo "a = $a b = $b <br>";

//Декремент
$a = 12;
$b = --$a;//$b = 11 ( a=11 b=11)
echo "a = $a b = $b <br>";
//Массів
 $array = array(
 	"1" => "П",
	"2" => "Е",
 	"3" => "Р",
 	"4" => "Е",
 	"5" => "Р",
 	"6" => "В",
 	"7" => "А",
 	"8" => "10 хв",
 	"9" => ":-) :-) :-)"
 	);
 	foreach( $array as $key => $value){
		echo $value;
        
 	}
     echo "<br/>";
//
	

//Об`єднення рядків
$a="Привіт";
$b="світ";
echo $a. " ". $b. "!<br>"; //Привіт світ!

//Операції порівняння Оператор рівності та тотожності
//$a = (2 == "2"); // true (значення рівні)
//$b = (2 === "2"); // false (значення становлять різні типи)

//$a = (2! == "2"); // false (оскільки значення рівні)
//$b = (2! === "2"); // true (оскільки значення становлять різні типи)


//Оператор <=>
$a = 2 <=> 2; // 0 (еквівалентнно 2 == 2)
$b = 3 <=> 2; // 1 (еквівалентнно 3 > 1)
$c = 1 <=> 2; // -1 (еквівалентнно 1 < 2)
echo "a=$a b=$b c=$c <br>"; // а = 0 b = 1 c = -1

//Приклади логічних операцій:
$a = (true && false); // false
// аналогічно
$a = (true and false); // false

$b = (true || false); // true
// аналогічно до наступної операції
$b = (true or false); // true

$c =! True; // false
//Окремо приклад з операцією xor
$a = (true xor true); // false
$b = (false xor true); // true
$c = (false xor false); // false

//ОПЕРАЦІЯ ПРИСВОЄННЯ
//Додавання з наступним присвоєнням результату.
$a=12;
$a +=5;
echo $a; //17

//Віднімання з наступним присвоєнням результату.
$a=12;
$a -=5;
echo "<br>$a"; //7

//Збільшення з наступним присвоєнням результату.
$a=12;
$a *=5;
echo "<br>$a"; //60

//Поділ з наступним присвоєнням результату.
$a=12;
$a /=5;
echo "<br>$a"; //2,4

//Об`єднання з наступним присвоєнням результату.
$a=12;
$a .=5;
echo "<br>$a"; //125

//Отримання залишку від поділу з наступним присвоєнням результату.
$a=12;
$a %=5;
echo "<br>$a"; //2

//Отримання результату від зведення у ступінь.
$a=8;
$a **=2;
echo "<br>$a"; //64 (8 ступень 2)

//Отримання результату від операції логічного множення.
$a=5;
$a &=4;
echo "<br>$a"; //101&100=100 - 4

//Отримання результату від операції логічного складання.
$a=5;
$a |=4;
echo "<br>$a"; //101|100=101 - 5

//Отримання результату від операції щовиключає АБО.
$a=5;
$a ^=4;
echo "<br>$a"; //101^100=001 - 1

//Отримання результату від операції зсуву вліво.
$a=8;
$a <<=1;
echo "<br>$a"; //1000<<1=10000 - 16

//Отримання результату від операції зсуву праворуч.
$a=8;
$a >>=1;
echo "<br>$a" .'<br>'; //1000>>1=100 - 4

//Зв'язок між PHP та HTML
$sum = 110;
echo "<i>Sum is</i> <span style = 'color:red;'> ".$sum."</span>" .'<br>';//буде червоним кольором

//В інструкцію switch передається або обчислений вираз, або, частіше за все — змінна. 
$role = "admin";//You have full access!
$role = "user";//You have full access to data but cannot change table structure!
$role = "operator";//Your can only read data!
switch ($role) {
    case "admin":
        echo "You have full access!";
        break;
    case "user":
        echo " You have full access to data but cannot change table structure!";
        break;
    case "operator":
        echo "Your can only read data!";
        break;
    default:
    echo "Your role is not recognized!";//Your role is not recognized!
}
echo '<br>';

//Масиви та цикли
$ar1 = array();         // empty array
$ar2 = array(10,20,30); // array with 3 elements:
                        // $ar2[0] has value 10,
                        // $ar2[1] has value 20
                        // and $ar2[2] has value 30

$ar3 = array("Argentina", "Belgium", "Canada"); // array with 3 elements:
                        // $ar3[0] has value "Argentina",
                        // $ar3[1] has value " Belgium "
                        // and $ar3[0] has value "Canada"

$ar4 = array("yellow"=>"banana", "red"=>"cherry", "green"=>"apple");
                        // associative array
$ar5 = [10,20,30];
$ar6 = ["yellow"=>"banana", "red"=>"cherry", "green"=>"apple"];                     
print_r($ar5) ."</br>";//Array ( [0] => 10 [1] => 20 [2] => 30 )
print_r($ar6) ."</br>";//Array ( [yellow] => banana [red] => cherry [green] => apple )

$ar4 = array("yellow"=>"banana", "red"=>"cherry", "green"=>"apple");
echo "Length of array is ".count($ar4)."</br>";//Length of array is 3
print_r($ar4);//Array ( [yellow] => banana [red] => cherry [green] => apple )


//ЦИКЛИ
echo "</br>";
$ar4 = array("yellow"=>"banana", "red"=>"cherry", "green"=>"apple");
    echo "Length of array is ".count($ar4)."</br>";//Length of array is 3
    print_r($ar4);//Array ( [yellow] => banana [red] => cherry [green] => apple )

    $ar=array(11,5,89,117,56,200);
    echo "</br>From while() loop:</br>";//From while() loop:
    $i=0;
    while($i < count($ar))
    {
        echo $ar[$i]." ";
        $i++;               
    }
    echo "</br>";
    echo "</br>From for() loop sorted array:</br>";//From for() loop sorted array:
    sort($ar);
    for($i=0;$i<count($ar);$i++)
    {
        echo $ar[$i]." ";   //5 11 56 89 117 200
    }
    echo "</br>";
    echo "</br>From foreach() loop assotiative array:</br>";//From foreach() loop assotiative array:
    foreach($ar4 as $k => $v)
    {
        echo "Key:".$k." value:".$v."<br/>";//Key:yellow value:banana
                                            //Key:red value:cherry
                                            //Key:green value:apple
    }

//ФУНКЦЇ
echo "</br>";
AddNumbersColor(110, 50000,"green");
function AddNumbersColor($n1, $n2, $color)
    {
        echo "Sum is: <span style='color:".$color.";'>".($n1+$n2)."</span><br/>";
    }
   
    AddNumberColor(110, 50000);
    function AddNumberColor($n1, $n2, $color='#EE33FF')//? Додали третьому параметру функції значення кольору за замовченням. 
    {
        echo "Sum is: <span style='color:".$color.";'>".($n1+$n2)."</span><br/>";
    }
    
//
    function AddNumbers($n1, $n2)
{
    return ($n1+$n2);
}
$total = AddNumbers(1,2)+AddNumbers(100,1000);//1103
echo $total."<br/>"; //1103

//
function IncNumberByTen($n1)
{
    $n1 += 10;
    echo 'From function:'.$n1.'</br>';//From function:15
}
$number = 5;
IncNumberByTen($number);
echo 'From outside function:'.$number.'</br>';//From outside function:5

//
function IncNumberByTenRef(&$n1)
{
    $n1+=10;
    echo 'From function:'.$n1.'</br>';//From function:15
}
$number2=5;
IncNumberByTenRef($number2);
echo 'From outside function:'.$number2.'</br>';//From outside function:15

//
$title = "Chapter 1";
function ColorTitle($color)
{
    global $title;
    echo "<h1 style = 'color:".$color.";'>".$title."</h1>";
   
}
ColorTitle('#EE33FF');

//include та require
//Перший файл одного коду. Містяться визначення наших функцій

AddNumbers1Color(110, 50000);

$total = AddNumbers1(1,2)+AddNumbers1(100,1000);
echo $total.'</br>';

$number = 5;
IncNumberByTen2($number);
echo 'From outside function:'.$number.'</br>';

$number2 = 5;
IncNumberByTenRef2($number2);
echo 'From outside function:'.$number2.'</br>';

$title = "Chapter 1";
ColorTitle2('#EE33FF');

//Другий файл одного коду, їх виклики.
function AddNumbers1Color($n1, $n2, $color='#EE33FF')
{
    echo "Sum is: <span style='color:".$color.";'>".($n1+$n2)."</span><br/>";
}

function AddNumbers1($n1, $n2)
{
    return ($n1+$n2);
}

function IncNumberByTen2($n1)
{
    $n1+=10;
    echo 'From function:'.$n1.'</br>';
}

function IncNumberByTenRef2(&$n1)
{
    $n1+=10;
    echo 'From function:'.$n1.'</br>';
}

function ColorTitle2($color)
{
    global $title;
    echo "<h1 style='color:".$color.";'>".$title."</h1>";
}

//Передавання даних на сервер методом GET
//mysite/lesson1.index.php?name=Olexandr&country=UA&city=Kamianske.
// $name=$_GET['name'];
// $country=$_GET['country'];
// $city=$_GET['city'];
// echo 'I received such data:</br>';
// echo 'Name is: '.$name.'<br/>';
// echo 'Country is: '.$country
// echo 'City is: '.$city.'<br/>';


echo (trim(' sdfsf')).'</br>';//sdfsf
echo trim('sdf/sdfsfabcdef', '/../').'</br>';//sdf/sdfsfabcdef
echo trim('sdf/sdfsfabcdefabcdef', '').'</br>';

ltrim('sdfsf').'</br>';

rtrim('sdfsf').'</br>';

$f="abcbcd";
echo str_pad($f, 10, '45').'</br>';//abcbcd4545
echo str_pad($f, 10, '45', STR_PAD_LEFT).'</br>';//4545abcbcd
echo strrev('1234567890').'</br>';//0987654321
echo str_shuffle('1234567890').'</br>';//3078642195 змінює  рандомна 


$data = '06-10-2023'.'</br>';

$endData = explode('-', $data);
$end2Data = ['06', '10', '2023'];

var_dump($endData);
echo "Дата: "." $endData[2]"." $endData[1]"." $endData[0]".'</br>';

$q = "abcdeabcde";
$qq = str_split($q, 4);
print_r($qq).'</br>'; //Array ( [0] => abcd [1] => eabc [2] => de )


$st = 'sdf=abcdea=bcde';
parse_str($st, $arr);
var_dump($arr).'</br>';//array(1) { ["sdf"]=> string(11) "abcdea=bcde" }

$q = "sdfsdfsdfsdrf";
echo str_replace('t', '1', '$q').'</br>';//$q

echo strpos('http://mysite/lesson1.index.php', "/").'</br>';//5
echo strpos('asd asdasd', 's', 3).'</br>';//5

$rt = "http://mysite/lesson1.index.php\"";
echo $rt.'</br>';//http://mysite/lesson1.index.php"

if(strpos($rt, 'http://') ===0){
    echo '+';                          //+
}else{
    echo '-';
}

//рахує кількість слів 
echo str_word_count('aegr WEFTERG FRGRTH rtht').'</br>';//+4

//функція яка буде читати будь який текст
echo htmlspecialchars("<b>asdfg</b>").'</br>';//<b>asdfg</b>
echo htmlspecialchars_decode("<b>asdfg</b>").'</br>';//asdfg - виведено жирним

//ПОЧАТОК ДОМАШНЬОГО ЗАВДАННЯ

//Функція вираховує кількість елементів звичайного або асоціативного масиу
$arr = ['1', '2', '3', '4', '5',];
echo count($arr).'</br>';//5

//Функція range використовується для створення масиву, що містить діапазон чисел або символів. Вона приймає від одного до трьох аргументів та повертає масив.
var_dump(range('a', 't'));//array(20) { [0]=> string(1) "a" [1]=> string(1) "b" [2]=> string(1) "c" [3]=> string(1) "d" [4]=> string(1) "e" [5]=> string(1) "f" [6]=> string(1) "g" [7]=> string(1) "h" [8]=> string(1) "i" [9]=> string(1) "j" [10]=> string(1) "k" [11]=> string(1) "l" [12]=> string(1) "m" [13]=> string(1) "n" [14]=> string(1) "o" [15]=> string(1) "p" [16]=> string(1) "q" [17]=> string(1) "r" [18]=> string(1) "s" [19]=> string(1) "t" }
var_dump(range(1, 30, 2));//array(15) { [0]=> int(1) [1]=> int(3) [2]=> int(5) [3]=> int(7) [4]=> int(9) [5]=> int(11) [6]=> int(13) [7]=> int(15) [8]=> int(17) [9]=> int(19) [10]=> int(21) [11]=> int(23) [12]=> int(25) [13]=> int(27) [14]=> int(29) }

//Функція array_sum() вираховує суму елементів масиву.
$arraySum = [1,2,3,4,5];
echo array_sum($arraySum).'</br>';//15

//Функція array_sum() вираховує суму елементів
$tr = 346734;
echo array_sum(str_split($tr, 1)).'</br>';//27

//Функція array_product() перемножує всі елементи і виводить загальну суму
$ards = [1,2,3,4,5];
echo array_product($ards).'</br>';//120

//Функція array_slice() Вона дозволяє вибрати певний діапазон елементів з вихідного масиву та повернути цей підмасив у новому масиві.
$ardss = [1, 2, 3, 4, 5];
$rrr = array_slice($ardss, 0, 2);
var_dump($rrr);//array(2) { [0]=> int(1) [1]=> int(2) }

echo '</br>';
$arr = ['1', '2', '3', '4', '5',];
$r = array_slice($ardss, 3, 2);
var_dump($r);//array(2) { [0]=> int(4) [1]=> int(5) }
echo '</br>';

//Функція array_merge() об`єднання двох та більше масивів в новий масив
$arr = ['1', '2', '3', '4', '5',];
$ardss = [1, 2, 3, 4, 5];
var_dump(array_merge($arr, $ardss));//array(10) { [0]=> string(1) "1" [1]=> string(1) "2" [2]=> string(1) "3" [3]=> string(1) "4" [4]=> string(1) "5" [5]=> int(1) [6]=> int(2) [7]=> int(3) [8]=> int(4) [9]=> int(5) }
echo '</br>';

//Функція array_merge_recursive() об`єднання двох та більше масивів в новий масив, якщо ключі співпадають значення об'єднуються в масив.
$arr = ['r'=>'1', '2', '3', '4', '5',];
$ardss = ['r'=>1, 2, 3, 4, 5];
var_dump(array_merge_recursive($arr, $ardss));//array(9) { ["r"]=> array(2) { [0]=> string(1) "1" [1]=> int(1) } [0]=> string(1) "2" [1]=> string(1) "3" [2]=> string(1) "4" [3]=> string(1) "5" [4]=> int(2) [5]=> int(3) [6]=> int(4) [7]=> int(5) }
echo '</br>';

//Функція виводить масив в зворотньому напрямку.
$arr = ['r'=>'1', '2', '3', '4', '5',];
var_dump(array_reverse($arr)).'</br>';//array(5) { [0]=> string(1) "5" [1]=> string(1) "4" [2]=> string(1) "3" [3]=> string(1) "2" ["r"]=> string(1) "1" }
echo '</br>';

//Функція array_flip() міняє місцями ключі і значення, ключі стають значеннями, а значення стають ключами.
$eat = ['q'=>'my', 'we'=>'bread', 'r'=>'read', 'y'=>'blue', 'e'=>'star'];
var_dump(array_flip($eat));//array(5) { ["my"]=> string(1) "q" ["bread"]=> string(2) "we" ["read"]=> string(1) "r" ["blue"]=> string(1) "y" ["star"]=> string(1) "e" }
echo '</br>';

//Функція array_keys() дозволяє отримати лише ключі та повернути іх у виляді нового масиву
$eat = ['q'=>'my', 'we'=>'bread', 'r'=>'read', 'y'=>'blue', 'e'=>'star'];
$ar = array_keys($eat);
var_dump($ar);//array(5) { [0]=> string(1) "q" [1]=> string(2) "we" [2]=> string(1) "r" [3]=> string(1) "y" [4]=> string(1) "e" }
echo '</br>';

//Функція array_values() використовується для отримання всіх значень з масиву і повернення їх у вигляді нового індексованого масиву.
$eat = ['q'=>'my', 'we'=>'bread', 'r'=>'read', 'y'=>'blue', 'e'=>'star', 1, 4];
var_dump(array_values($eat));//array(7) { [0]=> string(2) "my" [1]=> string(5) "bread" [2]=> string(4) "read" [3]=> string(4) "blue" [4]=> string(4) "star" [5]=> int(1) [6]=> int(4) }
echo '</br>';

//
$key = ['q', 'r', 't', 'y'];
$element = ['234', '345','678','910'];

//Функція array_combine() використовується для створення нового асоціативного масиву, використовуючи один масив для ключів та інший 
//масив для значень.
$key = ['q', 'r', 't', 'y'];
$element = ['234', '345','678','910'];
$a = array_combine($key, $element);//array(4) { ["q"]=> string(3) "234" ["r"]=> string(3) "345" ["t"]=> string(3) "678" ["y"]=> string(3) "910" }
var_dump($a);//Array" array(4) { ["q"]=> string(3) "234" ["r"]=> string(3) "345" ["t"]=> string(3) "678" ["y"]=> string(3) "910" }
echo '</br>';

//Функція array_search() використовується для пошуку значення в масиві та повернення ключа.
$key = ['q', 'r', 't', 'y'];
$element = ['234', '345','678','910'];
$a = array_combine($key, $element);
$b = array_search(345, $a);
var_dump($b);//string(1) "r"
echo '</br>';

//Функція array_count_values() показує скільки разів значення є у масиві
$element = ['234', '345','345','910'];
$c = array_count_values($element);
var_dump($c);//array(3) { [234]=> int(1) [345]=> int(2) [910]=> int(1) }
echo '</br>';

//Функція array_rand() повертає випадковий ключ (або ключі) з масиву.
$element = ['234', '345','678','910'];
$d = array_rand($element);
var_dump($d);//кожно разу буде інший
echo '</br>';

//Функція array_unique() використовується для видалення дублікатів із масиву
$el = ['234', '345', '678', '910', '234', '678'];
$e = array_unique($el);
var_dump($e);//array(4) { [0]=> string(3) "234" [1]=> string(3) "345" [2]=> string(3) "678" [3]=> string(3) "910" }
echo '</br>';

//Функція фільтр array_filter
function sum ($num) {
    if($num >=0){
        return true;
    }else{
        return false;
    }
}

$mas = [1,-5,9,0];
$result = array_filter($mas, 'sum');
var_dump($result);//array(3) { [0]=> int(1) [2]=> int(9) [3]=> int(0) }
echo '</br>';

//Функція array_key_exists() використовується для перевірки існування ключа в асоціативному масиві. 
$key = ['q'=>'a', 'w'=>'r', 'e'=>'t', 'r'=>'y'];
$f = array_key_exists('w', $key);
$ff = array_key_exists('u', $key);
var_dump($f).'</br>';//bool(true) - якщо ключ існує
echo '</br>';
var_dump($ff);//bool(false) - якщо ключа немає
echo '</br>';

//Функція in_array() використовується для перевірки існування значення в асоціативному масиві. 
$key = ['q'=>'a', 'w'=>'r', 'e'=>'t', 'r'=>'y'];
$fa = in_array('a', $key);
$fb = in_array('w', $key);
var_dump($fa).'</br>';//bool(true) - якщо значення існує
echo '</br>';
var_dump($fb).'</br>';//bool(false)- якщо значення немає
echo '</br>';

//Функція extract() використовується для імпорту змінних з асоціативного масиву до глобальної області видимості.
$eat = ['name'=>'Oleksandr', 'age'=>'48', 'country'=>'UA', 'lerning'=>'IT STEP'];
$g = extract($eat);
echo $name.'</br>';//Oleksandr
echo $age.'</br>';//48
echo $country.'</br>';//UA
echo $lerning.'</br>';//IT STEP

//Функція implode() використовується для об'єднання елементів масиву в рядок.
$mas = [1, -5, 9, 0];
$t = implode('-', $mas);
echo $t.'</br>';//1--5-9-0

//Функція array_chunk() використовується для поділу масиву на дрібніші підмасиви.
$mas = [1,-5,9,0];
$h = array_chunk($mas, 2);
var_dump($h).'</br>';//array(2) { [0]=> array(2) { [0]=> int(1) [1]=> int(-5) } [1]=> array(2) { [0]=> int(9) [1]=> int(0) } }
echo '</br>';

//Функція array_push() використовується для додавання одного або більше елементів до кінця масиву.
$mas = [1, 5, 9, 0];
array_push($mas, 'xxx', 'yyy');
var_dump($mas).'</br>';//array(6) { [0]=> int(1) [1]=> int(5) [2]=> int(9) [3]=> int(0) [4]=> string(3) "xxx" [5]=> string(3) "yyy" }
echo '</br>';

//Функція array_pad() використовується для доповнення масиву до певної довжини, додаючи вказане значення (заповнювач) масиву.
$mas = [1, 5, 9, 0];
$g = array_pad($mas, 8, 0);
$gg = array_pad($mas, -8, 0);
var_dump($g).'</br>';//array(8) { [0]=> int(1) [1]=> int(5) [2]=> int(9) [3]=> int(0) [4]=> int(0) [5]=> int(0) [6]=> int(0) [7]=> int(0) }
echo '</br>';
var_dump($gg).'</br>';//array(8) { [0]=> int(0) [1]=> int(0) [2]=> int(0) [3]=> int(0) [4]=> int(1) [5]=> int(5) [6]=> int(9)   
echo '</br>';


//Функцыя sort()  призначена для сортування елементів масиву у порядку зростання (за значеннями).
$numbers = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
$str = ['a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'z', 'x', 'c', 'v', 'b', 'n'];
sort($numbers);//відсортує та змінить елемети в ісходному масиві
$sorted = $numbers;
sort($sorted);//відсортує та змінить елемети в скопійованому масиві, а ісходний масив залишиться без змін
$strNew = $str;
sort($strNew);
print_r($numbers);//Array ( [0] => 1 [1] => 1 [2] => 2 [3] => 3 [4] => 3 [5] => 4 [6] => 5 [7] => 5 [8] => 5 [9] => 6 [10] => 9 )
echo '</br>';
print_r($sorted);//Array ( [0] => 1 [1] => 1 [2] => 2 [3] => 3 [4] => 3 [5] => 4 [6] => 5 [7] => 5 [8] => 5 [9] => 6 [10] => 9 )
echo '</br>';
print_r($strNew);//Array ( [0] => a [1] => b [2] => c [3] => d [4] => f [5] => g [6] => h [7] => j [8] => k [9] => n [10] => s [11] => v [12] => x [13] => z )
echo '</br>';


//Функція array_intersect() вона повертає новий масив, що містить лише ті елементи, які є у всіх переданих масивах.
$a = ['d', 'r', 'j', 'y', '5'];  
$b = ['2', '5', '2', 't', 'y']; 
$numbers =  range(1, 25);
$array = array_intersect($a, $b, $numbers);
var_dump($array);//array(1) { [4]=> string(1) "5" }
echo '</br>';


//Функція shuffle() використовується для випадкового перемішування елементів масиву.
$arr = range(1, 10); 
$str = ['one', 'two', 'three', 'four', 'five'];
shuffle($arr); // випадково перемішає елементи індексного масиву 
shuffle($str); // випадково перемішає елементи асоціативого масиву 
echo 'Випадково перемішає елементи <b>індексного масиву:</b></br>';
var_dump($arr);
echo '</br>';
echo '</br>';
echo 'Випадково перемішає елементи <b>асоціативого масиву:</b></br>';
var_dump($str); 

//ЗАКІНЧЕННЯ ДОМАШНЬОГО ЗАВДАННЯ
echo '</br>';
echo '</br>';

//ФУКЦІЇ ЧАСУ (01.01.1970 - початок відліку часу)

time();

echo time().'</br>';//1697212718 час в мілісекундах
echo date('Y-m-d').'</br>';//2023-10-13

//u - кількість секунд від 01.01.1970
//z - омер дня від початку року 
echo date('U').'</br>';//1697213165 кількист секунд від початку відліку року 01.01.1970
echo date('z').'</br>';//285 текущій день року
echo date('Y').'</br>';//2023 рік поточний
echo date('y').'</br>';//23 останні дві цифри року
echo date('m').'</br>';//10 номер місяця з 0  попереду
echo date('n').'</br>';//10 номер місяця без 0  попереду
echo date('d').'</br>';//13 номер дня з 0  попереду
echo date('j').'</br>';//13 номер дня без 0  попереду
echo date('w').'</br>';//5 порядковий день від понеділка
echo date('h').'</br>';//07 час в 12 годинному форматі
echo date('H').'</br>';//19 час в 24 годинному форматі
echo date('i').'</br>';//17 хвилини
echo date('s').'</br>';//15 секунди
echo date('L').'</br>';//0 (1 - високосний, 0 - не високосний)
echo date('W').'</br>';//41 тиждень від початку року
echo date('t').'</br>';//31 кількість двнів в місяці

echo date('m.Y').'</br>';//10.2023
echo date('h:i:s: d.m.y').'</br>';//07:24:56: 13.10.23

//Редагування дати
$date = date_create('2024-12-14');
date_modify($date, '3 day 1 month');//додали 3 дні (дозволяє додавати та віднімати)
echo date_format($date, 'd.m.Y').'</br>';//17.01.2025

//різниця між датами
$date1 = date_create('2023-10-13');
$date2 = date_create('2024-03-05');
$date12 = date_diff($date1, $date2);//
echo $date12->format('%a різниця в двті').'</br>';//144 різниця в даті

//часова зона
echo date_default_timezone_set('Europe/Kiev').'</br>';//1

//Вказує в якому часовому поясу ми знаходимся
echo date_default_timezone_get().'</br>';//Europe/Kiev

?>
